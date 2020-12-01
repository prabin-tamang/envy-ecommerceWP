<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Envy - Copenhagen</title> -->
    <!-- <link rel="stylesheet" href="css/styles.css" type="text/css"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- HEADER start -->
    <header class="header">
        <!-- HEADER notification bar -->
        <div class="header__notification-bar">
            <ul class="header__social">
                <li class="social-link">
                    <a href="#">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                            height="24px">
                            <path
                                d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h7.621v-6.961h-2.343v-2.725h2.343V9.309 c0-2.324,1.421-3.591,3.495-3.591c0.699-0.002,1.397,0.034,2.092,0.105v2.43h-1.428c-1.13,0-1.35,0.534-1.35,1.322v1.735h2.7 l-0.351,2.725h-2.365V21H19c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z" />
                        </svg>
                    </a>
                </li>
                <li class="social-link">
                    <a href=" #">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px"
                            height="24px">
                            <path
                                d="M 16.5 5 C 10.16639 5 5 10.16639 5 16.5 L 5 31.5 C 5 37.832757 10.166209 43 16.5 43 L 31.5 43 C 37.832938 43 43 37.832938 43 31.5 L 43 16.5 C 43 10.166209 37.832757 5 31.5 5 L 16.5 5 z M 16.5 8 L 31.5 8 C 36.211243 8 40 11.787791 40 16.5 L 40 31.5 C 40 36.211062 36.211062 40 31.5 40 L 16.5 40 C 11.787791 40 8 36.211243 8 31.5 L 8 16.5 C 8 11.78761 11.78761 8 16.5 8 z M 34 12 C 32.895 12 32 12.895 32 14 C 32 15.105 32.895 16 34 16 C 35.105 16 36 15.105 36 14 C 36 12.895 35.105 12 34 12 z M 24 14 C 18.495178 14 14 18.495178 14 24 C 14 29.504822 18.495178 34 24 34 C 29.504822 34 34 29.504822 34 24 C 34 18.495178 29.504822 14 24 14 z M 24 17 C 27.883178 17 31 20.116822 31 24 C 31 27.883178 27.883178 31 24 31 C 20.116822 31 17 27.883178 17 24 C 17 20.116822 20.116822 17 24 17 z" />
                        </svg>
                    </a>
                </li>
                <li class="social-link">
                    <a href=" #">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                            height="24px">
                            <path
                                d="M12,2C6,2,6,8,6,8v1c0,0-0.023-0.001-0.063-0.001C5.597,8.999,4,9.069,4,10.395C4,11.94,5.697,12,5.965,12 C5.988,12,6,12,6,12c0,1-1.652,2.171-2.736,2.442c-1.01,0.392-1.251,1.061-1.264,1.568c-0.008,0.303,0.066,0.548,0.106,0.643 c0.377,0.885,1.497,1.342,2.594,1.342C4.738,19.434,5.776,20,6.471,20c0.794,0,1.634-0.388,1.634-0.388C8.146,19.646,9.425,21,12,21 s3.854-1.354,3.896-1.388c0,0,0.839,0.388,1.634,0.388c0.695,0,1.732-0.566,1.77-2.005c1.097,0,2.217-0.457,2.594-1.342 c0.04-0.095,0.114-0.34,0.106-0.643c-0.013-0.507-0.254-1.176-1.264-1.568C19.652,14.171,18,13,18,12c0,0,0.012,0,0.035,0 C18.303,12,20,11.94,20,10.395c0-1.326-1.597-1.396-1.937-1.396C18.023,8.999,18,9,18,9V8C18,8,18,2,12,2L12,2z" />
                        </svg>
                    </a>
                </li>
            </ul>
            <p>Free delivery - today only! </p>
        </div>
        <!-- HEADER navigation -->
        <div class="header__wrapper">
            <div class="container">
                <div class="header__navigation">
                    <div class="header__menu">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
                        </svg>
                    </div>
                    <div class="header__logo">
                       <a href="#"><img src="/wp-content/themes/envy-copenhagen/assets/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="header__icons">
                        <ul class="tools">
                            <li class="tools__icon">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="tools__icon">
                                <a href="#">
                                    <svg height="24" viewBox="0 -31 512.00026 512" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0" />
                                        <path
                                            d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                                        <path
                                            d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- desktop visible navigation -->
                    <div class="header__main-nav">
                            <?php 
                                wp_nav_menu(array(
                                    'theme_location' => 'header_menu',
                                    'container' => 'nav',
                                    'container_class' => 'nav',
                                )
                            );
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- caraousel -->
        <div class="carousel">   
        <div class="slideshow-container">
            <div class="mySlides fade">
                <?php $image = get_field('background_image'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?> ">
                <div class="slideshow-container__content">
                    <h3><?php the_field('sub_heading'); ?></h3>
                    <h2><?php the_field('heading'); ?></h2>
                    <p><?php the_field('paragraph')?></p>
                    <a href="<?php the_field('call_to_action'); ?>" class="button button--dark">Shop Now</a>
                </div>
            </div>
            <div class="mySlides fade">
              <?php $image = get_field('hero_carousel_2');  ?> 
                 <img src="<?php echo $image['background_image_2']['url']; ?>" alt="<?php echo $image['background_image_2']['alt'];  ?> ">
                <div class="slideshow-container__content">
                    <h3><?php the_field('sub_heading_2')?></h3>
                    <h2><?php the_field('heading_2')?></h2>
                    <p><?php the_field('paragraph_2')?></p>
                    <a href="<?php the_field('call_to_action_2'); ?>" class="button button--dark">Shop Now</a>
                </div>
            </div>
        </div>
        <br>
        <div class="indicators">
            <span class="indicators__dot"></span>
            <span class="indicators__dot"></span>
        </div>
        </div>
    </header>
      <!-- HEADER end -->