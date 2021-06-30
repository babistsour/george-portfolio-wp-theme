<?php
/**
 * The template for displaying all pages
 *
 * 
 *
 * @package geo_siak_portfolio
 * 
 */

get_header(); ?>
<div class="container" id="page-content">

<?php while ( have_posts() ) : the_post(); 
	
	 get_template_part('template-parts/content', 'page' ); 

	
 endwhile; ?>
</div>

