<?php

function zeus_theme_styles(){
    $version = date('hmi');
    $directory = get_template_directory_uri();

    // CSS
    wp_enqueue_style('zeus_style_css', $directory . '/style.css', [], $version, false);

    // JS
    wp_enqueue_script('zeus_jquery_js', $directory . '/assets/js/lib/jquery-3.5.1.js', true);
    wp_enqueue_script('zeus_popper_js', $directory . '/assets/js/lib/popper.min.js', array(), true);
    wp_enqueue_script('zeus_bootstrap_js', $directory . '/assets/js/plugins/bs_js/index.js', array(), $version, true);
    wp_enqueue_script('zeus_fontawesome', "https://kit.fontawesome.com/db192ad007.js");
    wp_enqueue_script('zeus_main_js', $directory . '/assets/js/main.js', array(), $version, true);
}

function zeus_after_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            "menu-primary" => __('Menu Header', 'Menu Principal'),
            "footer-menu" => __('Menu Footer', 'odin')
        )
    );


}