<!doctype html>
<html lang="en">

<!-- #Head -->

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="SquaresMosaic" />
    <!-- #Social Media -->

    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/social/favicon-16x16.png" sizes="16x16"
        type="image/png" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/social/favicon-32x32.png" sizes="32x32"
        type="image/png" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/social/favicon-96x96.png" sizes="96x96"
        type="image/png" />

    <meta property="og:site_name" content="SquaresMosaic" />
    <meta property="og:title" content="Squares Mosaic" />
    <meta property="og:description" content="Squares Mosaic" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/img/social/website-img.jpg" />
    <meta property="og:url" content="https://squaresmosaic.com/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Squares Mosaic" />
    <meta name="twitter:description" content="Squares Mosaic" />
    <meta name="twitter:site" content="@Squares" />
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/assets/img/social/website-img.jpg" />
    <meta name="twitter:creator" content="@SquaresMosaic" />

    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="https://squares.com/" />

    <!-- #Social Media End -->

    <title>Squares Mosaic</title>

    <meta name="description" content="Squares Mosaic" />

    <meta name="keywords" content="Squares Mosaic" />

    <!-- Links -->
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Links End -->

</head>

<!-- End Head -->

<body>
    <!-- Preloader -->

    <div class="preloader">
        <div class="preloader-logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="" />
        </div>
        <div class="preloader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>

    <!-- End Preloader -->

    <!-- Header -->

    <header>

        <div class="menu-bar">
            <div class="container">

                <nav class="navbar navbar-expand-lg">
                    <?php $logo = get_field('logo', 'option'); 
                    $logo_image = wp_get_attachment_url($logo);
                    ?>
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo $logo_image; ?>"
                            alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/img/menu.svg" alt="" /></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto metismenu">
                            <li class="nav-item">
                                <a id="slider" class="nav-link active" href="#index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-mosaics">About mosaic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#squares-mosaics">Squares mosaic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#applications">Applications</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#services">Our services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#factory">Our factory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery"><?php echo get_field('section_title');?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

    </header>

    <!-- Header -->