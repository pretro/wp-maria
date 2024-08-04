<?php include('header.php'); ?>
<main>
    <div class="hero" style="background-color: <?php echo get_field('background'); ?>;">
        <div class="container">
            <div class="left">
                <img class="bild" src="<?php echo get_field('image')['url']; ?>" alt="logo2">
            </div>
            <div class="right">
                <div>
                    <?php echo get_field('content'); ?>
                </div>
                <?php if(get_field('newsletter')): ?>
                    <?php echo do_shortcode('[mc4wp_form id=501]'); ?>
                   <!--  <div class="newsletter">
                     <form action="#">
                        <input type="email" name="email" id="email"
                            placeholder="Din epostadress"/>
                            <button type="submit">Registrera</button>
                        </form>
                    </div> -->
            </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include('inc/logos.php');?>
    <?php include('inc/arbetsprover.php');?>
    <?php include('inc/testimonials.php');?>
    <?php include('inc/post.php');?>
</main>
<?php include('footer.php'); ?>