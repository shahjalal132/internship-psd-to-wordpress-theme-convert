<?php 
/**
 * Pricing section
 */
?>

<!-- ========== Start pricing section ========== -->
<section id="pricing-section" class="section-padding">
    <div class="container">

        <div class="pricing-section-top">
            <div class="col-sm-12 text-center">
                <h2 class="services-heading">pricing </h2>
                <h3 class="services-sub-heading">Get in Reasonable Price</h3>
                <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor<br> incididunt ut labore et dolore accumsan lacus vel facilisis.</p>
                <div class="subscription">
                    <a href="#" class="monthly">Monthly</a>
                    <a href="#" class="yearly">Yearly</a>
                </div>
            </div>
        </div>

        <div class="pricing-items">
            <div class="container p-0">
                <div class="row service-wrapper">

                   <?php 
                        // Start the loop.
                        $priceInfoFromPricePostType = new WP_Query([
                            'post_type' => 'pricing',
                            'posts_per_page' => -1
                        ]);

                        if ( $priceInfoFromPricePostType->have_posts() ) :
                            while ( $priceInfoFromPricePostType->have_posts() ) : $priceInfoFromPricePostType->the_post();

                            // get meta box value
                            $price_plan = get_post_meta( $post->ID, '_price_plan', true );
                            $amount = get_post_meta( $post->ID, '_amount', true );
                            $service1 = get_post_meta( $post->ID, '_service1', true );
                            $service2 = get_post_meta( $post->ID, '_service2', true );
                            $service3 = get_post_meta( $post->ID, '_service3', true );
                            $service4 = get_post_meta( $post->ID, '_service4', true );
                            $service5 = get_post_meta( $post->ID, '_service5', true );
                            $service6 = get_post_meta( $post->ID, '_service6', true );
                                ?>
                                    <div class="service col-lg-4 col-md-4 col-sm-12 text-center">
                                        <h4 class="pricing-title"><?php the_title(); ?></h4>
                                        <h3 class="price"><sup>$</sup><span class="price-amount"><?php echo $amount; ?></span>/m</h3>
                                        <p class="price-text"><?php echo $service1; ?></p>
                                        <p class="price-text"><?php echo $service2; ?></p>
                                        <p class="price-text"><?php echo $service3; ?></p>
                                        <p class="price-text"><?php echo $service4; ?></p>
                                        <p class="price-text"><?php echo $service5; ?></p>
                                        <p class="price-text"><?php echo $service6; ?></p>
                                        <a href="#" class="service-btn">Buy Now</a>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                   ?>
                    
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ========== End pricing section ========== -->