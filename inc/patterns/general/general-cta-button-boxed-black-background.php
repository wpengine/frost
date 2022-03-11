<?php
/**
 * Frost: Call-to-action pattern with button, black background
 *
 * @package Frost
 */

return array(
	'title'         => __( 'Call-to-action with text, button.', 'frost' ),
	'categories'    => array( 'frost-general' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background" style="margin-top:0px"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:group {"align":"wide","style":{"border":{"width":"20px"}},"borderColor":"white","className":"is-style-boxshadow"} -->
				<div class="wp-block-group alignwide is-style-boxshadow has-border-color has-white-border-color" style="border-width:20px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"textColor":"white"} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center has-white-color has-text-color" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"15px","right":"25px","bottom":"15px","left":"25px"}},"border":{"radius":"0px"}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link" style="border-radius:0px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px">' . esc_html__( 'Let’s Get Started', 'frost' ) . ' →</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->
				
				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
