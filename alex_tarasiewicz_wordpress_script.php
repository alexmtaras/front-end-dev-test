<?php

/*
* 
* I would add this to the functions.php file... 
* to use Google CDN jQuery instead of using the default WordPress jQuery.
* 
*/

// Making jQuery Google API
function modify_jquery() {
  if (!is_admin()) {
    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery');

?>