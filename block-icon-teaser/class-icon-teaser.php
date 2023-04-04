<?php

class tsc__IconTeaser
{

   protected $iconTeaser = array();

    static function init()
    {
        self::registerAcfBlock();
    }

    static function registerAcfBlock()
    {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('wide'),
                'mode' => false,
            ),
            'name' => 'tsc-block-icon-teaser',
            'title' => __('Icon Teaser', 'ize'),
            'description' => __('Icon Teaser', 'ize'),
            'keywords' => array('icons', 'teaser'),
            'render_template' => 'template-parts/blocks/icon-teaser.php',
            'category' => 'tsc-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,
        ));
    }

    public function getIconTeaser()
    {
       return $this->iconTeaser = get_field('icon_teasers');
    }


}
