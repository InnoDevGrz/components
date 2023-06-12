<?php
// Warenkorb nach 5 Minuten leeren
function empty_cart_after_time() {
    if (is_cart()) {
        $cart = WC()->cart;
        if (sizeof($cart->get_cart()) > 0) {
            $current_time = current_time('timestamp');
            $last_activity = WC()->session->get('cart_last_activity');
            if (empty($last_activity)) {
                WC()->session->set('cart_last_activity', $current_time);
                // hier zeit in sekunden angeben
            } elseif ($current_time - $last_activity > 30) {
                $cart->empty_cart();
                WC()->session->set('cart_last_activity', $current_time);
            }
        }
    }
}
add_action('template_redirect', 'empty_cart_after_time');
