<?php
/**
* The header for the theme
*
* This is the template that displays all of the <head> section and everything up until
* </header>
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lahjojen Maailma Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>
    <?php wp_body_open(); ?>
        <div id="page" class="site">
            <header class="header container" id="header_top-of-the-page">
                <a href="#header_top-of-the-page"><img class="header__logo" alt="" src="./"/></a>
                <nav class="header__main-menu nav-menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    =>  'lahjojen_maailma_main_menu'
                            )
                        );
                    ?>
                </nav>
                <!--<nav class="header__mobile-menu">
                    <div class="header__mobile-menu-close-btn"><i class="header__mobile-menu-toggler icon"></i></div>
                        <ul class="header__mobile-menu-navigation">
                            <li class="header__menu-item">Search</li>
                            <li class="header__menu-item">Ideas</li>
                            <li class="header__menu-item">Occasion</li>
                            <li class="header__menu-item">Featured</li>
                        </ul>
                        <ul class="header__language-menu">
                            <ul class="header__switch-language-dropdown">Language
                                <li class="header__menu-item">Suomi</li>
                                <li class="header__menu-item">English</li>
                            </ul>
                        </ul>
                </nav>-->
            </header>