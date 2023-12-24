<?php get_header( ); ?>


    <div class="land-container full-screec-style ">
            <?php 
                wp_nav_menu( array(
                   "theme_location" => "navMenu" ,
                   "menu_class" => "nav-ul land-menu position-center",
                   "menu_id" => "navId",
                   "item_wrap" => "<ul > %3$s  </ul>"
                ) )
            ?>
     
    </div>
    
    <script src=<?php echo get_template_directory_uri(  )."/assets/js/weather.js"; ?>></script>

<?php get_footer(  ); ?>