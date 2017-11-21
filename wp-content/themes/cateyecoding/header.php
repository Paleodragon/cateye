<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
        

        <title><?php bloginfo('name') ?></title>
        <?php wp_head(); ?>
    </head>

<!-- site-header -->
<header class="site-header">
    <h1><div class="site-logo"><a href="<?php echo home_url(); ?>"><img src="http://wordpress.nextspecs.com/cateyecoding/wp-content/uploads/2017/11/logo.png" /></a></div></h1>
    <h5><div class="tagline"><?php bloginfo('description'); ?></div></h5>
    <?php
    $args = array(
            'theme_location' => 'primary'
        ); ?>
    <nav class="site-nav">
        <?php wp_nav_menu(  $args ); ?>
    </nav>

    </header><!-- /site-header -->
<div class="container">
    <body <?php body_class(); ?>>

