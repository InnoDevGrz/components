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


class tsc__HeaderSlider
{

    protected $header_slider_data = array();
    protected $header_slider_teaser_data = array();

    public function __construct()
    {
        $this->header_slider_data = get_field('block_headerslider');
        $this->header_slider_teaser_data = get_field('block_headerslider_teasers');

    }

    static function init()
    {
        self::registerAcfBlock();
        //self::registerAcfFields();
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
                'name' => 'tsc-header-slider',
                'title' => __('Header-Slider', 'ize'),
                'description' => __('Header-Slider', 'ize'),
                'keywords' => array('header', 'headline', 'heading', 'slider', 'slideshow', 'bilder', 'images'),
                'render_template' => 'template-parts/blocks/header-slider.php',
                'category' => 'ize-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
                'align' => 'full',
            ));


        endif;
    }

    static function registerAcfFields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_61360ab0cfb8c',
            'title' => 'Block Header Slider',
            'fields' => array(
                array(
                    'key' => 'field_61360ab0dece9',
                    'label' => '',
                    'name' => 'block_headerslider',
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
                            'key' => 'field_61360ab0e0777',
                            'label' => 'Bild (16:9)',
                            'name' => 'image',
                            'type' => 'image_aspect_ratio_crop',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'crop_type' => 'aspect_ratio',
                            'aspect_ratio_width' => 16,
                            'aspect_ratio_height' => 9,
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
                        array(
                            'key' => 'field_61360ab0e07f8',
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
                            'key' => 'field_61360ab0e063c',
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
                            'key' => 'field_61360ab0e0879',
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
                            'key' => 'field_629f478e9bc7e',
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
                            'key' => 'field_629f47e69bc7f',
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
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/tsc-header-slider',
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


    /* slider */
    public function get_headerslider_data()
    {
        return $this->header_slider_data;
    }

    public function get_headline($data)
    {

        if (!empty($data['headline'])):
            $html = '<' . $data['h_tag'] . (($data['h_tag'] != 'span') ? '  itemprop="headline"' : '') . ' class="headline fade-in-left-big-doc-ready">';
            $html .= $data['headline'];
            $html .= '</' . $data['h_tag'] . '>';
            return $html;
        endif;

    }

    public function get_subheadline($data)
    {
        if (!empty($data['subtitle'])):
            $html = '<' . $data['sub_h_tag'] . (($data != 'span') ? '  itemprop="headline"' : '') . ' class="subtitle">';
            $html .= $data['subtitle'];
            $html .= '</' . $data['sub_h_tag'] . '>';
            return $html;
        endif;


    }

    public function get_button($data)
    {

        if (!empty($data['button']['url'])) {
            $html = '<a class="btn-secondary has-lighted-color" href="' . $data['button']['url'] . '">' . $data['button']['title'] . '</a>';
            return $html;
        }

    }


    /* teaser */
    public function get_headerslider_teaser_data()
    {
        return $this->header_slider_teaser_data;
    }

    public function get_teaser_icon_image($data)
    {
        // acf return value = image id
        if (!empty($data['icon_image'])):
            $html = '<figure class="image-con">';
            $html .= wp_get_attachment_image($data['icon_image'], 'medium_large');
            $html .= '</figure>';
            return $html;
        endif;


    }

    public function get_teaser_description($data)
    {
        if (!empty($data['text'])):
            $html = '<span class="teaser-description">' . $data['text'] . '</span>';
            return $html;
        endif;

    }

    public function get_teasers()
    {
        if ($this->header_slider_teaser_data):

            $html = ' <div class="header-teaser-row">';

            foreach ($this->header_slider_teaser_data as $teaser_item) {
                $html .= '<a class="teaser-item-link" href="' . $teaser_item['link'] . '">';
                $html .= '<div class="teaser-item">';


                $html .= $this->get_teaser_icon_image($teaser_item);
                $html .= $this->get_teaser_description($teaser_item);


                $html .= '</div>';
                $html .= '</a>';
            }
            $html .= '</div>';

            return $html;

        endif;

    }


}

