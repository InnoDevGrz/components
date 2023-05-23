<?php get_header(); ?>

    <div id="content" class="container">
        <main role="main">

            <?php the_title('<h1 class="title">', '</h1>'); ?>

            <?php include(locate_template('template-parts/content.php')); ?>

            <?php include(locate_template('template-parts/cpt-gallery/gallery.php')); ?>

        </main>

        <?php // include(locate_template('template-parts/post-type-shooting/similar.php')); ?>

    </div>

<?php get_footer(); ?>