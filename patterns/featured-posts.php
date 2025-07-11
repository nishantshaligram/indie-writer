<?php
/**
 * Title: Featured Posts
 * Slug: indie-writer/featured-posts
 * Categories: featured
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|iw-xl","bottom":"var:preset|spacing|iw-xl","left":"var:preset|spacing|iw-sm","right":"var:preset|spacing|iw-sm"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--iw-xl);padding-right:var(--wp--preset--spacing--iw-sm);padding-bottom:var(--wp--preset--spacing--iw-xl);padding-left:var(--wp--preset--spacing--iw-sm)">
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">
                <!-- wp:heading {"fontSize":"iw-xl"} -->
                <h2 class="wp-block-heading has-iw-xl-font-size">Featured Blog Teasers</h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">View All Posts</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">
                <!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                    <!-- wp:group {"tagName":"article","style":{"dimensions":{"minHeight":""},"spacing":{"margin":{"bottom":"var:preset|spacing|iw-sm"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|iw-sm","right":"var:preset|spacing|iw-sm"}}},"layout":{"type":"default"}} -->
                    <article class="wp-block-group"
                        style="margin-bottom:var(--wp--preset--spacing--iw-sm);padding-top:0;padding-right:var(--wp--preset--spacing--iw-sm);padding-bottom:0;padding-left:var(--wp--preset--spacing--iw-sm)">
                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|iw-xs"}}},"fontSize":"iw-m"} /-->

                        <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":50,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|iw-xs"}}},"fontSize":"iw-sm"} /-->

                        <!-- wp:read-more {"content":"Read More","fontSize":"iw-sm"} /-->
                    </article>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
<!-- /wp:group -->