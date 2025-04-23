<?php

// Funkcja do ładowania skryptów i styli
function wizytowka_enqueue_assets() {
    // Style
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
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



