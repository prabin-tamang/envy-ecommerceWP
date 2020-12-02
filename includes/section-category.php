    <!-- loop content -->
    <?php if(have_posts()) {
        while(have_posts()) : the_post();
    ?>
 
        <!-- page content -->
        <h3> <?php the_title(); ?></h3>
        <?php the_content(); ?>
  
   <?php endwhile; } ?>