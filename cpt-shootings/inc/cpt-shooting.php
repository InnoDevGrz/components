<?php


// Register CUSTOM POST TYPE: Shooting
function shooting_post_type()
{
    $labels = array(
        'name' => _x('Shootings', 'Post Type General Name', 'ize'),
        'singular_name' => _x('Shooting', 'Post Type Singular Name', 'ize'),
        'menu_name' => __('Shootings', 'ize'),
        'name_admin_bar' => __('Shootings', 'ize'),
        'archives' => __('Shooting-Übersicht', 'ize'),
        'attributes' => __('Shooting-Attribute', 'ize'),
        'parent_item_colon' => __('Parent Item:', 'ize'),
        'all_items' => __('Alle Shootings', 'ize'),
        'add_new_item' => __('Neues Shooting', 'ize'),
        'add_new' => __('Neues Shooting hinzufügen', 'ize'),
        'new_item' => __('Neues Shooting', 'ize'),
        'edit_item' => __('Shooting bearbeiten', 'ize'),
        'update_item' => __('Shooting aktualisieren', 'ize'),
        'view_item' => __('Zeige Shooting', 'ize'),
        'view_items' => __('Zeige Shootings', 'ize'),
        'search_items' => __('Suche Shooting', 'ize'),
        'not_found' => __('Keine Shootings vorhanden', 'ize'),
        'not_found_in_trash' => __('Nichts im Papierkorb gefunden', 'ize'),
        'featured_image' => __('Shooting-Bild', 'ize'),
        'set_featured_image' => __('Shooting-Bild festlegen', 'ize'),
        'remove_featured_image' => __('Lösche Shooting-Bild', 'ize'),
        'use_featured_image' => __('Nutze als Shooting-Bild', 'ize'),
        'insert_into_item' => __('Zu Shooting hinzufügen', 'ize'),
        'uploaded_to_this_item' => __('Zu Shooting hochladen', 'ize'),
        'items_list' => __('Shootings-Liste', 'ize'),
        'items_list_navigation' => __('Shootings-Liste Navigation', 'ize'),
        'filter_items_list' => __('Filter Shootings-Liste', 'ize'),
    );

    $rewrite = array(
        'slug' => 'shooting',
        'with_front' => true,
        'pages' => true,
        'feeds' => false,
    );

    $args = array(
        'label' => __('Shootings', 'ize'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array( 'shooting_category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'rewrite' => $rewrite,
        'capability_type' => 'page',
        'show_in_rest' => false,
    );
    register_post_type('shooting', $args);

}

add_action('init', 'shooting_post_type', 0);

// Register Custom Taxonomies

function shooting_category_taxonomy()
{
    $labels = array(
        'name' => _x('Kategorien', 'Taxonomy General Name', 'ize'),
        'singular_name' => _x('Thema', 'Taxonomy Singular Name', 'ize'),
        'menu_name' => __('Shooting Kategorie', 'ize'),
        'all_items' => __('Alle Kategorien', 'ize'),
        'parent_item' => __('Übergeordnete Kategorien', 'ize'),
        'parent_item_colon' => __('Übergeordnete Kategorien', 'ize'),
        'new_item_name' => __('Neue Kategorie', 'ize'),
        'add_new_item' => __('Neue Kategorie hinzufügen', 'ize'),
        'edit_item' => __('Kategorie bearbeiten', 'ize'),
        'update_item' => __('Kategorie speichern', 'ize'),
        'view_item' => __('Zeige Kategorie', 'ize'),
        'separate_items_with_commas' => __('Kategorien mit Komma trennen', 'ize'),
        'add_or_remove_items' => __('Kategorie hinzufügen oder entfernen', 'ize'),
        'choose_from_most_used' => __('Aus den meistverwendeten Kategorien wählen', 'ize'),
        'popular_items' => __('Häufig verwendete Kategorien', 'ize'),
        'search_items' => __('Suche Kategorie', 'ize'),
        'not_found' => __('Keine Kategorie gefunden', 'ize'),
        'no_terms' => __('Keine Kategorie', 'ize'),
        'items_list' => __('Kategorien-Liste', 'ize'),
        'items_list_navigation' => __('Kategorien Navigation', 'ize'),
    );
    $rewrite = array(
        'slug' => __('shooting_category', 'ize'),
        'with_front' => true,
        'hierarchical' => false,
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => $rewrite,
    );
    register_taxonomy('shooting_category', array('shooting'), $args);
}


add_action('init', 'shooting_category_taxonomy', 0);


// WP Query
function get_tsc_shootings($posts_per_page)
{

    $args = array(
        'post_type' => 'shooting',
        'post_status'         => 'publish',
        'posts_per_page' =>$posts_per_page,
        'orderby' => 'date'
    );

    return query_posts( $args );

}

function get_tsc_shootings_rand($posts_per_page)
{

    $args = array(
        'post_type' => 'vehicles',
        'post_status'         => 'publish',
        'posts_per_page' =>$posts_per_page,
        'orderby' => 'rand'
    );

    return query_posts( $args );

}