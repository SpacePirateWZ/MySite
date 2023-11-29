<?php

/**
 * Title: Latest Article
 * Slug: latest-article
 * Categories: keily
 * Keywords: latest-article, blogs
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|20","bottom":"var:preset|spacing|80","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"default","layout":{"type":"constrained","contentSize":"1320px","wideSize":"100%"}} -->
<div class="wp-block-group has-default-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-left has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html('- Blogs', 'keily'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php echo esc_html('My blog &amp; news', 'keily'); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"is-style-fill","fontSize":"small","fontFamily":"work-sans"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-work-sans-font-family has-small-font-size"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" style="border-radius:4px;padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html('Get in Touch', 'keily'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":29,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":356,"width":16,"height":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/calendar-date.svg'; ?>" alt="" class="wp-image-356" width="16" height="16"/></figure>
<!-- /wp:image -->

<!-- wp:post-date {"style":{"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"medium","fontFamily":"work-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"Learn More...\u003ca role=\u0022document\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022Block: Read More\u0022 tabindex=\u00220\u0022 class=\u0022block-editor-rich-text__editable block-editor-block-list__block wp-block no-stacking no-gutter has-work-sans-font-family has-small-font-size is-selected remove-outline wp-block-read-more rich-text\u0022 id=\u0022block-9e5a7ba1-92c7-4d2c-b70c-a80b7a9940be\u0022 data-block=\u00229e5a7ba1-92c7-4d2c-b70c-a80b7a9940be\u0022 data-title=\u0022Read More\u0022 style=\u0022background-color: initial; font-size: 1.125rem; min-width: 1px; margin-bottom: 0px; display: inline !important;\u0022 data-type=\u0022core/read-more\u0022\u003e\u003c/a\u003e","style":{"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small","fontFamily":"work-sans"} /-->

<!-- wp:image {"id":350,"width":16,"height":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/right-arrow.svg'; ?>" alt="" class="wp-image-350" width="16" height="16"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->