<?php
function custom_return_to_shop_text($url) {
// Ändern Sie die Weiterleitungs-URL nach dem Klick auf den "Zurück zum Shop"-Button
$url = 'http://example.com/custom-shop-url';

return $url;
}

function custom_return_to_shop_button_text($text) {
// Ändern Sie den Text des "Zurück zum Shop"-Buttons
$text = 'Neuer Text für den "Zurück zum Shop"-Button';

return $text;
}

add_filter('woocommerce_return_to_shop_redirect', 'custom_return_to_shop_text');
add_filter('woocommerce_return_to_shop_text', 'custom_return_to_shop_button_text');
