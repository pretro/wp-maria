<?php include('header.php'); ?>
<div class="container">
    <div class="posts">
        <h1>Kategorier</h1>
        <?php
        wp_list_categories(array(
            'title_li' => '',
            'hide_empty' => 0,
        ));
        ?>
        <div class="posts-grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>"><h1 class="post-title"><?php the_title(); ?></h1></a>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
            <div class="nav-previous alignleft"><?php previous_posts_link( 'Newer posts' ); ?></div>
            <div class="nav-next alignright"><?php next_posts_link( 'Older posts' ); ?></div>
            <?php else: ?>
                <p>No posts found. 😢</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>