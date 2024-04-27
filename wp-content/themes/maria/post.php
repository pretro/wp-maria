<?php
$args = [
    'post_type' => 'blogg',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$featured_posts = get_posts($args);
?>
<div class="inlagg">
    <div class="container">
    <h1>Utvalda inlägg</h1>
    <?php foreach($featured_posts as $featured_post): 
        ?>
        <div class="post">
            <div class="texter">
            <img src="<?php echo get_field('image', $featured_post->ID); ?>" alt="<?php echo $featured_post->post_title; ?>">
            <?php echo get_field('title', $featured_post->ID)?>
            <?php echo get_field('inlagg', $featured_post->ID)?>
            </div> 
        </div>
    <?php endforeach; ?>
    <button>Se alla inlägg</button>
    </div>
</div>