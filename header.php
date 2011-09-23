<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!-- Framework CSS -->  
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />  
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blueprint/print.css" type="text/css" media="print" />  
        <!--[if IE]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/blueprint/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->  
        <!-- End Framework CSS -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="siteWrapper">
            <header>
                <?php if(is_front_page()) { ?>
                <div id="headerSlider">
                <?php } else { ?>
                <div id="header">
                <?php } ?>
                    <div id="navBar">
                        <div class="headerLogo">
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                                <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/rcbd_logo_mini_green.png" />
                            </a>
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary', // Setting up the location for the main-menu, Main Navigation.
                            'menu_class' => 'sf-menu', //Adding the class for dropdowns
                            'container_id' => 'navWrap', //Add CSS ID to the containter that wraps the menu.
                            'container_class' => 'menu-header',
                            'fallback_cb' => 'primaryMenu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
                                )
                        );
                        ?>
                    </div>
                    <?php if(is_front_page()) { ?>
                    <div id="sliderContainer" class="container">
                        <div id="slides">
                            <div class="slides_container">
                                <div class="slide">
                                    <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.png" />
                                </div>
                                <div class="slide">
                                    <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.png" />
                                </div>
                                <div class="slide">
                                    <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/slide3.png" />
                                </div>
                            </div>
                            <div class="prev">
                                <a href="#" class="prev">
                                    <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_prev_off.png" class="rollover" />
                                </a>
                            </div>
                            <div class="next">
                                <a href="#" class="next">
                                    <img src ="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_next_off.png" class="rollover" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div id="headerBackground" class="span-24"></div>
                    <?php } ?>
                </div>
            </header>
