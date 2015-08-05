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
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <nav>
                        <?php wp_nav_menu(array('theme_location' => 'cabecalho', 'menu_id' => 'cabecalho-menu')); ?>
                    </nav>
                </div>
            </header>

            <div id="content">
