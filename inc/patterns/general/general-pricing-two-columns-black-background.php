<?php
/**
 * Frost: Pricing table with two columns, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Pricing table with list, buttons.', 'frost' ),
	'categories' => array( 'frost-general' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","textColor":"white","layout":{"wideSize":"800px"}} -->
				<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-top:0px"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
				<h2 class="has-text-align-center has-x-large-font-size" id="pricing-table">' . esc_html__( 'Pricing Table', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html__( 'Create a two-column table, wide-width', 'frost' ) . ' (800px).</p>
				<!-- /wp:paragraph -->

				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"white","className":"has-white-border"} -->
				<div class="wp-block-group has-white-border has-border-color has-white-border-color" style="border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"white","textColor":"black"} -->
				<h4 class="has-text-align-center has-black-color has-white-background-color has-text-color has-background" id="personal-95" style="margin-bottom:0px">' . esc_html__( 'Personal', 'frost' ) . ' - $95</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"10px"}}} -->
				<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Sign Up Now', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"white","className":"has-white-border"} -->
				<div class="wp-block-group has-white-border has-border-color has-white-border-color" style="border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"white","textColor":"black"} -->
				<h4 class="has-text-align-center has-black-color has-white-background-color has-text-color has-background" id="professional-295" style="margin-bottom:0px">' . esc_html__( 'Professional', 'frost' ) . ' - $295</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"10px"}}} -->
				<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Feature Item', 'frost' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"color":"white","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Sign Up Now', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
