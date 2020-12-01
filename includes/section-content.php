 <main>
        <div class="container">
            <!-- promo section -->
            <section class="promo-card">
                <div class="promo-card__content">
                    <a href="<?php the_field('promo_link'); ?>">
                        <?php $image = get_field('promo_background'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?> ">
                    </a>
                    <h3 class="promo-card__heading"><?php the_field('promo_heading'); ?></h3>
                    <p class="promo-card__body"><?php the_field('promo_text'); ?></p>
                </div>
                <div class="promo-card__content">
                    <?php $promo = get_field('promo_2'); ?>
                    <a href="<?php echo $promo['promo_link_2']; ?>">
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
                <!-- SHOP CONTENT -->
                </div>
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
                    <!-- SHOP CONTENT -->
                </div>
            </section>
            <section class="shop-section">
                <div class="shop-section__title">
                    <h3 class="shop-section__sub-heading">25% off when</h3>
                    <h2 class="shop-section__heading">Bundeled up</h2>
                    <!-- SHOP CONTENT -->
                </div>
            </section>
            <section class="blog-section">
                <div class="blog-section__title">
                    <h3 class="blog-section__sub-heading">The latest blogs</h3>
                    <h2 class="blog-section__heading">From the blog</h2>
                </div>
                <div class="blog-section__article">
                    <!-- BLOG CONTENT -->
                    <article class="blog-content">
                        <div class="blog-content__article-img">
                            <img src="/wp-content/themes/envy-copenhagen/assets/img/Blog_image_1_2x_1800x_79df387a-0188-4e66-8a9f-fe4f9c455041_1500x.png.jpg" alt="travel collection">
                        </div>
                        <h3 class="blog-content__heading">City guide : Santa barbara</h3>
                        <span class="blog-content__date indiv--date">January 05, 2019</span>
                        <div class="blog-content__excerpt">
                            <p class="blog-content__body">Sunsets on the beach. Eclectic cuisine on the streets. Salty
                                freshness in the
                                air…and a
                                community with a definitive
                                flair. Santa Barbara is coastal California’s...
                            </p>
                        </div>
                        <a href="#">Read more</a>
                    </article>
                </div>
            </section>
        </div>
    </main>