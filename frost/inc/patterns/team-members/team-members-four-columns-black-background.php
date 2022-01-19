<?php
/**
 * Frost: Team members with image, text, link, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Team with image, text, link.', 'frost' ),
	'categories' => array( 'frost-team-members' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
				<h2 class="has-text-align-center has-x-large-font-size" id="our-team">' . esc_html__( 'Our Team', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html__( 'The people who are ready to serve you.', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":3488,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-white_800x800.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-3488"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
				<h4 class="has-text-align-center has-medium-font-size" id="member-name-1">' . esc_html__( 'Member Name', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":[]}},"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center has-link-color" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px"><a href="#">' . esc_html__( 'View profile', 'frost' ) . '</a>.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":3488,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-white_800x800.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-3488"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
				<h4 class="has-text-align-center has-medium-font-size" id="member-name-2">' . esc_html__( 'Member Name', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px"><a href="#">' . esc_html__( 'View profile', 'frost' ) . '</a>.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":3488,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-white_800x800.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-3488"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
				<h4 class="has-text-align-center has-medium-font-size" id="member-name-3">' . esc_html__( 'Member Name', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px"><a href="#">' . esc_html__( 'View profile', 'frost' ) . '</a>.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":3488,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="' . esc_url( __( 'https://frostwp.com/wp-content/uploads/2021/12/sample-white_800x800.jpg', 'frost' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'frost' ) . '" class="wp-image-3488"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
				<h4 class="has-text-align-center has-medium-font-size" id="member-name-4">' . esc_html__( 'Member Name', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
				<p class="has-text-align-center" style="font-size:18px"><a href="#">' . esc_html__( 'View profile', 'frost' ) . '</a>.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
