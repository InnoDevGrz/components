<?php

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects($items, $args)
{


// loop
    foreach ($items as &$item) {

// vars
        $image = get_field('menu-image', $item);
        $logo = get_field('menu-logo', $item);


// append icon
        if ($image) {

            $item->title .= wp_get_attachment_image( $image, 'menu_image', '', array('class' => "aspect-ratio-16-10") );
        }

        if ($logo) {
            if ($logo) {
                $logo_image = wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array(
                    'class' => 'menu-brand',
                    'aria-hidden' => 'true',
                ));

                $item->title = '<span class="menu-brand">'
                    . '<span class="screen-reader-text">' . esc_attr__("Home","ize") . '</span>'
                    . $logo_image . '</span>';
            }

        }


    }


// return




    return $items;

}



