<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/main2.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<header class="main-header">
      <div class="container header">
        <div class="side-menu"><img src="<?php echo get_template_directory_uri(); ?>/custom/menu-icon.png" alt="menu-icon">
            
            <?php
			            wp_nav_menu( array(
				            'theme_location' => 'side',
				            'menu_class'   =>   'side-menu__list',
				            'container_class' =>  'side-menu__menu'
			             ) );
		
			          ?>
        </div>
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/custom/logo.png" alt="logo"></div>
       
        <?php
			            wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'menu_class'   =>   'main-menu__list',
				            'container_class' =>  'main-menu'
			             ) );
		
			          ?>
        <div class="lang"><a class="lang__active" href="#">Ru </a><span>&nbsp;/&nbsp;</span><a href="#">En</a></div>
        <div class="mobile-menu"><img class="mobile-menu__icon" src="<?php echo get_template_directory_uri(); ?>/custom/menu-icon.png" alt="menu-icon">
          <div class="mobile-menu__wrapper">
            <div class="mobile-menu__close">X</div>
            <?php
			            wp_nav_menu( array(
				            'theme_location' => 'mobile',
				            'menu_class'   =>   'mobile-menu__list',
				            'container_class' =>  'mobile-menu__menu'
			             ) );
		
			          ?>
          </div>
        </div>
        <div class="socials-and-cart">
          <div class="socials">
            <div class="socials-icon"><a href="#"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_facebook_194929-4.png" alt="facebook"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_facebook_194929-4-1.png" alt="facebook" class="hover"></a></div>
            <div class="socials-icon"><a href="#"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_intsagram_194923.png" alt="instagram"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_intsagram_194923-1.png" alt="instagram" class="hover"></a></div>
            <div class="socials-icon"><a href="#"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_vk_194929-4.png" alt="vk"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_vk_194929-4-1.png" alt="vk" class="hover"></a></div>
            <div class="socials-icon"><a href="#"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_youtube_194904-2.png" alt="youtube"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/iconfinder_youtube_194904-2-1.png" alt="youtube" class="hover"></a></div>
          </div>
          <div class="cart">
              <div class="cart-icon">
                <a href="<?php echo get_home_url().'/cart'?>">
                  <i class="fas fa-shopping-cart"></i>
                  <?php echo WC()->cart->get_cart_subtotal(); ?>
                 </a>
              </div>
          	
          </div>
          <div class="empty"></div>
          <div class="empty-small"></div>
          <div class="empty-big"></div>
        </div>
      </div>
      
    </header>

	<div id="content" class="site-content" tabindex="-1">
	    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );