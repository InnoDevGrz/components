<?php

$slides = get_field('image_slides');
$height = 700;
$height = get_field('height');
$overlay_color = get_field('overlay_color');


/**
 * Image Slider Block template.
 *
 * @param array $block The block settings and attributes.
 */

/**  ACF Fields
 */


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


$class_name = 'tsc-image-slider';


if (isset($block['className'])) {
    $class_name .= ' ' . $block['className'];
}


/**
 * Block Attribute übergeben
 */

if (isset($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

if (isset($block['backgroundColor'])) {
    $class_name .= ' has-' . $block['backgroundColor'] . '-background-color';
}
if (isset($block['textColor'])) {
    $class_name .= ' has-' . $block['textColor'] . '-color';
}

/*** Attribute übergeben - ende  ***/

?>




<?php if ($slides): ?>

    <div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>"
        <?php
        /**
         * hole die Spacing Values aus dem Array Block und setze diese nach Modifikation als Inline Style
         */
        if (isset($block['style'])) {
            if ($spacing_values = get_spacing_values($block)) {
                echo "style='{$spacing_values}';";
            }
        }
        ?>>


        <InnerBlocks/>

        <?php /** Block Content Slider **/ ?>

        <div class="splide image-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($slides as $slide): ?>
                        <li class="splide__slide">
                            <div class="image-slide"
                                 style="background-image: url('<?php echo wp_get_attachment_image_url($slide['img'], 'full') ?>');">
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>




        <?php /** Block Content end **/ ?>

    </div>

    <?php
    wp_enqueue_style('splide-style');
    wp_enqueue_script('splide-script');
    wp_enqueue_script('slider-script');

    ?>


<?php endif; ?>
