<?php

add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_6616f8da34cbb',
        'title' => 'SEO',
        'fields' => array(
            array(
                'key' => 'field_6616fb755bfc0',
                'label' => 'Title',
                'name' => 'seo_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '41',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => 60,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_6616f8da00214',
                'label' => 'Meta-Description',
                'name' => 'meta-description',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '70',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => 160,
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_6616ffc5bc05f',
                'label' => 'Robots',
                'name' => 'robots',
                'aria-label' => '',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '40',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_661700b67afca',
                        'label' => 'noindex',
                        'name' => 'noindex',
                        'aria-label' => '',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 0,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_661700ce7afcb',
                        'label' => 'nofollow',
                        'name' => 'nofollow',
                        'aria-label' => '',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 0,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
});


add_filter('pre_get_document_title', 'custom_wp_title', 1);
function custom_wp_title($title)
{
    $title = get_field('seo_title', get_the_ID());
    return $title;
}

add_filter('wp_head', 'add_custom_meta_description', 1);
function add_custom_meta_description($desc)
{
    $desc = get_field('meta-description', get_the_ID());
    if ($desc) {
        echo '<meta name="description" content="' . $desc . '">';
    }
}

add_filter('wp_robots', 'custom_robots');
function custom_robots($robots)
{

    $robots_setting = get_field('robots');

    if ($robots_setting['noindex'] == true) {
        $robots['index'] = false;
        $robots['noindex'] = true;
    } else {
        $robots['index'] = true;
        $robots['noindex'] = false;
    }
    if ($robots_setting['nofollow'] == true) {
        $robots['follow'] = false;
        $robots['nofollow'] = true;
    } else {
        $robots['follow'] = true;
        $robots['nofollow'] = false;
    }

    return $robots;
}

?>


