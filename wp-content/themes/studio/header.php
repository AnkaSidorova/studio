<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <title>Studio</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.5/jquery.touchSwipe.min.js"></script>

    <link href="<?php bloginfo('template_directory') ?>/css/styles.css" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-light text-dark"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
<!--        	--><?php
//
//                wp_nav_menu( array(
//                    'theme_location'  => '',
//                    'menu'            => '',
//                    'container'       => 'ul',
//                    'container_class' => 'navbar-nav',
//                    'container_id'    => '',
//                    'menu_class'      => 'navbar-nav',
//                    'menu_id'         => '',
//                    'echo'            => true,
//                    'fallback_cb'     => 'wp_page_menu',
//                    'before'          => '',
//                    'after'           => '',
//                    'link_before'     => '',
//                    'link_after'      => '',
//                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
//                    'depth'           => 0,
//                    'walker'          => '',
//                ) );
//
//            ?>



            
            <ul class="navbar-nav">
                <li class="nav-item mx-0 mr-lg-4"><a class="nav-link py-2 px-0 pr-lg-4 js-scroll-trigger"
                                                     href="#">Главная</a></li>
                <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-2 px-0 px-lg-4 js-scroll-trigger"
                                                     href="#slider">Слайдер</a></li>
                <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-2 px-0 px-lg-4 js-scroll-trigger"
                                                     href="#card">Карточки</a></li>
                <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-2 px-0 px-lg-4 js-scroll-trigger"
                                                     href="#contact">Форма</a></li>
                <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-2 px-0 px-lg-4 js-scroll-trigger"
                                                     href="#list">Список</a></li>
                <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-2 px-0 px-lg-4 js-scroll-trigger"
                                                     data-toggle="modal" data-target="#exampleModal">Модалка</a></li>
            </ul>
        </div>
    </div>
</nav>


<header class="site-header container-fluid" style="background-image: url('<?php the_field('img_fon') ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">        
                <h1 class="text-uppercase mb-0 text-light"><?php bloginfo('name') ?></h1>
            </div>
        </div>
        <div class="form-group">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#exampleModal">
                Модальное окно
            </button>
        </div>
    </div>
</header>