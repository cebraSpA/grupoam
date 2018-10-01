<?php
    $header1_top_left_text = xzopro_option('header1_top_left_text');
    $header1_top_icons = xzopro_option('header1_top_icons');
    $fixed_menu = xzopro_option('fixed_menu');
    if($fixed_menu == true ){
        $fixed_menu = 'top-fixed-menu';
    }else{
        $fixed_menu = '';
    }

    $eneble_header_button = xzopro_option('header_button');

    if($eneble_header_button == true ){
        $detect_header_btn = 'menu-btn-on';
    }else{
        $detect_header_btn = 'menu-btn-off';
    }
?>

<?php if(!empty($header1_top_left_text) || !empty($header1_top_icons )) : ?>

<div class="header-top-area xzo-transition">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-md-9">
                <?php

                if(!empty($header1_top_left_text)) :
                ?>
                <div class="header-top-left">
                    <ul class="no-list-style">
                        <?php foreach($header1_top_left_text as $header1_top_left_single_text ) :?>
                            <li>
                                <?php if(!empty($header1_top_left_single_text['top1_left_text_url'])) : ?>
                                <a href="<?php echo esc_url($header1_top_left_single_text['top1_left_text_url']);?>">
                                    <?php else: ?>
                                    <span>
                                <?php endif; ?>
                                        <i class="<?php echo esc_attr($header1_top_left_single_text['top1_left_text_icon']);?>"></i>
                                        <?php echo esc_attr($header1_top_left_single_text['top1_left_text']);?>

                                        <?php if(!empty($header1_top_left_single_text['top1_left_text_url'])) : ?>
                                </a>
                                <?php else: ?>
                                </span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>


            <?php

            if(!empty($header1_top_icons)) :
            ?>
            <div class="col-lg-4 col-md-3">
                <div class="header-top-social">
                    <ul class="no-list-style">
                        <?php foreach($header1_top_icons as $header1_top_icon ) :?>
                            <li>
                                <a href="<?php echo esc_url($header1_top_icon['top1_url']);?>"><i class="<?php echo esc_attr($header1_top_icon['top1_icon']);?>"></i></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="header-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-branding">
                    <?php
                        if(has_custom_logo()){
                            the_custom_logo();
                        }else{
                            $header_1_logo = xzopro_option('header_1_logo');
                            if(!empty($header_1_logo)){
                                $header_1_logo_array = wp_get_attachment_image_src($header_1_logo, 'full');?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo esc_url($header_1_logo_array[0]); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>">
                                    </a>
                                
                            <?php }else{ ?>
                                 <h1 class="site-title xzo-transition"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php }
                        }
                    ?>
                </div>
            </div>


            <?php
            $header1_top_right_text = xzopro_option('header1_top_right_text');
            if(!empty($header1_top_right_text)) :
            ?>
            <div class="col-lg-9 col-md-9">
                <div class="header-right-info no-list-style">
                    <ul>
                        <?php foreach($header1_top_right_text as $header1_top_right_single_text ) :?>
                        <li>
                            <i class="<?php echo esc_attr($header1_top_right_single_text['top1_right_text_icon']);?>"></i>
                            <span class="info-first"><?php echo esc_html($header1_top_right_single_text['top1_right_bold_text']);?></span>
                            <span class="info-second"><?php echo esc_html($header1_top_right_single_text['top1_right_small_text']);?></span>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="header-1-main-menu-area <?php echo esc_attr($detect_header_btn)?>">
    <div class="main-menu-area <?php echo esc_attr($fixed_menu)?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-right">
                    <nav id="site-navigation" class="main-navigation navigation no-list-style xzo-transition">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col-lg-3 menu-right-area">
                    <div id="mobile-menu-wrap"></div>

                    <?php
                        $enable_header_search = xzopro_option('enable_header_search');
                    ?>
                    <?php if($enable_header_search == true) : ?>
                    <div class="search-trigger">
                        <div class="trigger-container">
                            <i class="flaticon-xzopro-loupe"></i>
                        </div>
                    </div>
                    <?php endif;?>
                    <!-- Top Button -->
                    <?php
                        
                        if($eneble_header_button == true){
                            get_template_part( 'template-parts/header/header', 'button' );
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="header-search-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-form-wrapper">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>