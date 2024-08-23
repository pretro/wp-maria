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
            <h1 class="post-title-header"><?php the_title(); ?></h1>
            <div>
                <p class="time-date">
                    <span class="date"><?php the_time('F j, Y'); ?></span> 
                    <span class="separator">·</span> 
                    <span class="author">
                        <?php
                        $author_id = $post->post_author;
                        $user = get_user_by('id', $author_id);
                        ?>
                        <?php echo $user->display_name; ?>
                    </span>
                </p>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail-singles">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            <div class="content-paragraf">
            <?php the_content(); ?>
             <!-- Mostrar los campos personalizados -->
             
                <?php 
                // Mostrar imagen (bild)
                if (get_field('bild')) {
                    $bild = get_field('bild');
                    echo '<div class="post-thumbnail-singles"><img src="' . esc_url($bild['url']) . 
                    '" alt="' . esc_attr($bild['alt']) . '"></div>';
                }

                // Mostrar párrafo adicional
                if (get_field('paragraf')) {
                    echo '<div class="blogg-paragraf"><p>' . esc_html(get_field('paragraf')) . '</p></div>';
                }
                
                ?>
            </div>
        </div>
    </div>
</main>
<?php include('inc/logos.php'); ?>
<?php include('footer.php'); ?>