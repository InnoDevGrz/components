<?php



    wp_register_script('minimasonry-js', get_template_directory_uri() . '/assets/js/minimasonry.min.js', array(), $theme_version, true);
    wp_register_script('masonry-js', get_template_directory_uri() . '/assets/js/masonry.js', array(), $theme_version, true);

    wp_register_style('colorbox-css', get_template_directory_uri() . '/assets/css/colorbox.css');
    wp_register_script('colorbox-js', get_template_directory_uri() . '/assets/js/jquery.colorbox-min.js', array('jquery'), $theme_version, true);
    wp_register_script('colorbox-de-js', get_template_directory_uri() . '/assets/js/jquery.colorbox-de.js', array('jquery'), $theme_version, true);
    wp_script_add_data('colorbox-js', 'async', true);
    wp_script_add_data('colorbox-de-js', 'async', true);

    wp_register_style('justifiedgallery-css', get_template_directory_uri() . '/assets/css/justifiedGallery.css');
    wp_register_script('justifiedgallery-js', get_template_directory_uri() . '/assets/js/jquery.justifiedGallery.js', array('jquery'), $theme_version, true);
    wp_script_add_data('justifiedgallery-js', 'async', true);

    wp_register_script('gallery-js', get_template_directory_uri() . '/assets/js/gallery.js', array('jquery'), $theme_version, true);
    wp_script_add_data('gallery-js', 'async', true);

