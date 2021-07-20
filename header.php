<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- FONT STYLES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,800;1,100;1,400;1,800&display=swap" rel="stylesheet">
    <!-- STYLES -->
    <?php wp_head(); ?>
    <!-- SEO -->
    <meta name="description" content="Wordpress blog template">
    <meta name="keywords" content="Blog Website Template Wordpress">
    <meta name="author" content="Doctor Draxter">
    <title>FBT Website</title>
</head>
<body <?php body_class() ?>>
    <!-- NAVEGATION -->
    <nav class="nav">
        <h1>
            <a class="logo_website" href="<?php echo esc_url(home_url('/')); ?>">FBT Website</a>
        </h1>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'container_class'   => 'nav_items',
            ) );
            ?>
        <!-- <ul class="nav_items">
            <li class="nav_item"><a href="index.php">Home</a></li>
            <li class="nav_item"><a href="#">Articles</a></li>
            <li class="nav_item"><a href="#">Contact</a></li>
        </ul> -->
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <!-- NAVEGATION -->