<?php
/**
 * Frost: Footer with text, button, links
 *
 * @package Frost
 */

return array(
	'title'         => __( 'Footer with text, button, links.', 'frost' ),
	'categories'    => array( 'frost-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0px"}}},"layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull" style="font-size:18px;margin-top:0px"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"100px","bottom":"100px"},"blockGap":"100px"}}} -->
				<div class="wp-block-columns alignwide has-link-color" style="padding-top:100px;padding-bottom:100px"><!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
				<h4 id="our-company">' . esc_html__( 'Our Company', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link no-border-radius" href="#">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
				<h4 id="about-us">' . esc_html__( 'About Us', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size">
				<li><a href="#">' . esc_html__( 'Start Here', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Our Mission', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Brand Guide', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Newsletter', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Accessibility', 'frost' ) . '</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
				<h4 id="services">' . esc_html__( 'Services', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size">
				<li><a href="#">' . esc_html__( 'Web Design', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Development', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Copywriting', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Marketing', 'frost' ) . '</a></li>
				<li><a href="#">' . esc_html__( 'Social Media', 'frost' ) . '</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
				<h4 id="connect">' . esc_html__( 'Connect', 'frost' ) . '</h4>
				<!-- /wp:heading -->

				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size"><li><a href="#">Facebook</a></li><li><a href="#">Instagram</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Twitter</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">LinkedIn</a></li><li><a href="#">Dribbble</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
