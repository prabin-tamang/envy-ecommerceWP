    <?php if(have_posts() ): while( have_posts() ): the_post(); ?>
    
    <div class="blog-post__content">
           <?php if(has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <h3> <?php the_title(); ?></h3>
          <?php echo get_the_date(); ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
    
    <?php endwhile; else: endif; ?>