<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xzopro
 */

$enable_blog_banner = xzopro_option('enable_blog_banner');
$blog_banner_default_img = xzopro_option('blog_banner_default_img');
$blog_banner_array = wp_get_attachment_image_src($blog_banner_default_img, 'full');
$blog_banner_src = $blog_banner_array[0];

$blog_banner_text_align = xzopro_option('blog_banner_text_align');

$blog_custom_title = xzopro_option('blog_custom_title');

$blog_layout = xzopro_option('blog_layout');

if(!empty($blog_layout)){
    $blog_layout = xzopro_option('blog_layout');
}else{
    $blog_layout = 'right-sidebar';
}

if(!empty($blog_layout) && $blog_layout != 'full-width' && is_active_sidebar( 'sidebar-1' )){
    $main_col_class = 'col-lg-8 col-md-12';
}else{
    $main_col_class = 'col-lg-12';
}

get_header();
?>

    <?php if($enable_blog_banner == true ) : ?>
    <div class="banner-area" <?php if(!empty($blog_banner_src)) :?> style="background-image: url(<?php echo esc_url($blog_banner_src)?>)" <?php endif;?> >
        <div class="container text-<?php echo esc_attr($blog_banner_text_align) ?>">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1>
                            <?php
                            if(!empty($blog_custom_title)){
                                echo esc_html($blog_custom_title);
                            }else{
                                echo esc_html__('Our Blog', 'xzopro');
                            }
                            ?>
                        </h1>

                        <div class="breadcrum-container">
                            <?php if(function_exists('bcn_display')) bcn_display();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div id="primary" class="content-area xzopro-vc-disable">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row <?php echo esc_attr($blog_layout) ?>">
                    <?php if($blog_layout == 'left-sidebar'){
                        get_sidebar();
                    }?>
                    <div class="<?php echo esc_attr($main_col_class)?> xzopro-posts-wrap <?php echo esc_attr($blog_layout) ?>">

                        <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12 text-center">
                                    <?php
                                    the_posts_pagination(array(
                                        'next_text' => '<i class="fa fa-angle-right"></i>',
                                        'prev_text' => '<i class="fa fa-angle-left"></i>',
                                        'screen_reader_text' => ' ',
                                        'type'                => 'list'
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($blog_layout == 'right-sidebar'){
                        get_sidebar();
                    }?>
                </div>
            </div>
        </main>
    </div>

<?php
get_footer();
