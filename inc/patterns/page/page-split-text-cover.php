<?php
/**
 * Frost: Split page with text, cover
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Sample split page.', 'frost' ),
	'categories' => array( 'frost-page' ),
	'content'    => '<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
				<div class="wp-block-columns alignfull" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"5%","left":"5%","top":"5%","bottom":"5%"}}},"className":"is-style-no-margin"} -->
				<div class="wp-block-column is-vertically-aligned-center is-style-no-margin" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%;flex-basis:50%"><!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="has-x-large-font-size" id="text-on-left-image-on-right">' . esc_html__( 'Text on left, cover on right.', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Get Started', 'frost' ) . '</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"50%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin" style="flex-basis:50%"><!-- wp:cover {"url":"https://frostwp.com/wp-content/uploads/2021/12/sample-black_1200x1200.jpg","id":3485,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh"} -->
				<div class="wp-block-cover" style="min-height:100vh"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3485" alt="Frost WordPress Theme" src="https://frostwp.com/wp-content/uploads/2021/12/sample-black_1200x1200.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size"></p>
				<!-- /wp:paragraph --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
);
