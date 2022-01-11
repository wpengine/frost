<?php
/**
 * Frost: 404 error content
 *
 * @package Frost
 */

return array(
	'title'    => __( '404 error content.', 'frost' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1>' . esc_html__( 'Not found, error 404', 'frost' ) . '</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html__( 'Oops, the page you are looking for does not exist or is no longer available. Everything is still awesome. Just use the search form to find your way.', 'frost' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:search {"width":75,"widthUnit":"%","showLabel":false,"buttonText":"Search"} /-->',
);
