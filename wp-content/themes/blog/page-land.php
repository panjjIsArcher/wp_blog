<?php get_header( ); ?>


    <div class="land-container full-screec-style ">
      
            <?php 
                wp_nav_menu( array(
                   "theme_location" => "navMenu" ,
                   "menu_class" => "nav-ul land-menu position-center"

                ) )
            ?>
     
    </div>
    

<?php get_footer(  ); ?>