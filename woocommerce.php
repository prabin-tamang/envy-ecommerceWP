<?php get_header('secondary'); ?>

<main>
    <div class="container">  
         <!--breadcrumbs  -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('
                <p id="breadcrumbs">','</p>');
            }
        ?>
<!-- wocommerce shop -->
    <?php woocommerce_content(); ?>
     </div>
</main>

<?php get_footer(); 