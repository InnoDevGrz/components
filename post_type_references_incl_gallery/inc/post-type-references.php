<?php

function custom_post_type_references()
{

    $labels = array(
        'name' => _x('Referenzen', 'Post Type General Name', 'ize'),
        'singular_name' => _x('Referenz', 'Post Type Singular Name', 'ize'),
        'menu_name' => __('Referenzen', 'ize'),
        'name_admin_bar' => __('Referenzen', 'ize'),
        'archives' => __('Referenz-Archiv', 'ize'),
        'attributes' => __('Referenz-Attribute', 'ize'),
        'parent_item_colon' => __('Übergeordnete Referenz:', 'ize'),
        'all_items' => __('Alle Referenzen', 'ize'),
        'add_new_item' => __('Neue Referenz hinzufügen', 'ize'),
        'add_new' => __('Neue hinzufügen', 'ize'),
        'new_item' => __('Neue Referenz', 'ize'),
        'edit_item' => __('Referenz bearbeiten', 'ize'),
        'update_item' => __('Referenz aktualisieren', 'ize'),
        'view_item' => __('Referenz anzeigen', 'ize'),
        'view_items' => __('Referenzen anzeigen', 'ize'),
        'search_items' => __('Referenzen suchen', 'ize'),
        'not_found' => __('Nicht gefunden', 'ize'),
        'not_found_in_trash' => __('Nicht im Papierkorb gefunden', 'ize'),
        'featured_image' => __('Beitragsbild', 'ize'),
        'set_featured_image' => __('Beitragsbild festlegen', 'ize'),
        'remove_featured_image' => __('Beitragsbild entfernen', 'ize'),
        'use_featured_image' => __('Als Beitragsbild verwenden', 'ize'),
        'insert_into_item' => __('In Beitrag einfügen', 'ize'),
        'uploaded_to_this_item' => __('Zu diesem Beitrag hochgeladen', 'ize'),
        'items_list' => __('Beitragsliste', 'ize'),
        'items_list_navigation' => __('Beitragsliste Navigation', 'ize'),
        'filter_items_list' => __('Filtern Beitragsliste', 'ize'),
    );

    $args = array(
        'label' => __('Referenzen', 'ize'),
        'description' => __('Referenzen', 'ize'),
        'labels' => $labels,
        'supports' => array('title', 'revisions', 'thumbnail', 'editor'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-media-document',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => false,
    );

    register_post_type('references', $args);
}

// init CPT
add_action('init', 'custom_post_type_references', 0);

//register acf-block
add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('full'),
                'mode' => false,
            ),
            'name' => 'tsc-references',
            'title' => __('Referenzen', 'ize'),
            'description' => __('Referenzen werden mit zufälliger Sortierung angezeigen', 'ize'),
            'keywords' => array('references', 'referenzen'),
            'render_template' => 'template-parts/custom-post-references/block-references.php',
            'category' => 'tsc-blocks',
            'icon' => 'media-document',
            'post_types' => array('page'),
            'mode' => false,
            'align' => array('wide', 'full'),
        ));
    }
});

// Querys
function get_references_sort_rand($posts_per_page)
{
    $args = array(
        'post_type' => 'references',
        'post_status' => 'publish',
        'order' => 'rand',
        'posts_per_page' => $posts_per_page,
    );

    return new WP_Query($args);


}

function get_references($posts_per_page)
{
    $args = array(
        'post_type' => 'references',
        'post_status' => 'publish',
        'order' => 'asc',
        'posts_per_page' => $posts_per_page,
    );

    return new WP_Query($args);
}

