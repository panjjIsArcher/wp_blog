<?php 

    function add_stylesheet_to_head() {
        wp_enqueue_style('blog', get_stylesheet_uri(  ));
    };

  
    add_action('wp_enqueue_scripts', 'add_stylesheet_to_head' );
  
    

?>