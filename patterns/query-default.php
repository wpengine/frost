<?php
/**
 * Title: List of posts in one column.
 * Slug: frost/query-default
 * Categories: frost-query
 * Viewport Width: 1280
 */

?>
<!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"inherit":true}} -->
<div class="wp-block-query">
<!-- wp:query-title {"type":"archive","fontSize":"large"} /-->
<!-- wp:term-description /-->
<!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-content /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"30px"}}},"className":"post-meta","layout":{"type":"flex"},"fontSize":"small"} -->
<div class="wp-block-group post-meta has-small-font-size" style="margin-top:30px">
<!-- wp:post-date /-->
<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->
<!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:post-terms {"term":"post_tag"} /-->
</div>
<!-- /wp:group -->
<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
