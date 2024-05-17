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
    <header class="site-header collapsed">
    <div class="container">
        <!-- Logo y enlaces principales -->
        <a href="<?php echo site_url(); ?>">
            <img class="picture" src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.svg'; ?>" alt="logo">
        </a>
        <nav class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
        <!-- Redes sociales -->
        <nav class="social-nav">
            <a href="https://www.instagram.com/mamma_mammaria/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/maria-hagstr%C3%B6m-9b03b384/" target="_blank"><i class="fa-brands fa-linkedin"></i>
            <a href="https://www.facebook.com/mariahags/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </nav>
        <!-- Botón para abrir el menú hamburguesa -->
        <a href="#" id="nav-toggle"><i class="fa-solid fa-bars"></i></a> 
        <a href="#" id="nav-toggle-close" style="display: none;"><i class="fa-solid fa-x"></i></a>
       
    </div>
</header>

<!-- Menú lateral (hamburguesa) -->
<div class="mobile-menu">
    <!-- Contenido del menú -->
    <nav class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
</div>

<!-- Script para controlar el menú hamburguesa -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let navToggle = document.getElementById('nav-toggle');
        let mobileMenu = document.querySelector('.mobile-menu');

        navToggle.addEventListener('click', (event) => {
            event.preventDefault();
            document.querySelector('.site-header').classList.toggle('collapsed');
            mobileMenu.classList.toggle('active');
        });
    });
</script>