function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'parent-cart', get_template_directory_uri() . '/usces_cart.css', array('parent-style', 'usces_default_css') );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );