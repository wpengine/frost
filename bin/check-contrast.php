<?php
/**
 * WCAG AA contrast gate for theme moods.
 *
 * Role contract (AA 4.5:1):
 *   secondary on contrast — on-dark accent (hub consumers sit on contrast bands)
 *   base on contrast      — body text on dark bands
 *   contrast on base      — body text on light surfaces
 *   button text on primary — every mood must declare a button text color that
 *     passes AA on its own primary; patterns must not pin it
 *
 * WR-owned moods in styles/ FAIL the process; upstream Frost palettes kept in
 * styles-reference/ WARN only (not registered by WordPress). Parent theme.json
 * is WARN-only while it still ships the upstream Frost placeholder palette
 * (primary #0000ff / secondary #000099). Flip it back to FAIL when a real WR
 * default palette lands in theme.json.
 *
 * Usage: php bin/check-contrast.php  (from theme root)
 */

declare(strict_types=1);

const AA_THRESHOLD = 4.5;

/** Parent theme.json — Frost placeholder palette; WARN until WR default lands. */
const THEME_JSON_MOOD = 'theme.json';

/**
 * @return array{r: float, g: float, b: float}
 */
function hex_to_rgb(string $hex): array {
	$hex = ltrim(trim($hex), '#');
	if (strlen($hex) === 3) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}
	if (strlen($hex) !== 6 || !ctype_xdigit($hex)) {
		fwrite(STDERR, "Invalid hex color: #{$hex}\n");
		exit(1);
	}
	return [
		'r' => hexdec(substr($hex, 0, 2)),
		'g' => hexdec(substr($hex, 2, 2)),
		'b' => hexdec(substr($hex, 4, 2)),
	];
}

function channel_linear(float $c): float {
	$c = $c / 255.0;
	return $c <= 0.03928 ? $c / 12.92 : pow(($c + 0.055) / 1.055, 2.4);
}

function relative_luminance(string $hex): float {
	$rgb = hex_to_rgb($hex);
	return 0.2126 * channel_linear($rgb['r'])
		+ 0.7152 * channel_linear($rgb['g'])
		+ 0.0722 * channel_linear($rgb['b']);
}

function contrast_ratio(string $fg, string $bg): float {
	$l1 = relative_luminance($fg);
	$l2 = relative_luminance($bg);
	$lighter = max($l1, $l2);
	$darker = min($l1, $l2);
	return ($lighter + 0.05) / ($darker + 0.05);
}

/**
 * @return array<string, mixed>
 */
function load_json(string $path): array {
	$raw = file_get_contents($path);
	if ($raw === false) {
		fwrite(STDERR, "Cannot read {$path}\n");
		exit(1);
	}
	$data = json_decode($raw, true);
	if (!is_array($data)) {
		fwrite(STDERR, "Invalid JSON: {$path}\n");
		exit(1);
	}
	return $data;
}

/**
 * @return array<string, string> slug => hex
 */
function palette_from_data(array $data, string $path): array {
	$entries = $data['settings']['color']['palette'] ?? null;
	if (!is_array($entries)) {
		fwrite(STDERR, "No palette in {$path}\n");
		exit(1);
	}
	$out = [];
	foreach ($entries as $entry) {
		if (!isset($entry['slug'], $entry['color'])) {
			continue;
		}
		$out[(string) $entry['slug']] = (string) $entry['color'];
	}
	return $out;
}

/**
 * Parse button text color slug from styles.elements.button.color.text.
 * Expects var(--wp--preset--color--<slug>) or returns null.
 */
function button_text_slug_from_data(array $data): ?string {
	$text = $data['styles']['elements']['button']['color']['text'] ?? null;
	if (!is_string($text) || $text === '') {
		return null;
	}
	if (preg_match('/^var\(--wp--preset--color--([a-z0-9-]+)\)$/', $text, $m)) {
		return $m[1];
	}
	return null;
}

/**
 * Load mood JSON files from a directory. Missing/empty dir → empty list.
 *
 * @return array<string, array{palette: array<string, string>, button_text_slug: ?string}>
 */
function load_moods_from_dir(string $dir): array {
	$moods = [];
	if (!is_dir($dir)) {
		return $moods;
	}
	$files = glob($dir . '/*.json') ?: [];
	sort($files);
	foreach ($files as $file) {
		$name = basename($file, '.json');
		$data = load_json($file);
		$moods[$name] = [
			'palette' => palette_from_data($data, $file),
			'button_text_slug' => button_text_slug_from_data($data),
		];
	}
	return $moods;
}

/**
 * @return array{
 *   moods: array<string, array{palette: array<string, string>, button_text_slug: ?string}>,
 *   reference_moods: array<string, array{palette: array<string, string>, button_text_slug: ?string}>,
 *   theme_button_text_slug: ?string
 * }
 */
function load_moods(string $theme_root): array {
	$moods = [];
	$theme_json = $theme_root . '/theme.json';
	if (!is_file($theme_json)) {
		fwrite(STDERR, "Missing theme.json\n");
		exit(1);
	}
	$theme_data = load_json($theme_json);
	$theme_button_text_slug = button_text_slug_from_data($theme_data);
	$moods['theme.json'] = [
		'palette' => palette_from_data($theme_data, $theme_json),
		'button_text_slug' => $theme_button_text_slug,
	];

	$styles_dir = $theme_root . '/styles';
	if (!is_dir($styles_dir)) {
		fwrite(STDERR, "Missing styles/\n");
		exit(1);
	}
	foreach (load_moods_from_dir($styles_dir) as $name => $entry) {
		$moods[$name] = $entry;
	}

	$reference_moods = load_moods_from_dir($theme_root . '/styles-reference');

	return [
		'moods' => $moods,
		'reference_moods' => $reference_moods,
		'theme_button_text_slug' => $theme_button_text_slug,
	];
}

/**
 * @param array<string, string> $palette
 */
function require_slugs(string $mood, array $palette, array $slugs): void {
	foreach ($slugs as $slug) {
		if (!isset($palette[$slug])) {
			fwrite(STDERR, "Mood {$mood}: missing palette slug '{$slug}'\n");
			exit(1);
		}
	}
}

/**
 * Resolve effective button text color for a mood.
 *
 * @param array<string, string> $palette
 * @return array{hex: string, slug: string, via: string}|null
 */
function resolve_button_text(string $mood, array $palette, ?string $mood_slug, ?string $theme_slug): ?array {
	if ($mood_slug !== null) {
		if (!isset($palette[$mood_slug])) {
			fwrite(STDERR, "Mood {$mood}: button text slug '{$mood_slug}' not in palette\n");
			exit(1);
		}
		return [
			'hex' => $palette[$mood_slug],
			'slug' => $mood_slug,
			'via' => 'mood',
		];
	}
	if ($theme_slug !== null) {
		if (!isset($palette[$theme_slug])) {
			fwrite(STDERR, "Mood {$mood}: theme.json button text slug '{$theme_slug}' not in palette\n");
			exit(1);
		}
		return [
			'hex' => $palette[$theme_slug],
			'slug' => $theme_slug,
			'via' => 'theme.json',
		];
	}
	return null;
}

/**
 * Run the four contrast checks for one mood; append lines and update counters.
 *
 * @param array{palette: array<string, string>, button_text_slug: ?string} $entry
 * @param list<string> $lines
 */
function evaluate_mood(
	string $mood,
	array $entry,
	array $checks,
	?string $theme_button_text_slug,
	bool $is_theme_json,
	bool $warn_only,
	array &$lines,
	int &$pass_count,
	int &$warn_count,
	int &$fail_count
): void {
	$palette = $entry['palette'];
	require_slugs($mood, $palette, ['base', 'contrast', 'neutral', 'primary', 'secondary']);

	foreach ($checks as $check) {
		$fg = $palette[$check['fg']];
		$bg = $palette[$check['bg']];
		$ratio = contrast_ratio($fg, $bg);
		$ok = $ratio >= AA_THRESHOLD;
		$line = sprintf(
			'%s  %s  %s on %s  %.2f',
			$mood,
			$check['label'],
			$fg,
			$bg,
			$ratio
		);
		append_result($ok, $line, $warn_only, $lines, $pass_count, $warn_count, $fail_count);
	}

	$resolved = resolve_button_text(
		$mood,
		$palette,
		$entry['button_text_slug'],
		$is_theme_json ? null : $theme_button_text_slug
	);
	if ($resolved === null) {
		fwrite(STDERR, "Mood {$mood}: no button text color (mood or theme.json fallback)\n");
		exit(1);
	}
	$primary = $palette['primary'];
	$ratio = contrast_ratio($resolved['hex'], $primary);
	$ok = $ratio >= AA_THRESHOLD;
	$line = sprintf(
		'%s  button text on primary  %s on %s  %.2f  (via %s)',
		$mood,
		$resolved['hex'],
		$primary,
		$ratio,
		$resolved['via']
	);
	append_result($ok, $line, $warn_only, $lines, $pass_count, $warn_count, $fail_count);
}

/**
 * @param list<string> $lines
 */
function append_result(
	bool $ok,
	string $line,
	bool $warn_only,
	array &$lines,
	int &$pass_count,
	int &$warn_count,
	int &$fail_count
): void {
	if ($warn_only) {
		$status = $ok ? 'PASS' : 'WARN';
		if ($ok) {
			$pass_count++;
		} else {
			$warn_count++;
		}
	} else {
		$status = $ok ? 'PASS' : 'FAIL';
		if ($ok) {
			$pass_count++;
		} else {
			$fail_count++;
		}
	}
	$lines[] = $status . '  ' . $line;
}

$theme_root = dirname(__DIR__);
$loaded = load_moods($theme_root);
$moods = $loaded['moods'];
$reference_moods = $loaded['reference_moods'];
$theme_button_text_slug = $loaded['theme_button_text_slug'];

$checks = [
	['fg' => 'secondary', 'bg' => 'contrast', 'label' => 'secondary on contrast'],
	['fg' => 'base', 'bg' => 'contrast', 'label' => 'base on contrast'],
	['fg' => 'contrast', 'bg' => 'base', 'label' => 'contrast on base'],
];

$fail_count = 0;
$warn_count = 0;
$pass_count = 0;

echo "=== AA contrast gate (threshold " . AA_THRESHOLD . ":1) ===\n\n";

$owned_lines = [];
$theme_json_lines = [];
$reference_warn_lines = [];

foreach ($moods as $mood => $entry) {
	$is_theme_json = $mood === THEME_JSON_MOOD;
	$lines = $is_theme_json ? $theme_json_lines : $owned_lines;
	evaluate_mood(
		$mood,
		$entry,
		$checks,
		$theme_button_text_slug,
		$is_theme_json,
		$is_theme_json,
		$lines,
		$pass_count,
		$warn_count,
		$fail_count
	);
	if ($is_theme_json) {
		$theme_json_lines = $lines;
	} else {
		$owned_lines = $lines;
	}
}

foreach ($reference_moods as $mood => $entry) {
	evaluate_mood(
		$mood,
		$entry,
		$checks,
		$theme_button_text_slug,
		false,
		true,
		$reference_warn_lines,
		$pass_count,
		$warn_count,
		$fail_count
	);
}

echo "--- WR-owned moods ---\n";
foreach ($owned_lines as $line) {
	echo $line . "\n";
}

echo "\nWARN (parent theme.json — upstream Frost placeholder palette, replacement pending)\n";
foreach ($theme_json_lines as $line) {
	echo $line . "\n";
}

echo "\nWARN (reference-only upstream Frost palettes, not registered)\n";
foreach ($reference_warn_lines as $line) {
	echo $line . "\n";
}

echo "\n=== Summary ===\n";
printf("PASS=%d  WARN=%d  FAIL=%d\n", $pass_count, $warn_count, $fail_count);

exit($fail_count > 0 ? 1 : 0);
