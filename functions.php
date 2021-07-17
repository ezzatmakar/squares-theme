<?php
function remove_editor() {
  $id = 6;
  $template = get_post_meta($id, '_wp_page_template', true);
  if($template == 'index.php'){ 
    remove_post_type_support( 'page', 'editor' );
  }
}
add_action('init', 'remove_editor');
// CSS 
function theme_add_styles(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() ."/assets/plugins/bootstrap/bootstrap.min.css", array(), '', 'all');
  wp_enqueue_style('lightgallery', get_template_directory_uri() ."/assets/plugins/lightgallery/css/lightgallery.min.css", array(), '', 'all');
  wp_enqueue_style('fonts', get_template_directory_uri() ."/assets/css/style.fonts.css", array(), '', 'all');
  wp_enqueue_style('style', get_template_directory_uri() ."/assets/css/style.min.css", array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_add_styles');

// Scripts
function theme_add_scripts(){
  
  wp_enqueue_script('jQuery', get_template_directory_uri() .'/assets/js/jquery.min.js', array(), '', true);
  wp_enqueue_script('popper', get_template_directory_uri() .'/assets/plugins/bootstrap/popper.min.js', array(), null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/plugins/bootstrap/bootstrap.min.js', array(), null, true);
  wp_enqueue_script('lightgallery', get_template_directory_uri() .'/assets/plugins/lightgallery/js/lightgallery-all.min.js', array(), null, true);
  wp_enqueue_script('headroom', get_template_directory_uri() .'/assets/plugins/headroom/headroom.js', array(), null, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_add_scripts');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');
}