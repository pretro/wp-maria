<?php include('header.php'); ?>
<?php
$args = [
    'post_type' => 'about',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$histories = get_posts($args);
?>

<div class="histories container">
    <?php foreach ($histories as $history) : ?>
        <div class="histories-grid">
            <div class="left">
                <p><?php $histories = get_field('about', $history->ID); ?></p>
                <?php foreach ($histories as $history) : ?>
                    <p class="rubrik"><?php echo $history['title'] ?></p>
                    <p class="paragraf"><?php echo $history['paragraf'] ?></p>
                    <p class="rubrik"><?php echo  $history['text'] ?></p>
                    <p class="paragraf"><?php echo  $history['utstallningar'] ?></p>
                <?php endforeach; ?>
            </div>
            <div class="right">
                <div class="maria-img">
                <img class="image" src="<?php echo $history['image'] ?>">
                </div>
                <p class="rubrik"><?php echo  $history['texts'] ?></p>
                <p class="paragraf"><?php echo  $history['priser'] ?></p>
            </div>
            <div>
            </div>
    <?php endforeach; ?>
        </div>
</div>
        <?php include('inc/logos.php'); ?>
        <?php include('inc/testimonials.php'); ?>
        <?php include('footer.php'); ?>