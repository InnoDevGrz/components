<?php


/**
 * Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */
if (!empty(get_field('logos'))) {
    $logos = get_field('logos');
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
$class_name = 'logo-carousel ';
if (isset($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
/**
 * Attribute übergeben
 */


if (isset($block['backgroundColor'])) {
    $class_name .= ' has-' . $block['backgroundColor'] . '-background-color';
}
if (isset($block['textColor'])) {
    $class_name .= ' has-' . $block['textColor'] . '-color';
}

?>


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


    <?php
    /*
     *  content
     * */

    if ($logos): ?>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($logos as $logo): ?>
                        <li class="splide__slide">
                            <div class="wrapper">
                                <?php if (!empty($logo['img'])) echo wp_get_attachment_image($logo['img'], 'full'); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>


        <?php

        wp_enqueue_style('slider-css');
        wp_enqueue_style('splide-style');
        wp_enqueue_script('splide-script');
        wp_enqueue_script('slider-script');
        ?>

    <?php endif; ?>
</div>

