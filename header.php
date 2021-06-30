<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * 
 *
 * @package geo_siak_portfolio
 * @subpackage geo_siak_portfolio
 * @since geo_siak_portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>George Portfolio | Graphic Designer based in Trikala</title>
    <meta name="description" content="Portfolio Website of George Siakavaras graphic designer and art director based in Greece">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://kit.fontawesome.com/2d198791b2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class(); ?>>
    <!--########################################## NAVBAR ###################################-->

    
    <div class="container">
      <nav>
        <div class="hamburger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'menu-primary')); ?>
        <!-- <ul class="nav-links">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#projects">PROJECTS</a></li>
          
          <li><a href="#contact">CONTACT</a></li>
        </ul> -->
      </nav>
      <script type="text/javascript" src="<?=get_template_directory_uri();?>/js/main.js"></script>
</body>