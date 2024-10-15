<?php
/**
* The page template file
*
* This is the template that displays all pages by default.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lahjojen Maailma Theme
 */
?>

<?php get_header(); ?>

            <main>
                <!-- Content of the page -->
                <section class="content-area">
                    <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                                ?>
                                    <article>
                                        <h1><?php the_title(); ?></h1>
                                        <div><?php the_content(); ?></div>
                                    </article>
                                <?php
                            endwhile;
                        else:
                    ?>
                        <p>No blog posts to display.</p>
                    <?php endif; ?>
                </section>
            </main>

<?php get_footer(); ?>