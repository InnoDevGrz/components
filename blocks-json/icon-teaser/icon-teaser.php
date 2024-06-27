<?php


/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

if (!empty(get_field('tsc-teaser-icon'))) {
    $teaser_icon_url = get_field('tsc-teaser-icon');
}


/**
 * Anker übergeben, der im Gutenberg-Editor eingegeben werden kann
 */
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}


/**
 * CSS Klassen übergeben, die im Gutenberg Editor eingegeben werden können
 */
$class_name = 'icon-teaser';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
/**
 * Attribute übergeben
 */


if ($block['backgroundColor']) {
    $class_name .= ' has-' . $block['backgroundColor'] . '-background-color';
}
if ($block['textColor']) {
    $class_name .= ' has-' . $block['textColor'] . '-color';
}
?>


    <div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>"
        <?php
        /**
         * hole die Spacing Values aus dem Array Block und setze diese nach Modifikation als Inline Style
         */
        if ($spacing_values = get_spacing_values($block)) {
            echo "style='{$spacing_values}'";
        }
        ?>
    >

        <div class="icon-teaser-item">
            <div class="tsc-teaser-icon-wrapper">
                <?php echo wp_get_attachment_image($teaser_icon_url) ?>
            </div>
            <InnerBlocks/>
        </div>
    </div>
<?php
