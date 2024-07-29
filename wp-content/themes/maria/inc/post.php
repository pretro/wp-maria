<?php
$featured_posts = get_field('featured_posts');
?>
<div class="posts container">
    <h1>Utvalda inlägg</h1>
    <div class="posts-grid">
        <?php foreach ($featured_posts as $post) :
            $post_image = get_the_post_thumbnail_url($post, 'featured_thumbnail');
        ?>
            <div class="grid-item">
                <div class="texter">
                    <?php if ($post_image) : ?>
                        <img src="<?php echo $post_image; ?>" alt="<?php echo $post->post_title; ?>">

                    <?php endif; ?>
                    <h3 class="text_tag">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            foreach ( $categories as $category ) {
                                echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) 
                                . '" class="mi-clase-css">' . esc_html( $category->name ) . '</a> ';
                            }
                        }
                        ?>
                    </h3>
                    <h2><?php echo $post->post_title; ?></h2>
                    <p class="paragraf"><?php the_excerpt(); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="http://localhost:3000/blogg/">
        <button class="post_btn">Se alla inlägg</button>
    </a>
</div>