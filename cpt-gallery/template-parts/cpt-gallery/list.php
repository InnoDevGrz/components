<?php
if (!isset($t_tag)) $t_tag = 'h2';
if (!isset($img_size)) $img_size = 'post_grid';
?>

<?php if (have_posts()): ?>


<div class="post-grid">
    <?php while (have_posts()) : the_post(); ?>
        <article class="post-item">
            <?php if (has_post_thumbnail()) : ?>
                <a class="post-image" rel="bookmark" href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('large'); ?>
                </a>
            <?php endif; ?>
            <div class="post-content">
                <?= '<' . $t_tag . ' class="gallery-title">' . get_the_title() . '</' . $t_tag . '>'; ?>
                <a class="post-btn" href="<?php the_permalink(); ?>"><?php esc_attr_e('Gallerie ansehen', 'ize'); ?></a>
            </div>
        </article>
    <?php endwhile; ?>
</div>


    <?php
    wp_enqueue_script('minimasonry-js');
    wp_enqueue_script('masonry-js');
    ?>



<?php endif; ?>