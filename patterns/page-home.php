<?php
/**
 * Title: Sample home page.
 * Slug: frost/page-home
 * Categories: frost-page
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"800px"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"70px","right":"30px","bottom":"100px","left":"30px"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:70px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:image {"id":3480,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_1920x1200.jpg'; ?>" alt="Sample Image" class="wp-image-3480"/></figure>
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
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
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
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"70px","left":"30px"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:70px;padding-left:30px"><!-- wp:media-text {"mediaId":3485,"mediaLink":"https://frostwp.com/patterns/hero-section/sample-black_1200x1200/","mediaType":"image","mediaWidth":40} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_1200x1200.jpg'; ?>" alt="Sample Image" class="wp-image-3485 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="image-on-left-text-on-right"><?php echo esc_html__( 'Media on left, text on right.', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius wp-element-button"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","bottom":"100px","right":"30px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"}},"border":{"radius":"0px"}},"className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px"><?php echo esc_html__( 'Let’s Get Started', 'frost' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"100px","left":"30px"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="image-heading-text-button-1"><?php echo esc_html__( 'Image, heading, text, button.', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_1200x1200.jpg'; ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-1"><?php echo esc_html__( 'Sample Heading', 'frost' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_1200x1200.jpg'; ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-2"><?php echo esc_html__( 'Sample Heading', 'frost' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_1200x1200.jpg'; ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-3"><?php echo esc_html__( 'Sample Heading', 'frost' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
