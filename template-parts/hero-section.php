<?php
/**
 * Hero Section Template
 */
?>

<!-- ========== Start Hero Section ========== -->
<section id="hero-section">
    <div class="container">
        <div class="slider container">

            <?php 
                // display Slider post type
                $sliders = new WP_Query([
                    'post_type' => 'slider-post-type',
                    'posts_per_page' => -1
                ]);

                if ( $sliders->have_posts() ) :
                    while ( $sliders->have_posts() ) : $sliders->the_post();
                    // get slider data
                    $title    = get_post_meta( $post->ID, '_slider_title', true );
                    $subtitle = get_post_meta( $post->ID, '_slider_sub_title', true );
                    $btn1text = get_post_meta( $post->ID, '_btn1_text', true );
                    $btn2text = get_post_meta( $post->ID, '_btn_2_text', true );
                        ?>
                        <div class="slider-items d-flex">
                            <div class="slider-texts">
                                <h2 class="slider-title"><?php echo $title; ?></h2>
                                <h3 class="slider-subtitle"><?php echo $subtitle; ?></h3>
                                <p class="slider-description"><?php the_content(); ?></p>
                                <a href="#" class="btn contact-now-btn my-2 my-sm-0 me-3"><?php echo $btn1text; ?></a>
                                <a href="#" class="btn contact-slider-btn my-2 my-sm-0"><?php echo $btn2text; ?></a>
                            </div>
                            <div class="slider-images">
                                <!-- slider image -->
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
            ?>

        </div>
    </div>
    </div>
</section>
<!-- ========== End Hero Section ========== -->