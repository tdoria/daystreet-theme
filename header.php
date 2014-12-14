<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right'); bloginfo( 'name' ); ?></title>
   
	<?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

  <div id="main-wrapper">  

  <header>
    <div id="logo">
  		  <h1 class="logo-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>    
        <nav>
          <?php 

          $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'no-bullet',
          );

          wp_nav_menu( $defaults );

          ?>
      
        </nav>  
	</header>	

  


