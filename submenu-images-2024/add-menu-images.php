<?php

add_filter('wp_nav_menu_objects', 'tsc_wp_nav_menu_objects', 10, 2);
function tsc_wp_nav_menu_objects($items, $args)
{
    foreach ($items as &$item) {
        $image = get_field('menu-image', $item);

        if ($image) {
            $item->title .= wp_get_attachment_image( $image, 'menu_image', '', array('class' => "submenu-image") );
        }
    }
    return $items;
}



