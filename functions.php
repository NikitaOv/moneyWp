<?php
add_action('wp_enqueue_scripts', 'money_scripts');

function money_scripts() {

    wp_enqueue_style('money-style-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
    wp_enqueue_style('money-style-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('money-style-main', get_stylesheet_uri(), ['money-style-reboot', 'money-style-grid']);


    wp_enqueue_script( 'money-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
}

add_theme_support('menus');

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attruibutes', 10, 3);
function filter_nav_menu_link_attruibutes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__link';
    }
    if ($args->menu === 'White') {
        $atts['class'] = 'header__link header__link_black';
        /* $atts['class'] = 'header__link_black'; */
    }

    return $atts;
}
?>