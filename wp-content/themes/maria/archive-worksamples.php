<?php
$args = [
    'taxonomy' => 'worksampletype',
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC',
];
$terms = get_terms($args);
?>

<?php include('header.php'); ?>
<main>
    <div class="worksamples container">
    <h1>Arbetsprover</h1>
        <?php foreach($terms as $term) : ?>
            <h3 id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></h3>
            <?php
            $args = [
                'post_type' => 'worksamples',
                'numberposts' => -1,
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
      <ul class="worksamples-lista∑">
    <?php foreach($posts as $post) : ?>
        <?php
        $type = get_field('type', $post->ID); // Obtener el tipo de enlace
        $href = get_permalink($post->ID); // Obtener la URL del enlace

        // Si el tipo es PDF, obtener el enlace al PDF
        if($type == 'pdf') {
            $pdf_url = get_field( 'pdf', $post->ID); // Obtener la URL del PDF
            $href = $pdf_url; // Establecer la URL del enlace como la URL del PDF
        } elseif($type == 'link') {
            $link_url = get_field( 'link', $post->ID); // Obtener la URL del enlace
            $href = $link_url; // Establecer la URL del enlace como la URL del link
        }
        ?>
        <li>
            <a href="<?php echo $href; ?>" <?php if($type == 'pdf') echo 'target="_blank"'; ?>>
                <?php echo $post->post_title; ?>
                <?php if( $type ==  'link'): ?>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <?php elseif( $type ==  'pdf'): ?>
                    <i class="fa-regular fa-file-pdf"></i>
                <?php endif; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
        <?php endforeach; ?>
    </div>
</main>
<?php include('inc/logos.php');?>
<?php include('footer.php'); ?>