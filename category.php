<?php get_header('secondary'); ?>


<div id="content">
<main>
      <div class="container">
    <h1><?php echo single_cat_title(); ?></h1>
    <?php get_template_part('includes/section', 'category'); ?>
</main>
  </div>
</div>

<?php get_footer();