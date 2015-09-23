<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sidplan
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php //header('Content-type: text/html; charset=ISO-8859-1'); ?>
        <meta name="theme-color" content="#001a39">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header>
                <div class="conteudo-pagina">
                    <?php if (is_front_page()) { ?>
                        <h1>www.sidplan.com.br</h1>
                    <?php } ?>
                    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(home_url('/')); ?>/wp-content/themes/sidplan/images/logo.png" alt="Sidplan"></a>
                    <button class="toggle-nav btn-nav"></button>
                    <nav>
                        <?php wp_nav_menu(array('theme_location' => 'cabecalho', 'menu_id' => 'cabecalho-menu')); ?>
                    </nav>
                </div>
            </header>
            <nav class="responsive-nav">
                <button class="toggle-nav btn-close"><span>x</span></button>
                <?php wp_nav_menu(array('theme_location' => 'cabecalho', 'menu_id' => 'cabecalho-menu')); ?>
            </nav>

            <div id="content">
