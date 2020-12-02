
    <?php if(have_posts() ): while( have_posts() ): the_post(); ?>
    

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

        <!-- posted by and content -->
        <p>Posted by :  <?php echo $fname; ?> <?php echo $lname; ?></p>
        <?php the_content(); ?>


        <!-- blog tags  -->

         <?php 
          $tags = get_the_tags(); 
          if($tags) :
          foreach ($tags as $tag): ?>
         <div class="tags">
            <strong>Tags: </strong> <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
         </div>
          <?php endforeach; endif; ?>

      <!-- blog categories -->

      <?php 
          $categories = get_the_category(); 
          if($categories) : 
          foreach ($categories as $cat): ?>
          <div class="categories">  
              <strong>Categories: </strong><a href="<?php echo get_category_link($cat->term_id); ?>"> <?php echo $cat->name; ?></a>
          </div>
           
          <?php endforeach; endif; ?>


          <!-- next and previous page links -->
              <ul class="nav-posts">
            
                <?php if (strlen(get_previous_post()->post_title) > 0) { ?>
                   <li class="prev-link button button--dark"><?php previous_post_link( '%link', 'Previous Post' ); ?></li>
               <?php } ?>

               <?php if (strlen(get_next_post()->post_title) > 0) { ?>
                   <li class="next-link button button--dark"><?php next_post_link( '%link', 'Next Post' ); ?></li>
               <?php } ?>
            </ul>
       
         
          

  
    
    <?php endwhile; else: endif; ?>