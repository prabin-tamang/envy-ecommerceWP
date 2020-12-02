<!-- loop content -->
    <?php if(have_posts()) {
        while(have_posts()) : the_post();
    ?>
    <div class="container">
        <!-- page content -->
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
   <?php endwhile; } ?>