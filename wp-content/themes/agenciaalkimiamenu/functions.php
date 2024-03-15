<?php

function alkimiatema_setup(){
    // imagenes destacadas
    add_theme_support('post-thumbnails'); 

    // TITULOS PARA SEO
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'alkimiatema_setup');

// funcion para agregar el menu de navegacion
function alkimiatema_menu() {
    register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'agenciaalkimiamenu'),
    ) );
}

add_action('init', 'alkimiatema_menu');


// funcion para agregar hoja de estilos css y js
function alkimiatema_scripts_styles(){
    
    // ARCHIVOS CSS
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    // agregando hoja de estilos style
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0');
    wp_enqueue_style('tailwindcss', 'https://cdn.tailwindcss.com', array('style'),'3.4.1');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(),'2.11.4');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(),'11.0.7');

    // ARCHIVOS JS
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array(),  '2.11.4', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(),  '11.0.7', true);
    // wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(),  '2.0.2', true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js',array('swiper-js'),'1.0.0',true);


}
add_action('wp_enqueue_scripts', 'alkimiatema_scripts_styles');