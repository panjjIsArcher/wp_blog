<?php 

    function add_stylesheet_to_head() {
        wp_enqueue_style("blog", get_stylesheet_uri());
        wp_enqueue_style("land",get_template_directory_uri(  )."/assets/css/land.css");
    };
  
    add_action("wp_enqueue_scripts", "add_stylesheet_to_head" );
?>