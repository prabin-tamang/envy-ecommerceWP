<?php get_header('secondary'); ?>

<!-- view all blog posts page -->

<div id="content">
    <div class="container">   
<main>
<!-- blog post contents -->
<div class="blog-post">     
<h1>News</h1>
<?php get_template_part('includes/section', 'blog'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
</main>
</div>
    </div>
</div>

<?php get_footer();