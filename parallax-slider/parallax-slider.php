<?php

$parallaxSlider = new tsc__ParallaxSlider();

$class_name = 'block-parallax-slider';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>

    <header class="<?= esc_attr($class_name); ?>">
        <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($parallaxSlider->get_data() as $slide) : ?>
                            <li class="splide__slide">
                                <div class="bg-image has-parallax ">
                                    <img class="scrolling-image" src='<?php echo wp_get_attachment_image_url($slide['image'], 'full') ?>)'>
                                </div>
                                <?php //wp_get_attachment_image_url($slide['image'], 'full') ?>
                            </li>

                        <?php endforeach; ?>

                    </ul> <!-- end list -->


                </div> <!-- end splide track -->
        </div><!-- end splide -->

        <?php
        wp_enqueue_style('slider-css');
        wp_enqueue_script('slider-js');
        ?>
    </header>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Headerslider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;