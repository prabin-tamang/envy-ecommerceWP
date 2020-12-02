
    <?php if(have_posts() ): while( have_posts() ): the_post(); ?>
    
   <div class="container">
       <!-- single blog post -->

        <?php if(has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php echo get_the_date(); ?>

        <?php
        $fname = get_the_author_meta('first_name'); 
        $lname = get_the_author_meta('last_name');
        ?>
       <p>Posted by :  <?php echo $fname; ?> <?php echo $lname; ?></p>
        <?php the_content(); ?>


         <?php 
          $tags = get_the_tags(); 
          foreach ($tags as $tag): ?>
           <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
          <?php endforeach; ?>


      <?php 
          $categories = get_the_category(); 
          foreach ($categories as $cat): ?>
           <a href="<?php echo get_category_link($cat->term_id); ?>"> <?php echo $cat->name; ?></a>
          <?php endforeach; ?>


          
          
    </div>
    
    <?php endwhile; else: endif; ?>