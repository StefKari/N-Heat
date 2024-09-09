<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/n-heat-logo-footer.png'; ?>" type="image/x-icon">
    <title>N-heat</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/rest.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/fullpage.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/search-filter.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/tiny-slider.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/fullpage.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/all.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/jquery.fancybox.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/magnific.css'?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <?php wp_head(); ?> 
</head>
<header class="header">
    <div class="container">
        <div class="row">
            <!-- Desktop navigation -->
            <div class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/n-heat-logo.png'; ?>" alt="N-Heat logo">
                </a>
                <nav class="collapse navbar-collapse navbar-expand-xl md-none p-xl-0 col justify-content-end align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="header-nav" class="main-navigation collapse navbar-collapse justify-content-end">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => 'div',
                            'container_id'    => '',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            //  'walker' => new WP_Bootstrap_Navwalker()
                        ));
                        ?>
                    </div>
                </nav>
                <!-- <a class="brand-logo" href="/nexans">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/danfoss_logo.png'; ?>" alt="N-Heat logo">
                </a> -->
                <div class="white-line"></div>
                <a class="brand-logo" href="/devi">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/danfoss_logo.png'; ?>" alt="Danfoss logo">
                </a>
                <div class="mobile-phone">
                    <a href="tel:+381603023400"><i class="fas fa-phone-alt"></i></a>
                </div>
                <div class="hamburger-menu d-lg-none">
                    <div class="menu">
                        <div class="menu_btn" id="ani-2">
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <button class="toggle-menu"><span></span></button>
                    </div>

                    <div class="sidemenu menu" id="ani-2">
                        <div class="container">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container' => '',
                                'container_id'    => '',
                                'menu_id'         => false,
                                'menu_class'      => 'mobile-nav',
                                'depth'           => 3,
                                // 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
