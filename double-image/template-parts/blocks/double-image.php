<?php

$db_images = get_field('double_images');

$class_name = 'tsc-block-double-images';
$bg_img_url = get_template_directory_uri() . "/assets/bg-image/31501480_geometric003.jpg";
if ($db_images):

echo "<div class='tsc-block-double-images' style='background-image: url($bg_img_url)'>";
    foreach ($db_images as $img) {
        echo '<figure>';
        echo wp_get_attachment_image($img['images'], 'large');
        echo '</figure>';
    }
    echo '</div>';
    ?>


<?php endif; ?>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Double-Image-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;