<?php get_header('secondary'); ?>


<div id="content">
<main>
    <!-- loop content -->
    <?php if(have_posts()) {
        while(have_posts()) : the_post();
    ?>
    <div class="container">
        <!-- page content -->
        <?php the_title('<h1>', '</h1>'); ?>
        <?php the_content(); ?>
    </div>
   <?php endwhile; } ?>
    
</main>

</div>

<?php get_footer();