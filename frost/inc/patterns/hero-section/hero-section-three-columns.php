<?php
/**
 * Frost: Hero section with image, text, button
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Section with image, text, button.', 'frost' ),
	'categories' => array( 'frost-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
				<h2 class="has-text-align-center has-x-large-font-size" id="image-heading-text-button-1">' . esc_html__( 'Image, heading, text, button.', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"is-style-no-margin"} -->
				<p class="has-text-align-center is-style-no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/demo/wp-content/uploads/sites/2/2021/05/sample-black_1200x1200.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-676"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center" id="sample-heading-1">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/demo/wp-content/uploads/sites/2/2021/05/sample-black_1200x1200.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-676"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center" id="sample-heading-2">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/demo/wp-content/uploads/sites/2/2021/05/sample-black_1200x1200.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-676"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center" id="sample-heading-3">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":"70px"} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
