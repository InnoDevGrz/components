<?php

$no_of_posts = get_field('references_per_page');

$reference_query = get_references_sort_rand($no_of_posts);

$class_name = 'block-references';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];

if ($reference_query->have_posts()) :?>
    <section>
        <div class="<?php echo esc_attr($class_name); ?> blog-reference-grid">

                <?php
                while ($reference_query->have_posts()): $reference_query->the_post(); ?>
                <?php get_template_part( 'template-parts/custom-post-references/item' ); ?>
               <?php endwhile; ?>

        </div>
    </section>
<?php
endif; ?>

<?php $reference_query->reset_postdata(); ?>

