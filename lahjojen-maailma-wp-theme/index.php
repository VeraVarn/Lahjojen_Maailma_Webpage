<?php
/**
* The main template file
*
* This is the generic template file in WordPress theme
* and one of the two required files for a theme (the other being style.css)
* It is used to display a page when nothing more spesific matches a query.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lahjojen Maailma Theme
 */

get_header(); ?>

            <main>
                <!-- Hero -->
                <section class="hero">
                    <div class="hero__container container">
                        <div class="hero__content">
                            <img class="hero__image" alt="" src="./">
                        </div>
                    </div>
                </section>
            </main>

<?php get_footer(); ?>