<?php


/**
 * Slider Header Block template.
 *
 * @param array $block The block settings and attributes.
 */

/**  ACF Fields
 */
$icon_url = get_field('icon');
$counter = get_field('counter');

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


$class_name = '';
if (isset($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

?>


<div <?php echo get_block_wrapper_attributes($class_name); ?>>
    <i class="inno-counter-icon">
        <?php if ($counter) echo "<span class='counter'>{$counter}</span>" ?>
        <?php if ($icon_url) echo "<img class='icon-img' src='{$icon_url}'>" ?>
    </i>
    <InnerBlocks/>
</div>
