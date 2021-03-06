<main>
    <div class="container">
        <!-- promo section -->
        <section class="promo-card">
            <div class="promo-card__content">
                <a href="<?php echo get_term_link(25); ?>">
                <?php $image = get_field('promo_background'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?> ">
                </a>
                <h3 class="promo-card__heading"><?php the_field('promo_heading'); ?></h3>
                <p class="promo-card__body"><?php the_field('promo_text'); ?></p>
            </div>
            <div class="promo-card__content">
                <?php $promo = get_field('promo_2'); ?>
                <a href="<?php echo get_term_link(23); ?>">
                <img src="<?php echo $promo['promo_background_2']['url']; ?>" alt="<?php echo $promo['promo_background_2']['alt'];  ?> ">
                </a>
                <h3 class="promo-card__heading"><?php echo $promo['promo_heading_2']; ?></h3>
                <p class="promo-card__body"><?php echo $promo['promo_text_2']; ?></p>
            </div>
        </section>
        <!-- shop section -->
        <section class="shop-section">
            <div class="shop-section__title">
                <h3 class="shop-section__sub-heading">Editor's Pick</h3>
                <h2 class="shop-section__heading">Our new Favourites</h2>
            </div>
            <!-- SHOP PRODUCTS -->
            <?php echo do_shortcode('[products category="new favourite" columns="3" limit="3"]'); ?>
        </section>
        <section class="subscription-section">
            <div class="full-width">
                <?php $image = get_field('subscription_background'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <div class="subscription-section__title">
                <h3 class="subscription-section__sub-heading"><?php the_field('subscription_sub_heading'); ?></h3>
                <h2 class="subscription-section__heading"><?php the_field('subscription_heading');  ?></h2>
                <p class="subscription-section__body"><?php the_field('subscription_paragraph'); ?></p>
                <a href="<?php the_field('subscription_learn_more'); ?>" class="button button--dark">Learn More</a>
            </div>
        </section>
        <section class="shop-section">
            <div class="shop-section__title">
                <h3 class="shop-section__sub-heading">The essentials</h3>
                <h2 class="shop-section__heading">Seasonal must-haves</h2>
            </div>
            <!-- SHOP PRODUCTS -->
            <?php echo do_shortcode('[products category="must have" columns="3" limit="3"]'); ?>
        </section>
        <section class="shop-section">
            <div class="shop-section__title">
                <h3 class="shop-section__sub-heading">25% off when</h3>
                <h2 class="shop-section__heading">Bundeled up</h2>
            </div>
            <!-- SHOP PRODUCTS -->
            <?php echo do_shortcode('[products category="bundle" limit="3"]'); ?>
            <!-- <p>Combine our 2 best selling products for an amazing 25% off. Simply add them to cart to claim your discount.</p> -->
        </section>
        <section class="blog-section">
            <div class="blog-section__title">
                <h3 class="blog-section__sub-heading">The latest blogs</h3>
                <h2 class="blog-section__heading">From the blog</h2>
            </div>
            <div class="blog-section__article">
                <!-- BLOG CONTENT -->
                <?php 
                    $the_query = new WP_Query( 'posts_per_page=3' ); ?>   
                <?php 
                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                    ?>
                <article class="blog-content">
                    <div class="blog-content__article-img">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                    </div>
                    <h3 class="blog-content__heading"><?php the_title(); ?></h3>
                    <span class="blog-content__date indiv--date"><?php the_date(); ?></span>
                    <div class="blog-content__excerpt">
                        <p class="blog-content__body">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </article>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </section>
    </div>
</main>