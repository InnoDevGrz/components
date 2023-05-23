<article class="reference-item">
    <?php if (has_post_thumbnail()) : ?>
        <a rel="bookmark" href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('reference_image'); ?>
        </a>
    <?php endif; ?>
    <div class="post-content">
        <?= '<h3 class="post-title">' . get_the_title() . '</h3>'; ?>
        <a class="btn" href="<?php the_permalink(); ?>"><?php esc_attr_e('Zur Gallerie', 'ize'); ?></a>
    </div>
</article>