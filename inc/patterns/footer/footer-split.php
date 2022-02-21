<?php
/**
 * Frost: Footer with heading, links, text
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with heading, links, text.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40vh","bottom":"40px"}}},"layout":{"inherit":true},"fontSize":"small"} -->
				<div class="wp-block-group alignfull has-small-font-size" style="padding-top:40vh;padding-bottom:40px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"}},"className":"is-style-no-margin","fontSize":"max-48"} -->
				<p class="is-style-no-margin has-max-48-font-size" id="design-with-courage" style="line-height:1.25">Design with courage.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Start Here', 'frost' ) . '</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Our Services', 'frost' ) . '</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Contact Us', 'frost' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-b19cad4c-373b-45bb-8ab0-63bbc555c61d"><a href="#">Twitter</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-3a04d4bc-d50f-4d10-a3e8-627b268529d4"><a href="#">Instagram</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-3667c312-d03c-496d-8ee5-ac375815f684"><a href="#">LinkedIn</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"75%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-vertically-aligned-top is-style-no-margin" style="flex-basis:75%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-vertically-aligned-top is-style-no-margin" style="flex-basis:25%"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin">© ' . gmdate( 'Y' ) . ' Your Company Name LLC</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
