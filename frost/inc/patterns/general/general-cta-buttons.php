<?php
/**
 * Frost: Call-to-action pattern with buttons
 *
 * @package Frost
 */

return array(
	'title'         => __( 'Call-to-action with text, buttons.', 'frost' ),
	'categories'    => array( 'frost-general' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-margin","fontSize":"large"} -->
				<p class="is-style-no-margin has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill large"} -->
				<div class="wp-block-button is-style-fill large"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Get Started', 'frost' ) . ' →</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline large"} -->
				<div class="wp-block-button is-style-outline large"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
