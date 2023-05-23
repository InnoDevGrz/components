<?php
$args = array(
    'post_type' => 'vehicles',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'post__not_in' => array(get_the_ID())
);


$categories = get_the_category();
if (!empty($categories)) {
    $catIds = array();
    foreach ($categories as $cat) {
        $catIds[] = $cat->term_id;
    }
    $newsArgs['vehicles_typ_category_taxonomy'] = implode(',', $catIds);
}

query_posts($args);
if (have_posts()): ?>
    <section class="similar-products product-list">
        <div class="container">
            <h3 class="section-title"><?php esc_attr_e('Ähnliche Fahrzeuge', 'ize'); ?></h3>
            <?php $t_tag = 'h4';
            include(locate_template('template-parts/post-type-vehicles/loop.php')); ?>
        </div>
    </section>
<?php endif;
wp_reset_query(); ?>
