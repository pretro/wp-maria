<?php
$featured_posts = get_field('featured_posts');
?>
<div class="posts container">
    <h1>Utvalda inlägg</h1>
    <div class="posts-grid">
    <?php foreach($featured_posts as $post):
        $post_image = get_the_post_thumbnail_url($post, 'featured_thumbnail');
        ?>
        <div class="grid-item">
            <div class="texter">
            <?php if($post_image): ?>
                <img src="<?php echo $post_image; ?>" alt="<?php echo $post->post_title; ?>">
            <?php endif; ?>
            <h3 class="text_tag">Aktuellt</h3>
            <h2><?php echo $post->post_title; ?></h2>
            <p><?php echo $post->post_content; ?></p>
            </div> 
        </div>
    <?php endforeach; ?>
    </div>
    <button class="post_btn">Se alla inlägg</button>
</div>


