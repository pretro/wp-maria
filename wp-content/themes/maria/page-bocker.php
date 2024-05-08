<?php include('header.php'); ?>
<?php
$args = [
    'post_type' => 'book',
    'numberposts' => -1,
    'post_status' => 'publish',
    'order' => 'ASC',
];
$books = get_posts($args);
?>
<div class="bocker container">
    <div class="title">
        <h1>Böcker</h1>
    </div>
    <?php foreach ($books as $book) : ?>
        <div class="bocker-grid">
            <div class="left">
                <img src="<?php echo get_field('image', $book->ID); ?>" class="" alt="<?php echo $book->post_title; ?>">
            </div>
            <div class="right">
                <p><?php $reviews = get_field('reviews', $book->ID); ?></p>
                <?php foreach ($reviews as $review) : ?>
                    <p class="rubrik"><?php echo $review['titulo'] ?></p>
                    <p class="review"><?php echo wpautop($review['review']) ?></p>
                    <p class="links"><?php echo  $review['link'] ?></p>
                    <img src="<?php echo $review['logo'] ?>">
                    <p class="paragr"><?php echo  $review['texto'] ?></p>
                    <p class="rubrik"><?php echo  $review['texts'] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>