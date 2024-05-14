<?php include('header.php'); ?>
<div class="posts container">
    <h1>Blogg</h1>
    <p>Introduktion till bloggen. Jag hag har alltid drivits av en stor nyfikenhet.
        Jag har också alltid älskat att skriva, berätta och leka med ord. Att få kombinera
        det och få en möjlighet att utforska och kliva in i rum som jag annars knappast hade
        haft tillgång till, och sedan förmedla vidare vad jag sett och hört, är ett drömjobb.</p>
    <div class="posts">
        <p class="categorie">Kategorier:</p>
        <div class="categories">
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'hide_empty' => 0,
            ));
            ?>
        </div>
    </div>
    <div class="posts-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="grid-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                    </a>
                    <p class="paragraf"><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
            <div class="nav-previous alignleft"><?php previous_posts_link('Newer posts'); ?></div>
            <div class="nav-next alignright"><?php next_posts_link('Older posts'); ?></div>
        <?php else : ?>
            <p>No posts found. 😢</p>
        <?php endif; ?>
    </div>
</div>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>