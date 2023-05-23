<?php
$post_id = get_the_ID();
$gallery = get_field('gallery', $post_id);



?>

<?php
if (!empty($gallery)):
    wp_enqueue_style('colorbox-css');
    wp_enqueue_style('justifiedgallery-css');
    wp_enqueue_script('colorbox-js');
    wp_enqueue_script('colorbox-de-js');
    wp_enqueue_script('justifiedgallery-js');
    wp_enqueue_script('gallery-js');
    ?>


    <div id="product-gallery" class="product-gallery justified-gallery animate zoom-in">
        <?php foreach ($gallery as $image_id): ?>
            <a class="animate zoom-in" href="<?php echo wp_get_attachment_image_url($image_id, 'full'); ?>">
                <?php echo wp_get_attachment_image($image_id, 'full'); ?>
            </a>
        <?php endforeach; ?>
    </div>

<?php endif; ?>