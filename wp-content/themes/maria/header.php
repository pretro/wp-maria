<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="https://www.instagram.com/mamma_mammaria/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/maria-hagstr%C3%B6m-9b03b384/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.facebook.com/mariahags/" target="_blank"><i class="fab fa-facebook"></i></a>
            </nav>
            <!-- Contenedor para los iconos -->
            <div id="nav-toggle-container">
                <a href="#" id="nav-toggle"><i class="fas fa-bars"></i></a>
                <a href="#" id="nav-toggle-close" style="display: none;"><i class="fas fa-times"></i></a>
            </div>
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
            let navToggleClose = document.getElementById('nav-toggle-close');
            let mobileMenu = document.querySelector('.mobile-menu');
            let siteHeader = document.querySelector('.site-header');

            function toggleMenu() {
                siteHeader.classList.toggle('collapsed');
                mobileMenu.classList.toggle('active');
                if (mobileMenu.classList.contains('active')) {
                    navToggle.style.display = 'none';
                    navToggleClose.style.display = 'block';
                } else {
                    navToggle.style.display = 'block';
                    navToggleClose.style.display = 'none';
                }
            }

            navToggle.addEventListener('click', (event) => {
                event.preventDefault();
                toggleMenu();
            });

            navToggleClose.addEventListener('click', (event) => {
                event.preventDefault();
                toggleMenu();
            });
        });
    </script>
</body>