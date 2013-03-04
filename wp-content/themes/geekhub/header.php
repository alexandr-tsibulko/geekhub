<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php
        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( '' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        ?>
    </title>
    <meta name="description" content="GeekHub надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?79"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ie-odd.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="header">
        <?php if ( is_home() ) { ?>
            <h1 class="logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="geekhub"/></a></h1>
        <?php } else { ?>
            <div class="logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="geekhub"/></a></div>
        <?php } ?>

        <?php
            wp_nav_menu(
                array(
                    'menu'            => 'header-menu',
                    'container'       => '',
                    'menu_class'      => 'nav',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                )
            )
        ;?>

        <ul class="social" >
            <li class="f"><a href="#"></a></li>
            <li class="vk"><a href="#"></a></li>
            <li class="t"><a href="#"></a></li>
            <li class="yt"><a href="#"></a></li>
            <li class="v"><a href="#"></a></li>
        </ul>

        <?php if ( is_home() ) { ?>
            <div class="line"></div>
            <h2>Реєстрація на другий сезон відкрита!</h2>
            <a href="#" class="registr">Зараєструватися</a>
        <?php } ?>



    </div><!-- header -->
