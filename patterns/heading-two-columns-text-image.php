<?php
/**
 * Title: Heading Two Columns Text Right Image Left
 * Slug: tsc/heading-two-columns-text-image
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading -->
        <h2 class="wp-block-heading">Hier das Section Heading</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Subheading</p>
        <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://dummyimage.com/1920x1200/ebebeb/000" alt=""/></figure>
            <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Hier ein Heading</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae urna at sapien luctus facilisis. Integer non neque vel libero pretium elementum.</p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Hier ein Heading</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae urna at sapien luctus facilisis. Integer non neque vel libero pretium elementum.</p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->