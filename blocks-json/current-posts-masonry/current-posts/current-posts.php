<?php


$recent_posts_query = new WP_Query(array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'

));


?>

<?php if ($recent_posts_query->have_posts()) : ?>

    <div <?php echo get_block_wrapper_attributes( [ 'class' => 'current-posts-block' ] ); ?>>

        <?php
        ?>
        <div class="post-grid">
            <?php while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>
                <article class="post-item" style="background-image: url( <?php the_post_thumbnail_url('full') ?>);">
                    <div class="post-content">
                        <div class="post-meta">
                            <time class="date"
                                  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
                            <?php the_category(' '); ?>
                        </div>
                        <?= "<h3><a class='not-animated post-title' rel='bookmark' href='". get_the_permalink(). "'>" . get_the_title() . "</a></h3>"; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>