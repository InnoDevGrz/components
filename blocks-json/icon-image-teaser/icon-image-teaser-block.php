<?php


/**
 * Icon Image Teaser Block template.
 *
 * @param array $block The block settings and attributes.
 */

if (!empty(get_field('icon-image-teaser'))) {
    $teaser = get_field('icon-image-teaser');
}


/**
 * Anker übergeben, der im Gutenberg-Editor eingegeben werden kann
 */
$anchor = '';
if (isset($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}


/**
 * CSS Klassen übergeben, die im Gutenberg Editor eingegeben werden können
 */
$class_name = 'tsc-icon-image-teaser step-in-item';
if (isset($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
/**
 * Attribute übergeben
 */


/*if (isset($block['backgroundColor'])) {
    $class_name .= ' has-' . $block['backgroundColor'] . '-background-color';
}
if (isset($block['textColor'])) {
    $class_name .= ' has-' . $block['textColor'] . '-color';
}*/

?>
<?php if (isset($teaser)): ?>

    <div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>"
        <?php
        /**
         * hole die Spacing Values aus dem Array Block und setze diese nach Modifikation als Inline Style
         */
        if (isset($block['style'])) {
            if ($spacing_values = get_spacing_values($block)) {
                echo "style='{$spacing_values}'";
            }
        }
        ?>
    >
        <?php if (!is_admin()): ?> <a class="teaser-link" href="<?php echo $teaser['url']; ?>"><?php endif; ?>
            <div class="content-front">
                <figure> <?php echo wp_get_attachment_image($teaser['icon_svg'], 'full'); ?></figure>
                <h3 class="not-animated"><?php _e($teaser['title'], 'tsc'); ?></h3>
                <p class="not-animated"><?php _e($teaser['text'], 'tsc'); ?></p>

            </div>

            <div class="content-hover"
                 style="background-image: url(<?php echo wp_get_attachment_image_url($teaser['image'], 'large'); ?>)">
                <h3 class="not-animated"><?php _e($teaser['title_hovered'], 'tsc'); ?></h3>
                <p class="not-animated"><?php _e($teaser['text_hovered'], 'tsc'); ?></p>
                <span><?php _e('Mehr erfahren ', 'tsc') ?><i class="flaticon-right-arrow more-arrow" aria-label="' . esc_attr__('Pfeil nach rechts', 'tsc') . '"></i></span>
            </div>

            <?php if (!is_admin()): ?></a><?php endif; ?>
    </div>


<?php endif; ?>

