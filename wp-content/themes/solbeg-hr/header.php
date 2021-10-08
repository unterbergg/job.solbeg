<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solbeg_hr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;500;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;600&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header">
            <div class="header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="">
                </a>
            </div>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu'            => '', 
					'container'       => 'nav', 
					'container_class' => 'header__menu', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				)
			);
			?>
        </div>
        <div class="header-mobile">
            <div class="header-mobile__top-line">
                <div class="header-mobile__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="">
					</a>
				</div>
                <div id="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu'            => '', 
					'container'       => 'div', 
					'container_class' => 'header-mobile__menu', 
					'container_id'    => '',
					'menu_class'      => 'header-mobile__menu-list', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				)
			);
			?>
        </div>
    </header>