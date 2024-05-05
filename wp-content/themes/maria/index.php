<?php
$args = [
    'post_type' => 'blogg',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$bloggs = get_posts($args);
?>
<?php include('header.php'); ?>
<div class="testimonial">
    <div class="container">
        <p>Kategorier</p>
        <?php foreach($bloggs as $blogg): ?>
            <?php echo get_field('text', $blogg->ID) ?>
            <?php endforeach; ?>
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'hide_empty' => 0,
            ));
            ?>
    </div>
</div>
 <?php include('footer.php'); ?>