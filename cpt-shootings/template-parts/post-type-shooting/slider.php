<?php


if (have_posts()) : ?>

    <?php
    wp_enqueue_style('slider-css');
    wp_enqueue_script('slider-js');
    ?>

    <section class="vehicles-slider container animate fade-in-up">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php while (have_posts()) : the_post(); ?>

                        <?php $vehicle = get_field('vehicle'); ?>
                        <li class="splide__slide">

                            <div class="vehicle-item animate fade-in-up <?php echo tsc_set_vehicle_sold($vehicle['price_category']); ?>">
                                <div class="vehicle-image-wrapper">
                                    <a href=" <?php the_permalink(); ?>" class="project-image-link">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            echo get_the_post_thumbnail(get_the_ID(), 'post_vehicle_image_size');
                                        }
                                        ?>
                                    </a>
                                </div>



                                <?php echo get_the_term_list(get_the_ID(), 'vehicles_brand_category', '<span class="categories">', ', ', '</span>'); ?>

                                <a href="<?php the_permalink(); ?>" class="project-link">
                                    <span class="screen-reader-text"><?php echo __('Zum Produkt:', 'ize') . get_the_archive_title(); ?></span>
                                </a>



                                <div class="vehicle-description">
                                    <h3 class="vehicle-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>

                                </div>

                                <p class="content-preview">
                                    <?php the_excerpt(); ?>
                                </p>

                                <p class="vehicle-price">
                                    <?php echo tsc_get_vehicle_price_per_cat($vehicle['price_category'], $vehicle['price']); ?>
                                </p>

                                <div class="teaser-button txt-center">
                                    <a class="btn-secondary" href="<?php echo get_the_permalink(); ?>">
                                        <?php _e('Mehr Details', 'ize'); ?>
                                    </a>
                                </div>

                            </div>

                        </li>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php

?>








