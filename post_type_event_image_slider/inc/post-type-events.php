<?php

/* require_once @ functions.php, aber nach acf.php !! */


/*     ACHTUNG!!!
 *     benötigt: (üblicherweise bereits in acf.php angelegt)
 *
 *     add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {
        $toolbars['Simple'] = array();
        $toolbars['Simple'][1] = array('bold', 'bullist', 'link', 'removeformat');
        return $toolbars;
    });
 *
 * */



// Custom Post Type
function post_type_events()
{

    $labels = array(
        'name' => _x('Events', 'Post Type General Name', 'ize'),
        'singular_name' => _x('Event', 'Post Type Singular Name', 'ize'),
        'menu_name' => __('Events', 'ize'),
        'name_admin_bar' => __('Events', 'ize'),
        'archives' => __('Events Archiv', 'ize'),
        'parent_item_colon' => __('Übergeordneter Event', 'ize'),
        'all_items' => __('Alle Events', 'ize'),
        'add_new_item' => __('Neuen Event hinzufügen', 'ize'),
        'add_new' => __('Neuen Event hinzufügen', 'ize'),
        'new_item' => __('Neuen Event', 'ize'),
        'edit_item' => __('Event bearbeiten', 'ize'),
        'update_item' => __('Event aktualisieren', 'ize'),
        'view_item' => __('Event ansehen', 'ize'),
        'search_items' => __('Event suchen', 'ize'),
        'not_found' => __('Keine Ergebnisse', 'ize'),
        'not_found_in_trash' => __('Keine Ergebnisse im Papierkorb', 'ize'),
        'featured_image' => __('Event-Bild', 'ize'),
        'set_featured_image' => __('Event-Bild festlegen', 'ize'),
        'remove_featured_image' => __('Event-Bild entfernen', 'ize'),
        'use_featured_image' => __('Als Event-Bild verwenden', 'ize'),
        'insert_into_item' => __('Einfügen in Event', 'ize'),
        'uploaded_to_this_item' => __('Dateien zu diesem Event', 'ize'),
        'items_list' => __('Events', 'ize'),
        'items_list_navigation' => __('Events-Navigation', 'ize'),
        'filter_items_list' => __('Events filtern', 'ize'),
    );

    $args = array(
        'label' => __('Event', 'ize'),
        'description' => __('Events', 'ize'),
        'labels' => $labels,
        'supports' => array('title', 'revisions',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-calendar',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'show_in_rest' => false,
    );

    register_post_type('event', $args);

}

add_action('init', 'post_type_events', 0);

// Post Columns
function events_columns($defaults)
{

    $columns = [];
    foreach ($defaults as $key => $value) {
        $columns[$key] = $value;
        if ($key == 'title') {
            $columns['event_date']     = __( 'Datum & Uhrzeit', 'ize' );
        }
    }

    return $columns;
}

function events_columns_content($column_name, $post_id)
{
    if ( $column_name == 'event_date' ) {
        $date_from = get_field( 'date_from', $post_id );
        echo date( 'd.m.Y H:i', strtotime( $date_from ) ) . ' ' . __( 'Uhr', 'izemedia-foundation' );
    } else if ( $column_name == 'event_location' ) {
        $location = get_field( 'location', $post_id );
        echo $location;
    }

}

function events_sortable_columns($columns)
{
    $columns['event_date']     = 'event_date';
    return $columns;
}

function events_filter_columns_sort($query)
{
    if (!is_admin()) {
        return;
    }
    $orderby = $query->get( 'orderby' );
    if ( $orderby == 'event_date' ) {
        $query->set( 'meta_key', 'date_from' );
        $query->set( 'orderby', 'meta_value' );
    }
}

add_filter('manage_event_posts_columns', 'events_columns');
add_filter('manage_edit-event_sortable_columns', 'events_sortable_columns');
add_action('manage_event_posts_custom_column', 'events_columns_content', 10, 2);
add_action('pre_get_posts', 'events_filter_columns_sort');

//register acf-blocks
add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('full'),
                'mode' => false,
            ),
            'name' => 'ize-events',
            'title' => __('Events', 'ize'),
            'description' => __('Events', 'ize'),
            'keywords' => array('events'),
            'render_template' => './template-parts/blocks/events.php',
            'category' => 'ize-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,
           // 'align' => 'full',
        ));
    }
});


// register acf-fields
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
        'key' => 'group_576bc3e992c93',
        'title' => 'Events',
        'fields' => array(
            array(
                'key' => 'field_576bc3fb0592b',
                'label' => 'Veranstaltungsbeginn',
                'name' => 'date_from',
                'type' => 'date_time_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => 25,
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd.m.Y H:i',
                'return_format' => 'Y-m-d H:i:s',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_576bc4620592c',
                'label' => 'Veranstaltungsende',
                'name' => 'date_to',
                'type' => 'date_time_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => 25,
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd.m.Y H:i',
                'return_format' => 'Y-m-d H:i:s',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_5fc901550f0de',
                'label' => 'Info',
                'name' => 'info',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'discussion',
            1 => 'comments',
            2 => 'revisions',
            3 => 'slug',
            4 => 'author',
            5 => 'format',
            6 => 'page_attributes',
            7 => 'categories',
            8 => 'tags',
            9 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
    ));


    acf_add_local_field_group(array(
        'key' => 'group_622a4ea88663d',
        'title' => 'Event Block Config',
        'fields' => array(
            array(
                'key' => 'field_622a4eb48cb1b',
                'label' => 'Events',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'Der Inhalt dieses Blocks wird über das Options-Menü Events konfiguriert. Bitte wählen Sie die Anzahl der anzuzeigenden Events.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'field_622a5c63c1005',
                'label' => 'Anzahl der anzuzeigenden Events',
                'name' => 'nos_events',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    -1 => 'alle',
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/ize-events',
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
    ));
endif;


// WP Query
function get_inno_events($args = array())
{

    $now = current_time( 'Y-m-d H:i:s' );
    $args = array_merge( array(
        'post_type'           => 'event',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
        'meta_key'            => 'date_from',
        'orderby'             => 'meta_value',
        'order'               => 'asc',
        'post_per_page'       => 3,
        'meta_query'          => array(
            //'relation' => 'OR',
            'relation' => 'AND',
            array(
                'key'     => 'date_from',
                'value'   => $now,
               // 'compare' => '>=',
                'compare' => '<=',
            ),
            array(
                'key'     => 'date_to',
                'value'   => $now,
                'compare' => '>=',
            )
        )
    ), $args );


    return new WP_Query( $args );

}