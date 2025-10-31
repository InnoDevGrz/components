<?php
$no_of_posts = get_field('no_of_posts');
// Kategorie aus Auswahlfeld im Block holen
$category = get_field('cat_choice');

// WP_Query um die letzten 3 Beiträge aus der Kategorie "einsaetze" abzufragen
$posts_query = new WP_Query(array(
    'posts_per_page' => $no_of_posts, // Anzahl der abzufragenden Beiträge
    'post_status' => 'publish', // Nur veröffentlichte Beiträge
    'orderby' => 'date', // Sortieren nach Veröffentlichungsdatum
    'order' => 'DESC', // In absteigender Reihenfolge
    'category_name' => $category->slug

));

if ($posts_query->have_posts()) :

    /**
     * Icon Teaser Block template.
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
    if (isset($block['anchor'])) {
        $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
    }

    /**
     * CSS Klassen übergeben, die im Gutenberg Editor eingegeben werden können
     */
    $class_name = 'current-posts-block';
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

        <div class="post-grid">
            <?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
                <article class="post-item">

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php the_post_thumbnail('post_list'); ?>
                            </figure>
                        </a>
                    <?php endif; ?>

                    <div class="post-content">
                        <h3 class='post-title not-animated'>
                            <a rel='bookmark' href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="post-meta">
                            <time class="date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php echo get_the_date('d.m.Y'); ?>
                            </time>
                            <?php the_category(' | '); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
