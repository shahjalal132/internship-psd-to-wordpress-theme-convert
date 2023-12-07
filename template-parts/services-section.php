<?php 
/**
 * Services Section
 */
?>

<!-- ========== Start Services section ========== -->
<section id="services" class="section-padding">

    <div class="services-section-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="services-heading">How it work</h2>
                    <h3 class="services-sub-heading">We Provide Service</h3>
                    <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor<br> incididunt ut labore et dolore accumsan lacus vel facilisis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="services-items">
        <div class="container p-0">
            <div class="row service-wrapper">

                <?php 
                    // Start the Loop
                    $services_item = new WP_Query([
                        'post_type' => 'service',
                        'posts_per_page' => -1
                    ]);

                    if ( $services_item->have_posts() ) :
                        while ( $services_item->have_posts() ) : $services_item->the_post();
                            ?>
                                <div class="service col-lg-4 col-md-4 col-sm-12 text-center">
                                    <?php the_post_thumbnail(); ?>
                                    <h3 class="service-title"><?php the_title(); ?></h3>
                                    <p class="service-summery"><?php the_content(); ?></p>
                                    <a href="#" class="service-btn">Read More</a>
                                </div>
                            <?php
                        endwhile;
                    endif;
                ?>

                <!-- <div class="service col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="images/service-icon.png" alt="service-icon" class="service-icon">
                    <h3 class="service-title">Clean Design</h3>
                    <p class="service-summery">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod te incididunt ut accumsan.</p>
                    <a href="#" class="service-btn">Read More</a>
                </div>
                
                <div class="service col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="images/service-icon.png" alt="service-icon" class="service-icon">
                    <h3 class="service-title">Clean Design</h3>
                    <p class="service-summery">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod te incididunt ut accumsan.</p>
                    <a href="#" class="service-btn">Read More</a>
                </div> -->

            </div>
        </div>
    </div>

</section>
<!-- ========== End Services section ========== -->