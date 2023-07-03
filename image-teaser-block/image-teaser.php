<?php

$imageTeaser = new tsc__ImageTeaser;


$class_name = 'image-teaser';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];

// Spaltenanzahl kann im Backend eingestellt werden:
$class_name .= ' col-' . $imageTeaser->getImageTeaserColumns();
?>

    <div class="<?= esc_attr($class_name); ?>">
        <?php
        foreach ($imageTeaser->getImageTeasers() as $teaser): ?>

            <div class="image-teaser-item animate zoom-in-zoom-out">
                <a class="image-teaser-link" href="<?php echo $teaser['link'] ?>">
	                <?php echo '<h3 class="image-teaser-title">' . $teaser['title'] . '</h3>'; ?>
                    <?php echo wp_get_attachment_image($teaser['image'], 'large'); ?>

                    <div class="image-teaser-description">
	                    <?php echo '<h3>' . $teaser['title'] . '</h3>'; ?>
                        <?php echo  $teaser['content']; ?>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>


<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Image-Teaser bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;