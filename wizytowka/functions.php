<?php

// Funkcja do ładowania skryptów i styli
function wizytowka_enqueue_assets() {
    //Scripts
    wp_enqueue_script('script-js', get_theme_file_uri('/assets/js/main.js'), array(), '1.0', true);
    wp_enqueue_script('font_awasome', '//kit.fontawesome.com/e85828e76a.js');
    
    // Style
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    wp_enqueue_style('reset-css', get_theme_file_uri('/assets/css/reset.css'));
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wizytowka_enqueue_assets');

// Funkcje do ładowania części szablonów
function get_menu() {
  get_template_part('template-parts/menu');
}

function get_main_pl() {
  get_template_part('template-parts/content', 'main_pl');
}

function get_main_en() {
  get_template_part('template-parts/content', 'main_en');
}



