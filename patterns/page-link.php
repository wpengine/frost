<?php
/**
 * Title: Sample link page.
 * Slug: frost/page-link
 * Categories: frost-page
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-full-height","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-full-height" style="margin-top:0px">
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:image {"align":"center","id":3489,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-black_800x800.jpg', 'frost' ) ); ?>"  alt="' . esc_attr__( 'Sample Image', 'frost' ); ?>" class="wp-image-3489" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="your-name-1"><?php echo esc_html__( 'Your Name', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Company Name', 'frost' ); ?><br><a href="mailto:name@company.com">name@company.com</a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconBackgroundColor":"main","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","align":"center","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-background-color">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
</ul>
<!-- /wp:social-links -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Visit My Website', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Read My Blog', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Download My Ebook', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Follow My Newsletter', 'frost' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Listen to My Podcast', 'frost' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="https://frostwp.com/"><?php echo esc_html__( 'Made with Frost', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
