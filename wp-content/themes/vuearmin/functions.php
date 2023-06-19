<?php

// Activate Menu Functionality

function theme_register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu', // Main navigation menu
        'secondary' => 'Footer Menu', // Footer navigation menu
    ));
}
add_action('after_setup_theme', 'theme_register_menus');

// Includes to folder

function get_includes($name = null) {
  if ($name) {
    $file = locate_template("includes/{$name}.php", false, false);
    if ($file) {
      include $file;
    }
  }
}


?>
