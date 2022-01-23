<?php
/**
 * Frost: Query list with three columns
 *
 * @package Frost
 */

return array(
	'title'         => __( 'List of posts in three columns.', 'frost' ),
	'categories'    => array( 'frost-query' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
				<div class="wp-block-query alignwide"><!-- wp:post-template -->
				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator is-style-wide"/>
				<!-- /wp:separator -->
				
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-date {"fontSize":"small"} /--></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"50%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}},"fontSize":"medium"} /-->
				
				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"typography":{"fontSize":"18px"}}} /--></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right","fontSize":"small"} /--></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				<!-- /wp:post-template --></div>
				<!-- /wp:query -->
				
				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
