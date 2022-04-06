<?php
/**
 * Title: Portfolio with images, text.
 * Slug: frost/general-portfolio-main-background
 * Categories: frost-general
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"main","textColor":"base","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background has-link-color" style="margin-top:0px">
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="sample-heading"><?php echo esc_html__( 'Sample Heading', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'View Project', 'frost' ); ?> →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:gallery {"columns":2,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
<!-- wp:image {"id":3492,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/portfolio-white_800x800_1.jpg', 'frost' ) ); ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3492"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3493,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/portfolio-white_800x800_2.jpg', 'frost' ) ); ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3493"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3494,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/portfolio-white_800x800_3.jpg', 'frost' ) ); ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3494"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":3495,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/portfolio-white_800x800_4.jpg', 'frost' ) ); ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3495"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":90} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
