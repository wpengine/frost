<?php
/**
 * Title: Portfolio with images, text.
 * Slug: frost/general-portfolio
 * Categories: frost-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","right":"30px","bottom":"100px","left":"30px"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="sample-heading"><?php echo esc_html__( 'Sample Heading', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'View Project', 'frost' ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:gallery {"columns":0,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-0 is-cropped"><!-- wp:image {"id":3497,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_800x800.jpg'; ?>" alt="Sample Image" class="wp-image-3497"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3498,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_800x800.jpg'; ?>" alt="Sample Image" class="wp-image-3498"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3499,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_800x800.jpg'; ?>" alt="Sample Image" class="wp-image-3499"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3500,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-black_800x800.jpg'; ?>" alt="Sample Image" class="wp-image-3500"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
