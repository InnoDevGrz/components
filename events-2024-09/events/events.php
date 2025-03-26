<?php


/**
 * Event Slider Block template.
 *
 * @param array $block The block settings and attributes.
 */


/**
 * Anker übergeben, der im Gutenberg-Editor eingegeben werden kann
 */
$anchor = "";
if (isset($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}


/**
 * CSS Klassen übergeben, die im Gutenberg Editor eingegeben werden können
 */
$class_name = 'tsc-events';
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

                <div class="<?php echo esc_attr($class_name); ?>">
                    <ul class="event-list">
                        <?php while ($event_query->have_posts()): $event_query->the_post(); ?>
                          <?php  include(locate_template('template-parts/post-type-event/item.php'));?>
                        <?php endwhile; ?>
                    </ul>
                </div>
        <?php endif; ?>


        <?php wp_reset_postdata(); ?>

    </div>
<?php
