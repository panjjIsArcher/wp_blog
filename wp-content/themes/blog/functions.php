<?php 

    function add_stylesheet_to_head() {
        wp_enqueue_style("blog", get_stylesheet_uri());
        wp_enqueue_style("land",get_template_directory_uri()."/assets/css/land.css");
    };
    
    function blog_feature() {
        add_theme_support("title-tag");
    };
  
    // script函数加载成功后的回调
    add_action("wp_enqueue_scripts", "add_stylesheet_to_head");

    // 主题创建之后的回调
    add_action("after_setup_theme", "blog_feature");

?>