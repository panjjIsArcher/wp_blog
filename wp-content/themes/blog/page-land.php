<?php get_header(); ?>

    <div class="weather-container full-screec-style" id="mask"></div>

    <div class="land-container full-screec-style ">
            <?php 
                wp_nav_menu( array(
                   "theme_location" => "navMenu" ,
                   "menu_class" => "nav-ul land-menu",
                   "menu_id" => "navId"
                ) )
            ?>
    </div>
    
    <script src=<?php echo get_template_directory_uri(  )."/assets/js/weather.js"; ?>></script>

<?php get_footer(); ?>