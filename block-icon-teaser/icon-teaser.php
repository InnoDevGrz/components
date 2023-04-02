<?php

$iconTeaser = new  tsc__IconTeaser;


$class_name = 'tsc-icon-teaser';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];

?>

    <div class="<?= esc_attr($class_name); ?>">
        <?php foreach ($iconTeaser->getIconTeaser() as $iconTeaserItem): ?>
            <div class="tsccon-teaser-item">
                <figure>
                    <?php echo wp_get_attachment_image($iconTeaserItem['icon'], 'full'); ?>
                </figure>
                <h3 class="tsccon-teaser-title"><?php echo $iconTeaserItem['teaser_title']; ?></h3>
                <p class="tsccon-teaser-description"><?php echo $iconTeaserItem['teaser_description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>


<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Image-Teaser bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;