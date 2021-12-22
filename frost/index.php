<?php
/**
 * This file adds functions to the Frost theme for WordPress.
 *
 * @package Frost
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://frostwp.com/
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This theme was built for the WordPress experimental full-site-editing feature. You need to install and activate the Gutenberg plugin to make it work.', 'frost' );
}
