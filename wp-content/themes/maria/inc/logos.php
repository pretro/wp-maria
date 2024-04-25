<?php
$args = [
    'post_type' => 'customer',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$logos = get_posts($args);
?>
<div class="logos">
    <div class="container">
    <?php foreach($logos as $logo): ?>
        <div class="logo">
            <?php if(get_field('link', $logo->ID)): ?>
                <a href="<?php echo get_field('link', $logo->ID); ?>">
                    <img src="<?php echo get_field('image', $logo->ID); ?>" alt="<?php echo $logo->post_title; ?>">
                </a>
            <?php else: ?>
                <img src="<?php echo get_field('image', $logo->ID); ?>" alt="<?php echo $logo->post_title; ?>">
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>