<?php
/**
 * Frost: Call-to-action pattern with buttons, black background
 *
 * @package Frost
 */

return array(
	'title'         => __( 'Call-to-action with text, buttons.', 'frost' ),
	'categories'    => array( 'frost-general' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-top:0px"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"large is-style-fill-white"} -->
				<div class="wp-block-button large is-style-fill-white"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Get Started', 'frost' ) . ' →</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"style":{"border":{"radius":0}},"className":"large is-style-outline-white"} -->
				<div class="wp-block-button large is-style-outline-white"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
