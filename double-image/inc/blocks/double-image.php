<?php

function register_double_image_block()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array( 'full'),
            ),
            'name' => 'tsc-block-double-images',
            'title' => __('Double-Images', 'ize'),
            'description' => __('2 Bilder überlagernd', 'ize'),
            'keywords' => array('gallerie', 'bild', 'foto', 'picture', 'image'),
            'render_template' => 'template-parts/blocks/double-image.php',
            'category' => 'tsc-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,
        ));

    }
}

add_action('acf/init', 'register_double_image_block');


