<?php
$args = [
    'taxonomy' => 'worksampletype',
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
];
$terms = get_terms($args);
?>

<?php include('header.php'); ?>
<main>
    <h1>Arbetsprover</h1>
    <div class="worksamples">
        <?php foreach($terms as $term) : ?>
            <h3 id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></h3>
            <?php
            $args = [
                'post_type' => 'worksamples',
                'tax_query' => [
                    [
                        'taxonomy' => 'worksampletype',
                        'field' => 'slug',
                        'terms' => $term->slug
                    ]
                ]
            ];
            $posts = get_posts($args);
            ?>
            <ul class="worksamples-list">
                <?php foreach($posts as $post) : ?>
                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php echo $post->post_title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</main>
<?php include('footer.php'); ?>