<?php
add_action('admin_notices','set_theme_plugins');
function set_theme_plugins()
{

    $horizion_theme_plugins = [
        0 => [
            'path' => 'imagify/imagify.php',
            'slug' => 'imagify',
            'label' => 'Imagify'
        ],
        1 => [
            'path' => 'wordpress-seo/wp-seo.php',
            'slug' => 'wordpress-seo',
            'label' => 'Yoast SEO'
        ] ,
        2 => [
            'path' => 'all-in-one-wp-migration/all-in-one-wp-migration.php',
            'slug' => 'all-in-one-wp-migration',
            'label' => 'All-in-one-migration'
        ],
        3 => [
            'path' => 'all-in-one-wp-security-and-firewall/wp-security.php',
            'slug' => 'all-in-one-wp-security-and-firewall',
            'label' => 'All-in-one-security'
        ],
        4 => [
            'path' => 'fluentform/fluentform.php',
            'slug' => 'fluentform',
            'label' => 'Fluentform'
        ],

    ];


    foreach ($horizion_theme_plugins as $horizon_theme_plugin) {

        if (!is_plugin_active($horizon_theme_plugin['path'])) {
            $action = 'install-plugin';
            $slug = $horizon_theme_plugin['slug'];
            $npx__plugin_url = wp_nonce_url(
                add_query_arg(
                    array(
                        'action' => $action,
                        'plugin' => $slug
                    ),
                    admin_url('update.php')
                ),
                $action . '_' . $slug
            );
            ?>
            <div class="error notice">
                <p><?php esc_attr_e('ACHTUNG: Das Plugin ' . $horizon_theme_plugin['label']. ' muss installiert werden! ', 'ize'); ?>
                    <a class="button button-primary" href="<?php echo $npx__plugin_url; ?>"><?php
                        esc_attr_e('Jetzt installieren', 'ize'); ?></a></p>
            </div>
            <?php
        }

    }

}

