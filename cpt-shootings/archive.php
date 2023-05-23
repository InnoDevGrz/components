<?php get_header(); ?>
<div id="content" class="container">
    <?php include(locate_template('template-parts/archive-title.php')); ?>
    <div class="">
        <main class="post-list" role="main">
            <?php if (get_the_archive_description()) : ?>
                <div class="archive-description container-min has-text-align-center">
                    <?= get_the_archive_description(); ?>
                </div>
            <?php endif; ?>
            <?php if (have_posts()) {
                include(locate_template('template-parts/posts/list.php'));
                archive_pagination();
            } else {
                include(locate_template('template-parts/posts/noposts.php'));
            } ?>
        </main>
    </div>
</div>
<?php get_footer(); ?>

