<?php get_header(); ?>

    <div class="container">
        <main id="content">
            <?php
            if (has_post_thumbnail()) {
                echo '<figure class="reference-thumbnail">';
                the_post_thumbnail('full');
                echo '</figure>';
            }
            ?>
            <div class="reference-infos">
                <?php the_title('<h1>', '</h1>'); ?>

                <div class="reference-details">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                    }
                    ?>
                </div>
            </div>
        </main>

        <?php
        $reference_gallery = array();
        $reference_gallery = get_field('reference_gallery');
        ?>

        <?php if (!empty($reference_gallery[0])) : ?>

            <?php
            wp_enqueue_style('colorbox-css');
            wp_enqueue_style('justifiedgallery-css');
            wp_enqueue_script('colorbox-js');
            wp_enqueue_script('colorbox-de-js');
            wp_enqueue_script('justifiedgallery-js');
            wp_enqueue_script('gallery-js');
            ?>

            <aside class="single-justified-gallery">
                <?php foreach ($reference_gallery as $gallery_image_id): ?>

                    <a href="<?php echo wp_get_attachment_image_url($gallery_image_id, 'large'); ?>">
                        <?php echo wp_get_attachment_image($gallery_image_id, 'full'); ?>
                    </a>

                <?php endforeach; ?>
            </aside>

        <?php endif; ?>


        <?php get_tsc_post_pagination('voriges Referenzprojekt', 'nächstes Referenzprojekt'); ?>
    </div>
<?php get_footer(); ?>