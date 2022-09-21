<?php
/**
 * Title: Section with image, text, buttons.
 * Slug: frost/general-hero-two-columns-contrast-background
 * Categories: frost-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"70px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:70px;padding-left:30px"><!-- wp:media-text {"mediaPosition":"right","mediaId":3484,"mediaLink":"https://frostwp.com/patterns/hero-section/sample-white_1200x1200/","mediaType":"image","mediaWidth":40} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 40%"><div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="text-on-left-image-on-right"><?php echo esc_html__( 'Text on left, media on right.', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-white_1200x1200.jpg'; ?>" alt="Sample Image" class="wp-image-3484 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
