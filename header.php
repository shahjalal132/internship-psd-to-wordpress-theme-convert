<?php
/**
 * Header template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- --- Meta Data --- -->
    <meta charset="<?php bloginfo( "charset" )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="best website">
    <meta name="description" content="best website">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}?>

    <!-- ========== Header Section Start ========== -->
    <header class="header-section shadow-sm">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" class="logo-image" alt="logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Home 1</a>
                                <a class="dropdown-item" href="#">Home 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimonial</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Blog 1</a>
                                <a class="dropdown-item" href="#">Blog 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <button class="btn contact-now-btn my-2 my-sm-0" type="submit">Contact Now</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <!-- ========== Header Section End ========== -->