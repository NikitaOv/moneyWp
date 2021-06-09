<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <?php
        wp_head();
    ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="header__inner">

                <a href="<?php echo get_option('home'); ?>/">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/logo.svg" alt="logo" class="logo">
                </a>
                <?php
                        wp_nav_menu( [
                            'menu'            => 'Main', 
                            'container'       => false, 
                            'menu_class'      => 'header__links', 
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="header__links">%3$s</ul>',
                            'depth'           => 1
                        ] );
                    ?>
                <a href="<?php echo get_home_url( null, 'cart/');?>">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/cart.svg" alt="cart" class="cart-icon">
                </a>

                <button class="gamburger">
                    <div class="gamburger__stick"></div>
                    <div class="gamburger__stick"></div>
                    <div class="gamburger__stick"></div>
                </button>

            </nav>
        </div>
    </header>