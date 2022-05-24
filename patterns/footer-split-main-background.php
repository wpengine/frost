<?php
/**
 * Title: Footer with heading, links, text.
 * Slug: frost/footer-split-main-background
 * Categories: frost-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"40vh","bottom":"40px"},"margin":{"top":"0px"}}},"backgroundColor":"main","textColor":"base","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:40vh;padding-bottom:40px">
<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"}},"fontSize":"max-48"} -->
<p class="has-max-48-font-size" id="design-with-courage" style="line-height:1.25"><?php echo esc_html__( 'Design with courage.', 'frost' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Start Here', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Our Services', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Contact Us', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p id="block-b19cad4c-373b-45bb-8ab0-63bbc555c61d"><a href="#">Twitter</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p id="block-3a04d4bc-d50f-4d10-a3e8-627b268529d4"><a href="#">Instagram</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p id="block-3667c312-d03c-496d-8ee5-ac375815f684"><a href="#">LinkedIn</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top">
<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
<!-- wp:paragraph -->
<p>© <?php echo gmdate( 'Y' ); ?> Your Company Name LLC</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
