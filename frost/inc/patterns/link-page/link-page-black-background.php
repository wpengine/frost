<?php
/**
 * Frost: Link page with image, buttons, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Link page with image, buttons.', 'frost' ),
	'categories' => array( 'frost-link-page' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","className":"is-full-height","layout":{"wideSize":"600px"}} -->
				<div class="wp-block-group alignfull is-full-height has-black-background-color has-background"><!-- wp:group -->
				<div class="wp-block-group"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:image {"align":"center","id":736,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://frostwp.com/demo/wp-content/uploads/sites/2/2021/05/sample-white_800x800.jpg" alt="Sample Frost Image" class="wp-image-736" width="120" height="120"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"large"} -->
				<h2 class="has-text-align-center has-white-color has-text-color has-large-font-size" id="your-name">Your Name</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
				<p class="has-text-align-center has-white-color has-text-color has-link-color">Company Name<br><a href="mailto:name@company.com">name@company.com</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","iconBackgroundColor":"white","iconBackgroundColorValue":"#fff","size":"has-normal-icon-size","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
				
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				
				<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
				
				<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
				<!-- /wp:social-links -->
				
				<!-- wp:spacer {"height":60} -->
				<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:group {"className":"is-style-max-width-600"} -->
				<div class="wp-block-group is-style-max-width-600"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"width":100,"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
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
				<!-- /wp:buttons --></div>
				<!-- /wp:group -->
				
				<!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
				<p class="has-text-align-center has-link-color">m<a href="https://frostwp.com/">Made with Frost</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group -->',
);
