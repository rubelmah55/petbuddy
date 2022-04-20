<?php
/**
 * Header file for the Embrace Nature WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package airdesigns
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

    <header class="header-wrapper">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-1 mt-2 mt-lg-0 order-3 order-lg-1">
                        <div class="header-middle">
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/logo.svg' ?>"  alt="<?php bloginfo('name'); ?>">       
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-5 col-md-5 order-lg-1">
                        <div class="header-left">
                            <div class="navbar">
                                <?php   
                                    wp_nav_menu( array(
                                        'menu'               => 'Primary Header',
                                        'theme_location'     => 'primary',
                                        'depth'              => 2,
                                        'menu_id'            => '',
                                        'container'          => false,
                                        'menu_class'         => 'd-flex',
                                        'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                        'walker'             => new wp_bootstrap_navwalker(),
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-5 col-md-5 order-3 order-lg-3 text-md-end none">
                        <div class="header-right d-flex justify-content-between  align-items-center flex-nowrep mt-1">
                            <div class="search-box-wrapper">
                                <form action="#">
                                    <input type="text" placeholder="Търси">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <div class="love-cose pl-1">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/love.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                            </div>
                            <div class="count pl-1">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/cart.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                            </div>
                            <div class="account pl-1">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/вход.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                            </div>
                            <?php 
                                $header = get_field('header', 'options');

                                if(!empty($header['button'])){
                                    ?>
                                    <a href="<?php echo $header['button']['url']; ?>" class="button pl-3" target="<?php echo $header['button']['target']; ?>"><?php echo __($header['button']['title'], 'airdesigns'); ?></a>
                                    <?php
                                }
                             ?>
                            <div class="wpml-button-wrapper pl-2">
                                <div class="select-language">
                                    <form>
                                        <select id="lan">
                                            <option>En</option>
                                            <option>Lt</option>
                                            <option>BD</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class=" navmanu text-end d-none">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/navbar.svg' ?>" alt="<?php bloginfo('name'); ?>" onclick="openNav()">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- navmanu -->
        <div class=" navmanus text-end d-none">
            <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/navbar.svg' ?>" alt="<?php bloginfo('name'); ?>" onclick="openNav()">
        </div>
        <div id="myNav" class="overlay">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                        <div class=" ps-2 nav-manu-weperr  d-none">
                            <div class="header-right d-flex  align-items-center ">
                                <div class="search-box-wrapper">
                                    <form action="#">
                                        <input type="text" placeholder="Търси">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                                <div class="love-cose ps-1">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/love.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                                </div>
                                <div class="count ps-1">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/cart.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                                </div>
                                <div class="account ps-1">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/вход.svg' ?>" alt="<?php bloginfo('name'); ?>"></a>
                                </div>
                            </div>
                        </div>
                <div class="header-nav">
                    <div class="navbar">
                        <ul>
                            <li class="dropdwon"><a href="#">Магазин</a> <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/Vector-arrow.svg' ?>"  alt="<?php bloginfo('name'); ?>">
                                <div class="dropdwon-manu">
                                    <ul>
                                        <li><a href="#">Магазин</a></li>
                                        <li><a href="#">Магазин</a></li>
                                        <li><a href="#">Магазин</a></li>
                                        <li><a href="#">Магазин</a></li>
                                    </ul>
                                </div>         
                            </li>
                            <li><a href="#">Членство</a></li>
                            <li><a href="#"> Ветеринар</a></li>
                            <li><a href="#"> Библиотека</a></li>
                            <li><a href="#"> За нас</a></li>
                            <li><button class="button ">Стани член</button></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
