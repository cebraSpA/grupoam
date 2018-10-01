<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xzopro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
        $enable_preloader = xzopro_option('enable_preloader');
        if(is_page() && get_post_meta($post->ID, 'header_meta', true)) {
            $header_meta = get_post_meta($post->ID, 'header_meta', true);
        } else {
            $header_meta = array();
        }


        $default_header_style = xzopro_option('header_style');

        if(array_key_exists('page_header', $header_meta) && $header_meta['page_header'] != 'default') {
            $header_style = $header_meta['page_header'];
        } elseif(!empty($default_header_style)) {
            $header_style = xzopro_option('header_style');
        }else{
            $header_style = '1';
        }

        wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site active-header-<?php echo esc_attr($header_style); ?>">
    <?php if($enable_preloader == true) : ?>
    <!-- Preeloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php endif;?>

	<header class="site-header header-style-<?php echo esc_attr($header_style); ?>">
        <?php get_template_part( 'template-parts/header/header', ''.esc_attr($header_style).'' );?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">