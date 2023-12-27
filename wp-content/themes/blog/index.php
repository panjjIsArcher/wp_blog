<?php 
    get_header( );
?>

<div class="index-container full-screec-style ">
       <ul>
            <?php 
                $lists = get_posts();
                foreach($lists as $post):
            ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </li>
            <?php  endforeach; ?>
       </ul>
    
</div>

<?php 
 get_footer( );
?>