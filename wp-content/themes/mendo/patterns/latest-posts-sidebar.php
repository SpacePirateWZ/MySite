<?php
/**
 * Title: Latest posts (sidebar)
 * Slug: mendo/latest-posts-sidebar
 * Description: 
 * Categories: posts
 * Keywords: posts
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"extra-large"} -->
<h2 class="wp-block-heading has-text-align-left has-extra-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Latest posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-mendo-counter"} -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"thumbnail"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
