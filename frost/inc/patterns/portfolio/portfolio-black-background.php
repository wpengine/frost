<?php
/**
 * Frost: Portfolio with images, text, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Portfolio with images, text.', 'frost' ),
	'categories' => array( 'frost-portfolio' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"","className":"has-no-bottom-margin"} -->
				<div class="wp-block-column is-vertically-aligned-center has-no-bottom-margin"><!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
				<h2 class="has-white-color has-text-color has-x-large-font-size" id="sample-heading">Sample Heading</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
				<p class="has-link-color"><a href="#">View Project →</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center","width":"","className":"has-no-bottom-margin"} -->
				<div class="wp-block-column is-vertically-aligned-center has-no-bottom-margin"><!-- wp:gallery {"columns":2,"linkTo":"none"} -->
				<figure class="wp-block-gallery has-nested-images columns-2 is-cropped"><!-- wp:image {"id":2433,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/demo/wp-content/uploads/sites/14/2021/08/portfolio-white_800x800_1.jpg" alt="Sample Frost Image" class="wp-image-2433"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2434,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/demo/wp-content/uploads/sites/14/2021/08/portfolio-white_800x800_2.jpg" alt="Sample Frost Image" class="wp-image-2434"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2435,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/demo/wp-content/uploads/sites/14/2021/08/portfolio-white_800x800_3.jpg" alt="Sample Frost Image" class="wp-image-2435"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2436,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/demo/wp-content/uploads/sites/14/2021/08/portfolio-white_800x800_4.jpg" alt="Sample Frost Image" class="wp-image-2436"/></figure>
				<!-- /wp:image --></figure>
				<!-- /wp:gallery --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":60} -->
				<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
