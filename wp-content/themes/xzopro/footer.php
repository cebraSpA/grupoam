<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xzopro
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

        <?php if(is_active_sidebar('footer-widget')) :?>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( "footer-widget" ) ?>
                </div>
            </div>
        </div>
        <?php endif;?>

        <?php
            $footer_bottom_menu = wp_nav_menu(
                array (
                    'echo' => FALSE,
                    'fallback_cb' => '__return_false',
                    'theme_location' => 'footer-bottom-menu',
                )
            );

            if(!empty ( $footer_bottom_menu )){
                $footer_btm_col_class = 'col-lg-6 col-md-12 order-lg-first order-last';
            }else{
                $footer_btm_col_class = 'col-lg-12 text-center';
            }
        ?>


        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="<?php echo esc_attr($footer_btm_col_class);?>">
                        <div class="site-info">
                            <?php
                            $copyright_text = xzopro_option('copyright_text');
                            echo wp_kses_post( $copyright_text );

                            ?>
                        </div><!-- .site-info -->
                    </div>

                    <?php if ( ! empty ( $footer_bottom_menu ) ) :?>
                    <div class="col-lg-6 col-md-12">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-bottom-menu',
                            'menu_id'        => 'footer-bottom-menu',
                            'container_class' => 'footer-bottom-menu-container'
                        ) );
                        ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
