<?php get_header('secondary'); ?>

<!-- view all blog posts page -->

<div id="blog-content">
    <h1>News</h1>
    <div class="container"> 
          
<main>
<!-- blog post contents -->
<div class="blog-post">     
<?php get_template_part('includes/section', 'blog'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
</main>

<aside>
    <?php if( is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>
</aside>
</div>
    </div>
</div>

<?php get_footer();