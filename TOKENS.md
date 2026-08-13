# Whiterail Core — Token Contract

Frozen 2026-08-12 for the Phase 2 pattern build. Every hub pattern references ONLY these
preset slugs — never raw hex, px, or font names. Per-client skinning happens exclusively
through style variations (`styles/*.json`) overriding these presets.

## Color (5 slugs)

| Slug | Role |
|---|---|
| `base` | Page background |
| `contrast` | Text / dark surfaces |
| `primary` | Brand color — main CTAs, emphasis bands |
| `secondary` | Accent guaranteed readable on DARK surfaces (inline links/h3s over `contrast` bands) |
| `neutral` | Light section background alternation |

Markup form: `var:preset|color|primary` (attrs) / `var(--wp--preset--color--primary)` (CSS).

Contrast rules (every mood must satisfy them — learned in Wave A/B QA):
- Accent TEXT on a dark (`contrast`) surface → `secondary`, never `primary` (primary may be
  dark in some moods, e.g. rugged red ~2:1 on #262626).
- Accent TEXT on a light (`base`/`neutral`) surface → `contrast`, never `primary` (primary
  may be light in some moods, e.g. clean amber 1.4:1 on #eeeeee).
- `primary` is reserved for FILLS (button backgrounds, bands) paired with a readable
  text token on top.

## Typography

- Font families: `primary` (body & headings by default), `system-font` (fallback).
  Variations may override heading typography via `styles.elements.heading`
  (see `styles/rugged.json` — condensed display stack, uppercase).
- Font sizes: `x-small` 16 · `small` 18 · `medium` 20 · `large` 24 · `x-large` 30 ·
  `max-36` · `max-48` · `max-60` · `max-72` (fluid above 36).
  Hero h1 = `max-60`; section h2 = `max-36` or `max-48`; card h3 = `large`.

## Spacing

`x-small` 20px · `small` clamp(30–40) · `medium` clamp(40–60) · `large` clamp(50–80) ·
`x-large` clamp(60–100). Section vertical padding: `large` default, `x-large` for hero.

## Layout

`contentSize` 640px · `wideSize` 1200px. Full-bleed sections: group `align:full` with an
inner `constrained` layout.

## Style variations (moods)

- `clean.json` — WR Clean: white/black/amber #ffc300, default Outfit headings
  (Millennium-style reference).
- `rugged.json` — WR Rugged: white/#262626/red #cc0000/safety yellow #f7d117, condensed
  uppercase display headings (Strickland-style reference).
- Upstream Frost color variations kept for reference.

A pattern is only "done" when it renders correctly under BOTH moods with no markup change.

## Heading-level policy (locked per pattern)

- Emergency callout bar: NO heading element (paragraph) — it precedes the h1 site-wide.
- Hero: the page's single h1.
- Section titles: h2. Card/teaser titles inside a section: h3. Never skip levels.
