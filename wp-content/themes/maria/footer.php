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
            <img src="<?php echo get_field('image', $footer->ID); ?>" class="imagen"  alt="<?php echo $footer->post_title; ?>">

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
            <form action="#">
                <input type="email" name="email" id="email" placeholder="Din epostadress" />
                <button type="submit">Registrera</button>
            </form>
        </div>
    </div>
    </div>
        </div>
<?php endforeach; ?>
        
</footer>
<div class="copyright">
    <div class="container">
        <p class="copyright">2024 mariahagstrom.se © Copyright </p>
    </div>
</div>
