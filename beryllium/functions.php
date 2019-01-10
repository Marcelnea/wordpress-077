<?php
function register_enqueue_style() {

 $theme_data = wp_get_theme();
/*registrando estilos*/
  wp_register_style('animate', get_parent_theme_file_uri('/css/animate.css'),null, '1.0', 'screen');
  wp_register_style('icomoon', get_parent_theme_file_uri('/css/icomoon.css'),'null', '1.0', 'screen');
  wp_register_style('themify-icons', get_parent_theme_file_uri('/css/themify-icons.css'),'null', '1.0', 'screen');
  wp_register_style('bootstrap', get_parent_theme_file_uri('/css/bootstrap.css'),'null', '1.0', 'screen');
  /*estilos en cola*/
  wp_enqueue_style('animate');
  wp_enqueue_style('icomoon');
  wp_enqueue_style('themify-icons');
  wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

?>
