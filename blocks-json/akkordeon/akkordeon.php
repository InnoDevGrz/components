<?php


/**
 * Icon Teaser Block template.
 *
 * @param array $block The block settings and attributes.
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
$class_name = 'tsc-akkordeon';
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
    $class .= ' has-' . $block['textColor'] . '-color';
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
     * get acf content
     * */
    if (!empty(get_field('akk_heading'))) {
        $akk_heading = get_field('akk_heading');
    }
    if (!empty(get_field('akk_content'))) {
        $akk_content = get_field('akk_content');
    }


    // create unique heading toggle id
    $toggle_id = 'tsc-heading-toggle-' . rand(1, 10000000)
    ?>


    <div class="tsc-akkordeon-item"

        <?php if (is_admin()) {
            // Nur im Gutenberg-Editor sichtbarer Platzhalter
            echo 'style="background-color: #f5f5f5; padding: 1rem;"';
        } ?>

    >

        <?php // toggle akkordeon ?>
        <input type="checkbox" id="<?php echo $toggle_id; ?>">

        <div class="label-wrapper">
            <label class="tsc-akk-heading-label" for="<?php echo esc_attr($toggle_id); ?>">
                <h2 class="tsc-akk-heading">

                    <?php if (isset($akk_heading)) {
                        _e($akk_heading, 'tsc');
                    } ?>

                </h2>
            </label>
            <label class="labelicon" for="<?php echo esc_attr($toggle_id); ?>"></label>
        </div>
        <div class="tsc-akk-content">
            <?php
            // Überprüfen, ob wir im Backend (Gutenberg) sind
            if (is_admin()) {
                // Nur im Gutenberg-Editor sichtbarer Platzhalter
                _e('Bitte gib hier den ausklappbaren Inhalt ein:');
            };
            ?>
            <InnerBlocks/>
        </div>


    </div>
</div>

