<?php get_header('secondary'); ?>

<main>
    <?php if(have_posts()) {
        while(have_posts()) : the_post();

    ?>

    <div class="container">

     <?php the_title(); ?>
    <?php the_content(); ?>

    </div>

    
   <?php endwhile; } ?>
    
</main>

<?php get_footer();