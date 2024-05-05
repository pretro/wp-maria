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
        <?php foreach ($testimonials as $testimonial) : ?>
            <div class="card">
                <div class="texter">
                    <p class="paragraph">
                        <?php echo get_field('paragraph', $testimonial->ID) ?>
                    </p>
                    <p class="title">
                        <?php echo get_field('title', $testimonial->ID) ?>
                    </p>
                </div>
                <img src="<?php echo get_field('image', $testimonial->ID); ?>" alt="<?php echo $testimonial->post_title; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>