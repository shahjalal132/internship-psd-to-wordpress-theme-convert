<?php
/**
 * Pricing Section Template
 */
?>

<!-- ========== Start Pricing Section ========== -->
<section id="pricing" class="section-padding">
    <div class="container">

        <div class="pricing-top">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="common-heading">pricing </h2>
                    <h3 class="common-sub-heading">Get in Reasonable Price</h3>
                    <p class="common-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore accumsan lacus vel facilisis. </p>
                </div>
            </div>
        </div>

        <!-- mixitup control -->
        <div class="pricing-tabs">
            <div>
                <div class="filter-controls pb-60">
                    <div class="d-flex justify-content-center">
                        <div class="controls-wrapper">
                            <button type="button" class="control-btn" data-filter=".monthly">Monthly</button>
                            <button type="button" class="control-btn" data-filter=".yearly">Yearly</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mixitup filter items -->
        <div class="pricing-packages">
            <div class="row mix-filter-wrapper">

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
                            $select_currency_symbol = get_post_meta( $post->ID, '_select_currency', true );
                            $select_price_plan = get_post_meta( $post->ID, '_select_price_plan', true );
                            $amount = get_post_meta( $post->ID, '_amount', true );
                            $service1 = get_post_meta( $post->ID, '_service1', true );
                            $service2 = get_post_meta( $post->ID, '_service2', true );
                            $service3 = get_post_meta( $post->ID, '_service3', true );
                            $service4 = get_post_meta( $post->ID, '_service4', true );
                            $service5 = get_post_meta( $post->ID, '_service5', true );
                            $service6 = get_post_meta( $post->ID, '_service6', true );
                                ?>
                                     <div class="mix <?php echo $select_price_plan; ?> col-lg-4 col-md-6 col-sm-12">
                                        <div class="pricing-package-card <?php echo $select_price_plan; ?>">
                                            <h6><?php echo $price_plan; ?></h6>

                                            <h3>
                                                <sup class="currency-symbol">
                                                    <?php echo $select_currency_symbol; ?>
                                                </sup>
                                                <span class="price"><?php echo $amount; ?></span>
                                                <span class="package-time">/<?php echo get_monthly_yearly_plan($select_price_plan); ?>
                                                </span>
                                            </h3>

                                            <ul class="package-service">
                                                <li class="common-description"><?php echo $service1; ?></li>
                                                <li class="common-description"> <?php echo $service2; ?></li>
                                                <li class="common-description"> <?php echo $service3; ?></li>
                                                <li class="common-description"> <?php echo $service4; ?></li>
                                                <li class="common-description"> <?php echo $service5; ?></li>
                                                <li class="common-description"> <?php echo $service6; ?></li>
                                            </ul>
                                            <a href="#" class="buy-now-btn">Buy Now</a>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                   ?>

                <!-- <div class="mix yearly col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-package-card monthly">
                        <h6>Starter plan</h6>
                        <h3><sup>$</sup><span class="price">1200</span><span class="package-time">/y</span></h3>
                        <ul class="package-service">
                            <li class="common-description">Connect 2 Redius Servers</li>
                            <li class="common-description"> key batching editing</li>
                            <li class="common-description"> real time & automatic editor</li>
                            <li class="common-description"> real time monitoring</li>
                            <li class="common-description"> unlimited altering</li>
                            <li class="common-description"> 30 days trial no engagment</li>
                        </ul>
                        <a href="#" class="buy-now-btn">Buy Now</a>
                    </div>
                </div>

                <div class="mix monthly col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-package-card monthly">
                        <h6>Starter plan</h6>
                        <h3><sup>$</sup><span class="price">1200</span><span class="package-time">/y</span></h3>
                        <ul class="package-service">
                            <li class="common-description">Connect 2 Redius Servers</li>
                            <li class="common-description"> key batching editing</li>
                            <li class="common-description"> real time & automatic editor</li>
                            <li class="common-description"> real time monitoring</li>
                            <li class="common-description"> unlimited altering</li>
                            <li class="common-description"> 30 days trial no engagment</li>
                        </ul>
                        <a href="#" class="buy-now-btn">Buy Now</a>
                    </div>
                </div> -->

            </div>
        </div>

    </div>
</section>
<!-- ========== End Pricing Section ========== -->