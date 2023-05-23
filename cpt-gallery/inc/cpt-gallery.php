<?php

function custom_gallery_post_type()
{
    $labels = array(
        'name' => _x('Gallerien', 'Post Type General Name', 'ize'),
        'singular_name' => _x('Gallerie', 'Post Type Singular Name', 'ize'),
        'menu_name' => 'Gallerien',
        'name_admin_bar' => 'Gallerie',
        'add_new' => 'Neue hinzufügen',
        'add_new_item' => 'Neue Gallerie hinzufügen',
        'new_item' => 'Neue Gallerie',
        'edit_item' => 'Gallerie bearbeiten',
        'view_item' => 'Gallerie anzeigen',
        'all_items' => 'Alle Gallerien',
        'search_items' => 'Gallerien suchen',
        'parent_item_colon' => 'Übergeordnete Gallerien:',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'gallery'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('tax_gallery'),
        'show_in_rest' => false,
    );

    register_post_type('gallery', $args);

// Taxonomie "tax_gallery" registrieren
    $taxonomy_labels = array(
        'name' => 'Galerie Kategorien',
        'singular_name' => 'Galerie Kategorie',
        'search_items' => 'Kategorien durchsuchen',
        'all_items' => 'Alle Kategorien',
        'parent_item' => 'Übergeordnete Kategorie',
        'parent_item_colon' => 'Übergeordnete Kategorie:',
        'edit_item' => 'Kategorie bearbeiten',
        'update_item' => 'Kategorie aktualisieren',
        'add_new_item' => 'Neue Kategorie hinzufügen',
        'new_item_name' => 'Name der neuen Kategorie',
        'menu_name' => 'Kategorien',
    );

    $taxonomy_args = array(
        'hierarchical' => true,
        'labels' => $taxonomy_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tax_gallery'),
    );

    register_taxonomy('tax_gallery', 'gallery', $taxonomy_args);
}

add_action('init', 'custom_gallery_post_type');

add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key' => 'group_646c71c8e06a1',
        'title' => 'Produkt Gallerie',
        'fields' => array(
            array(
                'key' => 'field_646c71c901516',
                'label' => 'Produkt Gallerie',
                'name' => 'gallery',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'id',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'gallery',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );
} );


function get_cpt_gallery($posts_per_page)
{

    $args = array(
        'post_type' => 'gallery',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'date'
    );

    return query_posts($args);

}

function get_cpt_gallery_rand($posts_per_page)
{

    $args = array(
        'post_type' => 'gallery',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'rand'
    );

    return query_posts($args);

}


function modify_archive_title($title)
{
    $modified_title = str_replace('Archive: ', '', $title);
    return $modified_title;
}

add_filter('get_the_archive_title', 'modify_archive_title');




