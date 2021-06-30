<?php /**
 * 
 * template part for displaying single posts
 * 
 * @package geo_siak_portfolio
 */

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    
    
</header><!-- .entry-header -->

<div class="entry-content">
    <?php
    the_content();

    wp_link_pages(
        array(
            'before'   => '<div class="page-links" aria-label="' . esc_html__( 'Page', 'geo_siak_portfolio' ) . '">',
            'after'    => '</div>',
            
        )
    );
    ?>
</div><!-- .entry-content -->



</article>