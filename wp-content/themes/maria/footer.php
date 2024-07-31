<?php
$args = [
    'post_type' => 'footer',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$footers = get_posts($args);
?>
<footer>
    <div class="container">
        <div class="column1">
            <?php foreach ($footers as $footer) : ?>
                <img src="<?php echo get_field('image', $footer->ID); ?>" class="imagen" alt="<?php echo $footer->post_title; ?>">

                <p class="tel">Telefon</p>
                <p class="tele">+<?php echo  get_field('telefon', $footer->ID); ?></p>
                <p class="email">Epost</p>
                <p class="emejl"><?php echo get_field('email', $footer->ID); ?></p>
        </div>
        <div class="column2">
            <h2>Kategorier</h2>
            <ul class="lista">
                <?php
                wp_list_categories(array(
                    'title_li' => '',
                    'hide_empty' => 0,
                ));
                ?>
            </ul>
        </div>
        <div class="column3">
            <h2>Registrera</h2>
            <p><?php echo get_field('text', $footer->ID); ?></p>
            <div class="newsletter">
                <form id="newsletter-form">
                    <input type="email" name="email" id="email" placeholder="Din epostadress" />
                    <button type="submit">Registrera</button>
                </form>
            </div>
            <div id="response-message"></div>
            <button id="openModalButton">Registrera</button>
        </div>
    </div>
    </div>
<?php endforeach; ?>
</footer>

<!-- Modal HTML -->
<div id="myModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Regístrate para recibir nuestras novedades</h2>
        <form id="modal-newsletter-form" action="subscribe.php" method="post">
            <label for="modal-email">Email:</label>
            <input type="email" id="modal-email" name="email" required>
            <button type="submit">Suscribirse</button>
        </form>
        <div id="modal-response-message"></div>
    </div>
</div>

<div class="copyright">
    <div class="container">
        <p class="copyright">2024 mariahagstrom.se © Copyright </p>
    </div>
</div>
<script src="./script.js"></script>
</body>

</html>