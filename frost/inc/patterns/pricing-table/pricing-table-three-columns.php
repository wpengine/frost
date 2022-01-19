<?php
/**
 * Frost: Pricing table with three columns
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Pricing table with list, buttons.', 'frost' ),
	'categories' => array( 'frost-pricing-table' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
				<h2 class="has-text-align-center has-x-large-font-size" id="pricing-table">' . esc_html__( 'Pricing Table', 'frost' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html__( 'Create a three-column table, wide-width', 'frost' ) . ' (1200px).</p>
				<!-- /wp:paragraph -->

				<!-- wp:columns {"align":"wide","className":"has-smaller-left-margin"} -->
				<div class="wp-block-columns alignwide has-smaller-left-margin"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"black","className":"has-black-border"} -->
				<div class="wp-block-group has-black-border has-border-color has-black-border-color" style="border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"black","textColor":"white"} -->
				<h4 class="has-text-align-center has-white-color has-black-background-color has-text-color has-background" id="personal-95" style="margin-bottom:0px">' . esc_html__( 'Personal', 'frost' ) . ' - $95</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
				<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"className":"pricing-table","fontSize":"small"} -->
				<ul class="pricing-table has-small-font-size">
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li></ul>
				<!-- /wp:list -->

				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Sign Up Now', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"black","className":"has-black-border"} -->
				<div class="wp-block-group has-black-border has-border-color has-black-border-color" style="border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"black","textColor":"white"} -->
				<h4 class="has-text-align-center has-white-color has-black-background-color has-text-color has-background" id="professional-295" style="margin-bottom:0px">' . esc_html__( 'Professional', 'frost' ) . ' - $295</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
				<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"className":"pricing-table","fontSize":"small"} -->
				<ul class="pricing-table has-small-font-size">
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li></ul>
				<!-- /wp:list -->

				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Sign Up Now', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"black","className":"has-black-border"} -->
				<div class="wp-block-group has-black-border has-border-color has-black-border-color" style="border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"black","textColor":"white"} -->
				<h4 class="has-text-align-center has-white-color has-black-background-color has-text-color has-background" id="enterprise-495" style="margin-bottom:0px">' . esc_html__( 'Enterprise', 'frost' ) . ' - $495</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
				<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"className":"pricing-table","fontSize":"small"} -->
				<ul class="pricing-table has-small-font-size">
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li>
				<li>' . esc_html__( 'Feature Item', 'frost' ) . '</li></ul>
				<!-- /wp:list -->

				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Sign Up Now', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
