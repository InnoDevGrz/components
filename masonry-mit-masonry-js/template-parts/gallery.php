<?php $masonry_gallery = get_field('masonry_gallery', get_the_ID()); ?>


<?php if ($masonry_gallery): ?>

    <div class="wp-block-group">

        <div class="tsc-masonry-gallery">
            <?php foreach ($masonry_gallery as $masonry_image) : ?>

                <a data-fslightbox="tsc-masonry-lightbox-item"
                   href="<?php echo wp_get_attachment_image_url($masonry_image, 'full') ?>">
                <?php echo wp_get_attachment_image($masonry_image, 'medium_large'); ?>
                </a>

            <?php endforeach; ?>

        </div>

    </div>

    <?php
   wp_enqueue_script('masonry-js');
   wp_enqueue_script('masonry-script');

    ?>




<?php endif; ?>