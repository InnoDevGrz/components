<?php

class tsc__ImageTeaser
{
    static function init()
    {
        self::registerAcfBlock();
    }

    protected $image_teaser = array();
    protected $columns = 3;

    static function registerAcfBlock()
    {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('wide', 'full'),
                'mode' => false,
            ),
            'name' => 'tsc-block-image-teaser',
            'title' => __('Image Teaser', 'ize'),
            'description' => __('Image Teaser mit Link 3-Spalten', 'ize'),
            'keywords' => array('gallerie', 'bild', 'foto', 'picture', 'image'),
            'render_template' => 'template-parts/blocks/image-teaser.php',
            'category' => 'tsc-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,

        ));
    }

    public function getImageTeasers(){
        return $this->images = get_field('image_teaser');
    }

    public function getImageTeaserColumns(){
        return $this->columns = get_field('image_teaser_columns');
    }

}

