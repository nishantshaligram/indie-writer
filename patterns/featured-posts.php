<?php
/**
 * Title: Featured Posts
 * Slug: indie-writer/featured-posts
 * Categories: featured
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|iw-extra-large","bottom":"var:preset|spacing|iw-extra-large","left":"var:preset|spacing|iw-small","right":"var:preset|spacing|iw-small"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--iw-extra-large);padding-right:var(--wp--preset--spacing--iw-small);padding-bottom:var(--wp--preset--spacing--iw-extra-large);padding-left:var(--wp--preset--spacing--iw-small)">
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
                <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|iw-extra-large"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--iw-extra-large)">
                    <!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                        <!-- wp:group {"tagName":"article","style":{"dimensions":{"minHeight":""},"spacing":{"margin":{"bottom":"var:preset|spacing|iw-small"}}},"layout":{"type":"default"}} -->
                        <article class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--iw-small)">
                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|iw-extra-small"}}},"fontSize":"iw-m"} /-->

                            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":50,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|iw-extra-small"}}},"fontSize":"iw-sm"} /-->

                            <!-- wp:read-more {"content":"Read More","fontSize":"iw-sm"} /-->
                        </article>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
<!-- /wp:group -->