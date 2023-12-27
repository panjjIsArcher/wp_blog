<?php 

    function add_stylesheet_to_head() {
        wp_enqueue_style("blog", get_stylesheet_uri());
        wp_enqueue_style("land", get_template_directory_uri()."/assets/css/land.css");
        wp_enqueue_style("index", get_template_directory_uri()."/assets/css/index.css");
    };

    function add_script_to_head(){
        wp_enqueue_script( "device_adpater",get_template_directory_uri()."/assets/js/deviceAdapter.js" );
    };

    function blog_feature() {
        // 更新meta
        add_theme_support("title-tag");
        // 注册menu
        register_nav_menu("navMenu","nav");
    };

    add_action( "wp_enqueue_scripts", "add_script_to_head");
   
    // script函数加载成功后的回调
    add_action("wp_enqueue_scripts", "add_stylesheet_to_head");

    // 主题创建之后的回调
    add_action("after_setup_theme", "blog_feature");
 

?>