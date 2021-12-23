<?php
/**
 * Frost: Footer with text, button, links
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with text, button, links.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
				<h4 id="our-company">Our Company</h4>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
				<p style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Learn More</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"5%"} -->
				<div class="wp-block-column" style="flex-basis:5%"></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"15%"} -->
				<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
				<h4 id="about-us">About Us</h4>
				<!-- /wp:heading -->
				
				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size"><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Start Here</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Our Mission</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Brand Guide</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Newsletter</a></li><li><a href="#">Accessibility</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"15%"} -->
				<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
				<h4 id="services">Services</h4>
				<!-- /wp:heading -->
				
				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size"><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Web Design</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Development</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Copywriting</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Marketing</a></li><li><a href="#">Social Media</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"15%"} -->
				<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
				<h4 id="connect">Connect</h4>
				<!-- /wp:heading -->
				
				<!-- wp:list {"fontSize":"small"} -->
				<ul class="has-small-font-size"><li><a href="#">Facebook</a></li><li><a href="#">Instagram</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Twitter</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">LinkedIn</a></li><li><a href="#">Dribbble</a></li></ul>
				<!-- /wp:list --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
