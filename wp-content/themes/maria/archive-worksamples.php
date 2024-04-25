<?php
$args = [
    'taxonomy' => 'worksampletype',
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
];
$terms = get_terms($args);
$worksamples_by_type = [];
foreach($terms as $term) {
    $args = [
        'post_type' => 'worksamples',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'worksampletype',
                'field' => 'slug',
                'terms' => $term->slug
            ]
        ]
    ];
    $worksamples_by_type[$term->name] = get_posts($args);
}
?>

<?php include('header.php'); ?>
<main>
    <h1>Arbetsprover</h1>
    <div class="worksamples">
        <?php foreach($worksamples_by_type as $type => $worksamples) : ?>
            <h2><?php echo $type; ?></h2>
            <ul class="worksamples-list">
                <?php foreach($worksamples as $worksample) : ?>
                    <li>
                        <a href="<?php echo get_permalink($worksample->ID); ?>">
                            <?php echo $worksample->post_title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</main>
<?php include('footer.php'); ?>