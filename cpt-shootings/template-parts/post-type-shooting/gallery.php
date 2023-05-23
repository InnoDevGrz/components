<?php
$post_id = get_the_ID();
$shooting_gallery = get_field('shooting-gallery', $post_id);


?>

<?php
if (!empty($shooting_gallery)):
    wp_enqueue_style('colorbox-css');
    wp_enqueue_style('justifiedgallery-css');
    wp_enqueue_script('colorbox-js');
    wp_enqueue_script('colorbox-de-js');
    wp_enqueue_script('justifiedgallery-js');
    wp_enqueue_script('gallery-js');
    ?>


    <div id="shooting-gallery" class="footer-gallery justified-gallery animate zoom-in">
        <?php foreach ($shooting_gallery as $image_id): ?>
            <a class="animate zoom-in" href="<?php echo wp_get_attachment_image_url($image_id, 'full'); ?>">
                <?php echo wp_get_attachment_image($image_id, 'full'); ?>
            </a>
        <?php endforeach; ?>
    </div>

<?php endif; ?>