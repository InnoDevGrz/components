<?php
/**
 * Title: Media Text Small Content
 * Slug: tsc/media-text-small-content
 */
?>


<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:media-text {"mediaType":"image","imageFill":false,"useFeaturedImage":false,"mediaUrl":"https://dummyimage.com/1200/ebebeb/000","mediaAlt":"Platzhalterbild","mediaPosition":"left"} -->
    <div class="wp-block-media-text is-stacked-on-mobile">

        <figure class="wp-block-media-text__media">
            <img src="https://dummyimage.com/1200/ebebeb/000" alt="Platzhalterbild"/>
        </figure>

        <div class="wp-block-media-text__content">

            <!-- wp:group {"layout":{"type":"constrained","contentSize":"400px"}} -->
            <div class="wp-block-group">

                <!-- wp:heading -->
                <h2 class="wp-block-heading">Hier ein wenig Text</h2>
                <!-- /wp:heading -->

                <!-- wp:quote -->
                <blockquote class="wp-block-quote">
                    <!-- wp:paragraph -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <!-- /wp:paragraph -->
                </blockquote>
                <!-- /wp:quote -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Hier ein Button</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

            </div>
            <!-- /wp:group -->

        </div>
    </div>
    <!-- /wp:media-text -->

</div>
<!-- /wp:group -->
