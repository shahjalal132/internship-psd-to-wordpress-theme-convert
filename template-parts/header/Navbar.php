<?php
/**
 * Navbar template
 */
?>

<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- Display logo dynamically -->
            <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}?>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <?php
                wp_nav_menu( [
                    'theme_location' => 'primary_menu',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav me-auto ms-auto mt-2 mt-lg-0',
                    'fallback_cb'    => '__return_false',
                    'depth'          => 2,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                ] )
                ?>
            <div class="d-flex my-2 my-lg-0">
                <button class="btn service-read-more my-2 my-sm-0" type="submit">Contact Now</button>
            </div>
        </div>
    </div>
</nav>