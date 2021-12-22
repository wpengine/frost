<?php
/**
 * Frost: Portfolio with images, text
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Portfolio with images, text.', 'frost' ),
	'categories' => array( 'frost-portfolio' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"","className":"has-no-bottom-margin"} -->
				<div class="wp-block-column is-vertically-aligned-center has-no-bottom-margin"><!-- wp:heading -->
				<h2 id="sample-heading">Sample Heading</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph -->
				<p><a href="#">View Project →</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center","width":"","className":"has-no-bottom-margin"} -->
				<div class="wp-block-column is-vertically-aligned-center has-no-bottom-margin"><!-- wp:gallery {"columns":0,"linkTo":"none"} -->
				<figure class="wp-block-gallery has-nested-images columns-0 is-cropped"><!-- wp:image {"id":2429,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/pro/wp-content/uploads/sites/14/2021/08/portfolio-black_800x800_1.jpg" alt="Sample Frost Image" class="wp-image-2429"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2430,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/pro/wp-content/uploads/sites/14/2021/08/portfolio-black_800x800_2.jpg" alt="Sample Frost Image" class="wp-image-2430"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2431,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/pro/wp-content/uploads/sites/14/2021/08/portfolio-black_800x800_3.jpg" alt="Sample Frost Image" class="wp-image-2431"/></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"id":2432,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/pro/wp-content/uploads/sites/14/2021/08/portfolio-black_800x800_4.jpg" alt="Sample Frost Image" class="wp-image-2432"/></figure>
				<!-- /wp:image --></figure>
				<!-- /wp:gallery --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":60} -->
				<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
