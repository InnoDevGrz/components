<?php
if (!isset($t_tag)) $t_tag = 'h2';
if (!isset($img_size)) $img_size = 'post_grid';
?>

<?php if (have_posts()): ?>
    <section class="container">
        <h2 class="has-text-align-center animate fade-in-up-key"><?php _e('Meine neuesten Shootings', 'ize');?></h2>
        <div class="post-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a class="post-image" rel="bookmark" href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail($img_size); ?>
                        </a>
                    <?php endif; ?>
                    <div class="post-content">
                        <?= '<' . $t_tag . ' class="post-title">' . get_the_title() . '</' . $t_tag . '>'; ?>
                        <p><?php the_excerpt(); ?></p>
                        <a class="btn-secondary"
                           href="<?php the_permalink(); ?>"><?php esc_attr_e('Fotos ansehen', 'ize'); ?></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
    <?php
    wp_enqueue_script('minimasonry-js');
    wp_enqueue_script('masonry-js');
    ?>

<?php endif; ?>