<?php


/**
 * Event Slider Block template.
 *
 * @param array $block The block settings and attributes.
 */


/**
 * Anker übergeben, der im Gutenberg-Editor eingegeben werden kann
 */
$anchor = 'tsc-event-slider';
if (isset($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}


/**
 * CSS Klassen übergeben, die im Gutenberg Editor eingegeben werden können
 */
$class_name = 'tsc-event-slider';
if (isset($block['className'])) {
    $class_name .= ' ' . $block['className'];
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
        //query
        $no_of_events = get_field('no_of_events');
        $event_query = get_tsc_events(array(
            'posts_per_page' => $no_of_events, // no of events
        ));
        ?>
        <?php
        if ($event_query->have_posts()) :?>

            <div id="#event-slider" class="splide <?php echo esc_attr($class_name); ?>">
                <div class="splide__track">
                    <ul class="splide__list event-list">
                        <?php while ($event_query->have_posts()): $event_query->the_post(); ?>
                            <li class="splide__slide">
                                <?php include(locate_template('template-parts/post-type-event/item.php')); ?>
                            </li>
                        <?php endwhile; ?>


                    </ul>
                </div>
            </div>


        <?php endif; ?>

        <?php
        wp_enqueue_style( 'splide-style' );
        wp_enqueue_script( 'slider-script' );
        ?>
        <?php wp_reset_postdata(); ?>

    </div>
<?php
