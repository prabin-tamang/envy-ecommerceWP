<?php get_header('secondary'); ?>

<!-- view all blog posts page -->

<div id="blog-content">
    <div class="container">   
<main>
<!-- blog post contents -->  
<?php get_template_part('includes/section', 'blogpost'); ?>
</main>

<aside>
    <?php if( is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>
</aside>
</div>
    </div>


<?php get_footer();