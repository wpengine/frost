<?php
/**
 * Title: Podcast episode with media, text.
 * Slug: frost/general-podcast-contrast-background
 * Categories: frost-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"100px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"60px"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":3488,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-white_800x800.jpg'; ?>" alt="Sample Image" class="wp-image-3488"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="sample-podcast-episode"><?php echo esc_html__( 'Sample Podcast Episode', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Quisque vitae mi pellentesque arcu fermentum, dignissim velit vitae, malesuad elit condimentum. Vestibulum et faucibus.</p>
<!-- /wp:paragraph -->
<!-- wp:audio {"id":3546} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/audio/sample-audio-file.mp3'; ?>"></audio></figure>
<!-- /wp:audio -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link wp-element-button" href="#">Apple Podcasts</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link wp-element-button" href="#">Google Podcasts</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link wp-element-button" href="#">Spotify</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link wp-element-button" href="#">Stitcher</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
