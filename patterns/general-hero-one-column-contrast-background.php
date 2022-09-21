<?php
/**
 * Title: Section with image, text, buttons.
 * Slug: frost/general-hero-one-column-contrast-background
 * Categories: frost-general
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"800px"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"100px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:image {"id":3482,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-white_1920x1200.jpg'; ?>" alt="Sample Image" class="wp-image-3482"/></figure>
<!-- /wp:image -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="image-heading-text-buttons"><?php echo esc_html__( 'Image, heading, text, buttons.', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus eu pellentesque vitae gravida non diam accumsan.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
