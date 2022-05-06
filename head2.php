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
		<?php wp_head2(); ?>
	</head>

	<body <?php body_class(); ?>>

    <header class="head-wrapper">
        <div class="container">
            <div class="head-top">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/logo.svg' ?>"  alt="<?php bloginfo('name'); ?>">       
                    </a>
                </div>
                <div class="menu-wepeer">
                    <ul class="d-flex">
                        <li><a href="#">Профил</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Любимец</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Месечна кутия</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Доставка и начин на плащане</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- navmanu -->
    </header>
