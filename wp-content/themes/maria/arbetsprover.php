<?php
$types = get_terms( array(
    'taxonomy'   => 'worksampletype',
    'hide_empty' => false,
) );
?>
<div class="worksampletypes">
    <div class="container">
    <?php foreach($types as $type): ?>
        <a href="<?php echo get_home_url().'/arbetsprover/'; ?>#<?php echo $type->slug ?>" class="worksampletype">
            <img src="<?php echo get_field('image', $type); ?>" alt="">
            <h3><?php echo $type->name; ?></h3>
            <p><?php echo $type->description; ?></p>
        </a>
    <?php endforeach; ?>
    </div>
</div>