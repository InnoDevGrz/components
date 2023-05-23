<?php get_header(); ?>

<main id="content" class="container post-list" role="main">
    <?php include(locate_template('template-parts/archive-title.php')); ?>
    <?php if (get_the_archive_description()) : ?>
        <div class="archive-description">
            <?= get_the_archive_description(); ?>
        </div>
    <?php endif; ?>
    <?php if (have_posts()) {


        tsc_the_custom_term_list('tax_gallery');

        include(locate_template('template-parts/cpt-gallery/list.php'));
        archive_pagination();
    } else {
        include(locate_template('template-parts/cpt-gallery/noposts.php'));
    } ?>
</main>
<?php get_footer(); ?>

