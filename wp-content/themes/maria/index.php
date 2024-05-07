<?php
$args = [
    'post_type' => 'blogg',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$posts = get_post($args);
?>
<?php include('header.php'); ?>
<div class="posts">
    <div class="posts-grid">
        <h1>Kategorier</h1>
       

            <?php
            wp_list_categories(array(
                'title_li' => '',
                'hide_empty' => 0,
            ));
            ?>
    </div>
</div>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>