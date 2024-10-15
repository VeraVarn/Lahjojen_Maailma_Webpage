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
                <!-- Blog -->
                <section class="blog">
                    <div class="blog__container container">
                        <?php
                            if( have_posts() ):
                                while( have_posts() ): the_post();
                                    ?>
                                        <article>
                                            <h2><?php the_title(); ?></h2>
                                            <div><?php the_content(); ?></div>
                                        </article>
                                    <?php
                                endwhile;
                            else:
                        ?>
                            <p>No blog posts to display.</p>
                        <?php endif; ?>
                    </div>
                </section>
            </main>

<?php get_footer(); ?>