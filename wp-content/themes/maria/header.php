<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="container">
            <a href="<?php echo site_url(); ?>">
                <img class="picture" src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.svg'; ?>" alt="logo">
            </a>
            <nav class="main-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            <nav class="social-nav">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-facebook"></i>
            </nav>
        </div>
    </header>