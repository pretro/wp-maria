<?php
$args = [
    'post_type' => 'testimonial',
    'numberposts' => -1,
    'post_status' => 'publish',
];
$testimonials = get_posts($args);
?>
<div class="testimonial">
    <div class="container">
    <?php foreach($testimonials as $testimonial): ?>
        <div class="card">
            <div class="texter">
            <?php echo get_field('paragraph', $testimonial->ID)?>
            <?php echo get_field('rubrik', $testimonial->ID)?>
            </div>
            <img src="<?php echo get_field('image', $testimonial->ID); ?>" alt="<?php echo $testimonial->post_title; ?>">
        
        </div>
    <?php endforeach; ?>
    </div>
</div>