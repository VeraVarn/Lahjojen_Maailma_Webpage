<?php
/**
* The footer for the theme
*
* Contains <footer> and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lahjojen Maailma Theme
 */
?>

            <footer class="footer container">
                <div class="footer__content-area">
                    <img class="footer__logo" alt="" src="./">
                    <div class="footer__content">
                        <nav class="footer__menu nav-menu">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    =>  'lahjojen_maailma_footer_menu'
                                    )
                                );
                            ?>
                        </nav>
                        <div class="footer__social-media-container">
                            <p>Follow Us</p>
                            <div class="footer__social-media-icons">
                                <div class="social-media-icon-wrapper">
                                    <div class="social-media-icon"></div>
                                </div>
                                <div class="social-media-icon-wrapper">
                                    <div class="social-media-icon"></div>
                                </div>
                                <div class="social-media-icon-wrapper">
                                    <div class="social-media-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="copyright">
                    <p>Copyright &copy; Lahjojen Maailma <span id="year"></span>. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>