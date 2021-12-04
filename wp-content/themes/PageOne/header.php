<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name');?></title>

    <link rel="stylesheet" href="<?=bloginfo('template_url');?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/jquery.fancybox-1.3.4.css" type="text/css" />

    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- header-wrap -->
<div id="header-wrap">
    <header>

        <hgroup>
            <h1><a href="/"><?php bloginfo('name');?></a></h1>
            <h3><?php bloginfo('description');?></h3>
        </hgroup>

        <nav>
            <!-- <ul> -->
                <!-- <li><a href="/">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Our Works</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="#styles">Styles</a></li>
                <li><a href="#contact">Contact Us</a></li> -->
                <?php
                    wp_nav_menu( [
                        //'theme_location'  => '',
                        'menu'            => 'Main',
                        'container'       => false,
                        //'container_class' => '',
                        //'container_id'    => '',
                        'menu_class'      => '',
                        //'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        //'before'          => '',
                        //'after'           => '',
                        //'link_before'     => '',
                        //'link_after'      => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 1,
                        //'walker'          => '',
                    ] );
                    ?>
            
            <!-- </ul> -->
        </nav>

    </header>
</div>