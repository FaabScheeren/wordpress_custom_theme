<?php 
function followFabio_theme_support() {
  // Adds dynamic title tag support
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'followFabio_theme_support')
?>

<?php 

function followFabio_menus() {

  $locations = array(
    'primary' => 'Desktop Primary Left Sidebar',
    'footer' => 'Footer menu items'
  );

  register_nav_menus($locations);
}

add_action('init', 'followFabio_menus');

?>

<?php 
// Let Wordpress manage loading the style files
function followFabio_register_styles() {
  $version = wp_get_theme()->get('Version');

  // Array marks styles which the style depend on.
  // wp_enqueue_style(<name>, <get_template_directory_uri() -> path to your theme> . <filename>, array(<dependencies>), <version>, 'all');
  wp_enqueue_style('followfabio-style', get_template_directory_uri() . "/style.css", array("followfabio-bootstrap"), $version, 'all');
  wp_enqueue_style('followfabio-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  wp_enqueue_style('followfabio-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'followFabio_register_styles')
?>

<?php 

// Let Wordpress manage loading the script files
  function followFabio_register_scripts() {
    wp_enqueue_script('followFabio-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_script('followFabio-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('followFabio-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('followFabio-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
  }

  add_action('wp_enqueue_scripts', 'followFabio_register_scripts')
?>