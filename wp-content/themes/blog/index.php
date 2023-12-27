<?php 
    get_header( );
?>

<div class="index-container full-screec-style ">
       <ul class="posts-ul">
            <?php 
                $lists = get_posts();
                foreach($lists as $post):
            ?>
                <li>
                    <a href="<?php the_permalink() ?>">
                        <img src="" alt="">
                        <h2>
                            <?php the_title(); ?>
                        </h2> 
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </a>
                </li>
            <?php  endforeach; ?>
       </ul>
    
</div>

<?php 
 get_footer( );
?>