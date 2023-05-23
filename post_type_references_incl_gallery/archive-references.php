single-references.php<?php get_header(); ?>
<main id="content" class="container post-list" role="main">

    <h1><?php post_type_archive_title('Unsere '); ?></h1>


    <?php if (have_posts()) {
        include(locate_template('template-parts/custom-post-references/list.php'));
        // utils.php
        the_archive_pagination();
    } else {
        include(locate_template('template-parts/posts/noposts.php'));
    } ?>
</main>
<?php get_footer(); ?>

