<?php 
/*  
Template Name: Search Page
*/
 get_header('secondary');
?>


<?php 
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    }

    $the_query = new WP_Query($search_query);
    if($the_query->have_posts() ) : ?>


<div class="container search__results">     
    <h1>Search Results...</h1>
    <main id="search-content">   
<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?> 
            
            <div class="blog-post__content">
           <?php if(has_post_thumbnail()) : ?>
           <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
        <?php endif; ?>

        <h3 class="blog-post__title"> <?php the_title(); ?></h3>
        <span class="blog-post__date indiv--date"><?php echo get_the_date(); ?> </span>
        <p class="blog-post__body"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>

 

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
        </main>
        <div class="container">
                <main>
                     <h1><?php _e('Sorry, no post matched your criteria'); ?></h1> 
                </main>
        </div>
       
    <?php endif; ?>
</div>
<?php get_footer(); ?>