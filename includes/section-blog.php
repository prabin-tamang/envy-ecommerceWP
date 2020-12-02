    <?php if(have_posts() ): while( have_posts() ): the_post(); ?>
    
    <div class="blog-post__content">
           <?php if(has_post_thumbnail()) : ?>
           <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
        <?php endif; ?>

        <h3 class="blog-post__title"> <?php the_title(); ?></h3>
        <span class="blog-post__date indiv--date"><?php echo get_the_date(); ?> </span>
        <p class="blog-post__body"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
    
    <?php endwhile; else: endif; ?>