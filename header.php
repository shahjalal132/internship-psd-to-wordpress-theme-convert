<?php 
/**
 * Header template
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --- Meta Data --- -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="best website">
    <meta name="description" content="best website">

    <!-- --- Page Title --- -->
    <title> HTML CSS Task </title>

    <!-- --- Fonts --- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">



    <!-- --- All CSS Files --- -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/normalize.css">

    <!-- ----- Custom CSS File ----- -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- [if lt ie 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif] -->

</head>

<body>

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