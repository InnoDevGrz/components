<?php



/*
 * in acf.php
 * $init_dailyMenu = new tsc__DailyMenu();
 * $init_dailyMenu->init_backend_tsc();
 *
 *
 * view: template-parts/blocks/image-slider.php
 * js: slider.js
 * */


class tsc__ParallaxSlider
{

    protected $header_slider_data = array();

    public function __construct()
    {
        $this->set_data();
    }

    static function init()
    {
       self::registerAcfBlock();
       self::registerAcfFields();
    }

    /* *** B A C K E N D *** */
    static function registerAcfBlock()
    {
        if (function_exists('acf_register_block_type')):

            acf_register_block_type(array(
                'supports' => array(
                    'anchor' => false,
                    'align' => array('full'),
                    'mode' => false,
                ),
                'name' => 'tsc-parallax-slider',
                'title' => __('Parallax-Slider', 'ize'),
                'description' => __('Parallax-Slider', 'ize'),
                'keywords' => array('header', 'headline', 'heading', 'slider', 'slideshow', 'bilder', 'images', 'parallax'),
                'render_template' => 'template-parts/blocks/parallax-slider.php',
                'category' => 'ize-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
                'align' => array('full', 'wide'), // separates Array for 'align' and 'wide'
            ));


        endif;
    }
    static function registerAcfFields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_61360ab0cfdsafdsffb8cpara',
            'title' => 'Parallax Header Slider',
            'fields' => array(
                array(
                    'key' => 'field_61360ab0dece9para',
                    'label' => '',
                    'name' => 'block_parallax_slider',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Slide hinzufügen',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_61360ab0e0777para',
                            'label' => 'Bild',
                            'name' => 'image',
                            'type' => 'image_aspect_ratio_crop',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                //'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'crop_type' => 'aspect_ratio',
                            'aspect_ratio_width' => 16,
                            'aspect_ratio_height' => 7,
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
             /*
                        array(
                            'key' => 'field_61360ab0e07f8para',
                            'label' => 'Headline',
                            'name' => 'headline',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '60',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 3,
                            'new_lines' => 'br',
                        ),
                        array(
                            'key' => 'field_61360ab0e063cpara',
                            'label' => 'Headline Struktur',
                            'name' => 'h_tag',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'span' => 'span',
                                'h1' => 'H1',
                                'h2' => 'H2',
                                'h3' => 'H3',
                            ),
                            'allow_null' => 0,
                            'default_value' => 'span',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        array(
                            'key' => 'field_61360ab0e0879para',
                            'label' => 'Button',
                            'name' => 'button',
                            'type' => 'link',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_629f478e9bc7epara',
                            'label' => 'Subtitle',
                            'name' => 'subtitle',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '60',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 3,
                            'new_lines' => 'br',
                        ),
                        array(
                            'key' => 'field_629f47e69bc7fpara',
                            'label' => 'Subtitle Struktur',
                            'name' => 'sub_h_tag',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'span' => 'span',
                                'h1' => 'H1',
                                'h2' => 'H2',
                                'h3' => 'H3',
                            ),
                            'allow_null' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        */
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/tsc-parallax-slider',
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
    }


    protected function set_data(){
        $this->header_slider_data = get_field('block_parallax_slider');
    }

    public function get_data(){
        return $this->header_slider_data;
    }

    public function get_headline($header_slide)
    {
        $html = "";

        if (!empty($header_slide['headline'])):
            $html = '<' . $header_slide['h_tag'] . (($header_slide['h_tag'] != 'span') ? '  itemprop="headline"' : '') . ' class="title fade-in-left-big-doc-ready">';
            $html .= $header_slide['headline'];
            $html .= '</' . $header_slide['h_tag'] . '>';
            return $html;
        endif;

    }

    public function get_subheadline($header_slide)
    {
        $html = "";
        if (!empty($header_slide['subtitle'])):
            $html = '<' . $header_slide['sub_h_tag'] . (($header_slide['sub_h_tag'] != 'span') ? '  itemprop="headline"' : '') . ' class="subtitle">';
            $html .= $header_slide['subtitle'];
            $html .= '</' . $header_slide['sub_h_tag'] . '>';
            return $html;
        endif;


    }


    public function get_button($header_slide){
        $html = "";

        if (!empty($header_slide['button']['url'])) {
            $html = '<a class="btn header-btn has-lighted-color" href="' . $header_slide['button']['url'] . '">' . $header_slide['button']['title'] . '</a>';
            return $html;
        }

    }

}

