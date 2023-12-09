<?php 
/**
 * Services Section Demo
 */
?>

    <!-- ========== Start Services Section ========== -->
    <section id="services" class="section-padding">
        <div class="container">

            <div class="services-top">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="common-heading">how it work</h2>
                        <h3 class="common-sub-heading">We Provide Service</h3>
                        <p class="common-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore accumsan lacus vel facilisis. </p>
                    </div>
                </div>
            </div>

            <div class="services-bottom">
                <div class="row">

                    <?php 
                        // Start the Loop
                        $services_item = new WP_Query([
                            'post_type' => 'service',
                            'posts_per_page' => -1
                        ]);

                        if ( $services_item->have_posts() ) :
                            while ( $services_item->have_posts() ) : $services_item->the_post();
                                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item">
                                            <div class="service-icon">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="service-content">
                                                <h4 class="service-item-heading"><?php the_title(); ?></h4>
                                                <p class="service-item-description common-description"><?php the_content(); ?></p>
                                                <a href="#" class="service-read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item">
                            <div class="service-icon">
                                <img class="si-icon" src="images/icon1.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="service-item-heading">clean design</h4>
                                <p class="service-item-description common-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod te incididunt ut
                                    accumsan. </p>
                                <a href="#" class="service-read-more">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item">
                            <div class="service-icon">
                                <img class="si-icon" src="images/icon1.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="service-item-heading">clean design</h4>
                                <p class="service-item-description common-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod te incididunt ut
                                    accumsan. </p>
                                <a href="#" class="service-read-more">read more</a>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Services Section ========== -->