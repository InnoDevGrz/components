


<?php
// beide zaubern eine Icon bar

    function header_cart()
    {
        if (class_exists('woocommerce')) : ?>
            <?php $product_count = WC()->cart->get_cart_contents_count(); ?>
            <ul id="shop-nav" class="nav-menu">
                <li class="account">
                    <a href="<?= get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
                       title="<?php esc_attr_e('Mein Konto', 'ize'); ?>">
                        <span class="screen-reader-text"><?php esc_attr_e('Mein Konto', 'ize'); ?></span>
                        <span class="dashicons dashicons-admin-users" aria-hidden="true"></span>
                    </a>
                </li>
                <li class="cart">
                    <a href="<?= wc_get_cart_url(); ?>" aria-label="<?php esc_attr_e('Warenkorb', 'ize'); ?>">
                        <span class="screen-reader-text"><?php esc_attr_e('Warenkorb', 'ize'); ?></span>
                        <span class="dashicons dashicons-admin-users menu-icon" aria-hidden="true"></span>
                        <?php if ($product_count > 0) echo '<span class="badge">' . $product_count . '</span>'; ?>
                    </a>
                </li>
            </ul>
        <?php endif;
    }


// add menü items into icons
add_filter('wp_nav_menu_items', 'add_cart_and_shop_icons_to_menu', 10, 2);
function add_cart_and_shop_icons_to_menu($items, $args)
{
// Check if the menu is the icon menu and the user is logged in
    if ($args->theme_location == 'primary' /* && is_user_logged_in() */ ) {
// Get the cart URL and count

        $cart_url = wc_get_cart_url();
        $cart_count = WC()->cart->get_cart_contents_count();
// Add the cart icon to the menu item
        $items .= '<li><a href="' . esc_url($cart_url) . '"><span aria-hidden="true" class="dashicons dashicons-cart menu-icon"></span><span class="cart-count">' . esc_html($cart_count) . '</span></span><span class="screen-reader-text">' . __('Zum Warenkorb', 'ize') . '</span></a></li>';

        $my_account_url = get_permalink(get_option('woocommerce_myaccount_page_id'));
// Add the My Account icon to the menu item
        $items .= '<li><a href="' . esc_url($my_account_url) . '"><span aria-hidden="true" class="dashicons dashicons-admin-users menu-icon"></span><span class="screen-reader-text">' . __('Mein Konto', 'ize') . '</span></a></li>';
    }
    return $items;
}

