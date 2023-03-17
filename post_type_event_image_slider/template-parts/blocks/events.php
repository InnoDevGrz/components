<?php

$no_events = get_field('nos_events');
$event_infos = get_field('event_infos', 'option');

$id = "block-event";
//$id = 'ize-events-' . $block['id'];
//if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'block-events';
if (!empty($block['className'])) $className .= ' ' . $block['className'];

//query
$event_query = get_inno_events(array(
    'posts_per_page' => $no_events, // no of events
));
?>

<?php
if ($event_query->have_posts()) :?>
<section>
    <h2 class="has-text-align-center event-list-title"><?php _e('Galliano News & Events', 'ize');?></h2>
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <ul class="event-list has-text-align-center">
            <?php while ($event_query->have_posts()): $event_query->the_post(); ?>
                <?php
                $post_id = get_the_ID();
                $post_info = get_field('info', $post_id);
                $date_from = substr(get_field('date_from', $post_id), 0, 16);
                $date_to = substr(get_field('date_to', $post_id), 0, 16);
                ?>

                <li class="event-item animate">
                    <?php the_title('<h3 class="event-title">', '</h3>'); ?>
                    <?php echo tsc_create_html('<p class="descr">', '</p>', $post_info); ?>
                </li>
            <?php endwhile; ?>
        </ul>

    </div>
</section>
<?php
endif; ?>


<?php //wp_reset_postdata(); ?>
<?php $event_query->reset_postdata(); ?>

