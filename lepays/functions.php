<?php 
add_theme_support( 'post-thumbnails' );//celui-ci permet d'ajouter la prise en charge des images mises en avant
add_theme_support( 'title-tag' );//celui-ci permet d'ajouter automatiquement le titre du site dans l'ent-tête du site

//ci-dessous création de la fonction style et le script
function custom_scripts() {
    wp_enqueue_style( 'bootstrap-style' , 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'custom-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . './style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );//celui-ci permet de mettre en action le script et la fonction


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
// création d'une fonction pour appeler le style.css du thème parent
// get_template_directory_uri() renvoi l'URL du thème parent
function theme_enqueue_styles() {
wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


//ci-dessous création de la fonction menu 
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );//celui-ci permet de mettre en action la fonction wpb_custom_new_menu

// ci-dessous création de la fonction 
function new_excerpt_more($more)
{
    global $post;
    return '…<a href="' . get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
function my_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

