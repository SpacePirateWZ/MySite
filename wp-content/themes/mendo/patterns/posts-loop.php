<?php
/**
 * Title: Posts loop
 * Slug: mendo/posts-loop
 * Description: 
 * Categories: posts
 * Keywords: posts, loop, query
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

<!-- wp:paragraph -->
<p>/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /-->

<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eContinue reading ⟶\u003c/strong\u003e","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
