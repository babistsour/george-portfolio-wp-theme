<?php 
/**
 * The template for displaying the posts
 * 
 * @package geo_siak_portfolio
 */
get_header(); ?>
    <div class="container">
        <div id="post-content">
        <?php
            
                while(have_posts()) : the_post(); ?>
                
                <?php get_template_part('template-parts/content', 'single'); ?>
                
                
                    
                   
                
                    

            <?php endwhile; ?>
        </div>
        
    </div>
    <!-- <script type="text/javascript" src="<?=get_template_directory_uri();?>/js/main.js"></script> -->
    

    <!-- ####################################  aniimations ############################ -->
  
  </body>
</html>