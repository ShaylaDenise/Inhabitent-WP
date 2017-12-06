<?php 
  function theme_script_enqueue() {
    wp_enqueue_style( "custom_style" , get_template_directory_uri() . "/css/theme.css" , array() '1.0.0', 'all');
  }
  add_action()
 ?>
