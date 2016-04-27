<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Transtex Treating</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header>
    <nav class="navbar navbar-default navbar-menu">
        <div class="top-head">
            <div class="container-fluid">
                <ul class="search-form-wrap">
                    <li>
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-transparent"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png"></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-menu-collapse">

                <button class="mobile-close"><span class="icon-cross"></span></button>

                <?php

                $defaults = array(
                    'theme_location'  => 'primary',
                    'menu'            => 'Main Menu',
                    'menu_class'      => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                );
                wp_nav_menu( $defaults );

                ?>

                <ul class="search-form-wrap search-form-wrap-desk">
                    <li>
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-transparent"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png"></button>
                        </form>
                    </li>
                    <li> <a href="#" class="contact-link">CALL: 713-654-4440 </a></li>
                </ul>

                <button class="btn btn-search">Search <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png"></button>
                <a href="" class="small-view-phone">Call <span class="icon-phone"></span></a>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>