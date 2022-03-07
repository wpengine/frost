<?php
/**
 * Frost: Call-to-action pattern with button, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Call-to-action with text, button.', 'frost' ),
	'categories' => array( 'frost-general' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-top:0px"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"max-48"} -->
				<h2 class="has-text-align-center has-max-48-font-size" id="let-s-connect" style="font-style:normal;font-weight:400;margin-bottom:20px">' . esc_html__( 'Let’s Connect', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
				<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">' . esc_html__( 'Get in Touch', 'frost' ) . ' →</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->

				<!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
