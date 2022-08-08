<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Organic</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/Avenue-Logo-232x300.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" /> -->
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo site_url("public/frontend/") ?>css/styles.css" rel="stylesheet" />
    <link href="<?php echo site_url("public/frontend/") ?>css/custom.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* @media (min-width: 922px) {
            .container {
                max-width: 1240px;
            }
        }

        .container {
            padding-left: 20px;
            padding-right: 20px;
        } */
    </style>
</head>

<body id="page-top">

    <?php
    $url = $this->uri->uri_string();
    //echo  print_r($url);
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg  fixed-top py-2 navbar-light text-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img class="img-fluid" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/Avenue-Logo-232x300.png" alt="..." />
                Organic</a>
            <button class="navbar-toggler navbar-toggler-right text " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-dark <?php echo $url == "" ? "active" : ""; ?>" href=" <?php echo site_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark <?php echo $url == "about" ? "active" : ""; ?>" href="<?php echo site_url(); ?>about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark <?php echo $url == "contact-us" ? "active" : ""; ?>" href="<?php echo site_url(); ?>contact-us">Contact Us</a></li>


                </ul>
            </div>
        </div>
    </nav>