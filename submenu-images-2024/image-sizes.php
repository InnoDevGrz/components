<?php

function add_imagesize(){
    add_image_size('menu_image','400','300',true);
}
add_action('after_setup_theme', 'add_imagesize');