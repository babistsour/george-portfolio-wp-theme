<?php add_theme_support('post-thumbnails'); 



function mytheme_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


// add_image_size($width, $height, $cropBoolean);

function my_styles() {
    wp_deregister_style( 'header' );
    wp_register_style( 'style',  get_template_directory_uri() . 'style.css');
    wp_enqueue_style( 'style' );
    if (is_page_template('single.php')) { wp_enqueue_style('style2', get_template_directory_uri(). 'style2.css', 'style'); }
}
add_action('wp_print_styles', 'my_styles');


function themeaw_setup(){
    register_nav_menus(array(
        'primary' => 'Primary Menu',
   ));
}

add_action('init ', 'themeaw_setup');

    

function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'new-widget-area',
    'name' => esc_html__( 'My new widget area', 'theme-domain' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
    )
    );
    }
    add_action( 'widgets_init', 'register_custom_widget_area' );
    

    