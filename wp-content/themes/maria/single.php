<?php include('header.php'); ?>
<main>
    <div class=" single container">
        <div class="singles">
        <?php
        $categorias = get_the_category();
        if ($categorias) {
            echo '<div class="post-categories">';
            foreach ($categorias as $categoria) {
                echo '<a href="' . esc_url(get_category_link($categoria->term_id)) . '" class="category_title">' . esc_html($categoria->name) . '</a>';
            }
            echo '</div>';
        }
        ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div>
        <p><?php the_time('F j, Y'); ?> · <?php the_author_posts_link(); ?></p>
        </div>
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <?php the_content(); ?>
    </div>
    </div>
</main>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>