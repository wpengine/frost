<?php
/**
 * Frost: Link page with image, buttons, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Sample link page.', 'frost' ),
	'categories' => array( 'frost-page' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","className":"is-style-full-height","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull is-style-full-height has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:group -->
				<div class="wp-block-group"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:image {"align":"center","id":3488,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="https://frostwp.com/wp-content/uploads/2021/12/sample-white_800x800.jpg" alt="Frost WordPress Theme" class="wp-image-3488" width="120" height="120"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
				<h2 class="has-text-align-center has-x-large-font-size" id="your-name">Your Name</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Company Name<br><a href="mailto:name@company.com">name@company.com</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","iconBackgroundColor":"white","iconBackgroundColorValue":"#fff","size":"has-normal-icon-size","align":"center"} -->
				<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
				
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				
				<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
				
				<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
				<!-- /wp:social-links -->
				
				<!-- wp:spacer {"height":"60px"} -->
				<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-white"><a class="wp-block-button__link no-border-radius">Visit My Website</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-white"><a class="wp-block-button__link no-border-radius">Read My Blog</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-white"><a class="wp-block-button__link no-border-radius">Download My Ebook</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-white"><a class="wp-block-button__link no-border-radius">Follow My Newsletter</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill-white"><a class="wp-block-button__link no-border-radius">Listen to My Podcast</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				
				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><a href="https://frostwp.com/">Made with Frost</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:spacer {"height":"70px"} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group -->',
);
