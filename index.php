<?php
include 'config.php';
require_once 'contactform.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Heating, Ventilating & Air Conditioning Service">
    <title><?php echo $lang['title']; ?></title>
    <link href="assets/logo/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="uemR4MoE"></script>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-phone me-2"></i>+1 514.883.1972</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>climatisationacg@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.facebook.com/anthonywoohvac/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://twitter.com/?lang=en"><i class="fab fa-twitter fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index" class="navbar-brand p-0">
                <img loading="lazy" src="assets/logo/logo.jpg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index" class="nav-item nav-link active"><?php echo $lang[
                        'home'
                    ]; ?></a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $lang[
                            'company'
                        ]; ?></a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="#about" class="dropdown-item"><?php echo $lang[
                                'about'
                            ]; ?></a>
                            <a href="#testimonials" class="dropdown-item"><?php echo $lang[
                                'testimonials'
                            ]; ?></a>
                            <a href="faq" class="dropdown-item"><?php echo $lang[
                                'tips'
                            ]; ?></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="#" class="dropdown-item">Installation</a>
                            <a href="#" class="dropdown-item"><?php echo $lang[
                                'repair'
                            ]; ?></a>
                            <a href="#" class="dropdown-item">Maintenance</a>
                            <a href="#" class="dropdown-item"><?php echo $lang[
                                'iaq'
                            ]; ?>
                            </a>
                            <a href="#" class="dropdown-item"><?php echo $lang[
                                'smart'
                            ]; ?>
                            </a>
                            <a href="#" class="dropdown-item"><?php echo $lang[
                                'pressure'
                            ]; ?>
                            </a>
                            <a href="#" class="dropdown-item">Inspection</a>
                        </div>
                    </div>
                    <a href="#quote" class="nav-item nav-link">Contact</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $lang[
                            'language'
                        ]; ?></a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="index?lang=en" class="dropdown-item"><?php echo $lang[
                                'lang_en'
                            ]; ?></a>
                            <a href="index?lang=fr" class="dropdown-item"><?php echo $lang[
                                'lang_fr'
                            ]; ?></a>
                        </div>
                    </div>
                </div>
                <a href="#quote" class="btn btn-primary py-2 px-4 ms-3"><?php echo $lang[
                    'quote'
                ]; ?></a>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/banner/banner1.jpg" alt="banner1">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a href="#services" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $lang[
                                'service'
                            ]; ?></a>
                            <a href="#quote" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $lang[
                                'contact'
                            ]; ?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/banner/banner2.jpg" alt="banner2">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a href="#services" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $lang[
                                'service'
                            ]; ?></a>
                            <a href="#quote" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $lang[
                                'contact'
                            ]; ?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/banner/banner3.jpg" alt="banner3">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a href="#services" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $lang[
                                'service'
                            ]; ?></a>
                            <a href="#quote" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $lang[
                                'contact'
                            ]; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h1 class="text-white mb-0"><?php echo $lang[
                                'heating'
                            ]; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h1 class="mb-0">Ventilation</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h1 class="text-white mb-0"><?php echo $lang[
                                'climatisation'
                            ]; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About Start -->
    <div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $lang[
                            'about'
                        ]; ?></h5>
                        <h1 class="mb-0"><?php echo $lang['us']; ?></h1>
                    </div>
                    <p class="mb-4"><?php echo $lang['aboutus']; ?></p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $lang[
                                'hvac'
                            ]; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $lang[
                                'staff'
                            ]; ?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $lang[
                                'support'
                            ]; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $lang[
                                'quality'
                            ]; ?></h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <a href="tel:+15148831972"><div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div></a>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo $lang['ask']; ?></h5>
                            <a href="tel:+15148831972"><h4 class="text-primary mb-0">+1 514.883.1972</h4></a>
                        </div>
                    </div>
                    <a href="#quote" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"><?php echo $lang[
                        'request'
                    ]; ?></a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="assets/team.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $lang[
                    'service'
                ]; ?></h5>
                <h1 class="mb-0"><?php echo $lang['ourservice']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-screwdriver-wrench text-white"></i>
                        </div>
                        <h4 class="mb-3">Installation</h4>
                        <p class="m-0"><?php echo $lang['service1']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-wrench text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $lang['repair']; ?></h4>
                        <p class="m-0"><?php echo $lang['service2']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-clock text-white"></i>
                        </div>
                        <h4 class="mb-3">Maintenance</h4>
                        <p class="m-0"><?php echo $lang['service3']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-fan text-white"></i>
                            
                        </div>
                        <h4 class="mb-3"><?php echo $lang['iaq']; ?>
                        </h4>
                        <p class="m-0"><?php echo $lang['service4']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-temperature-high text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $lang['smart']; ?>
                        </h4>
                        <p class="m-0"><?php echo $lang['service5']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-calendar text-white"></i>
                        </div>
                        <h4 class="mb-3">Inspection
                        </h4>
                        <p class="m-0"><?php echo $lang['service6']; ?>
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div id="testimonials" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $lang[
                    'testimonials'
                ]; ?></h5>
                <h1 class="mb-0"><?php echo $lang['customer']; ?></h1>
            </div>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-6ce90040-72e4-4861-9404-ac5452c73f5a"></div>

            <!-- <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="assets/avatar.svg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="assets/avatar.svg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="assets/avatar.svg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="assets/avatar.svg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Tips Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $lang[
                    'latesttips'
                ]; ?></h5>
                <h1 class="mb-0"><?php echo $lang['read']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <a href="faq"><img loading="lazy" class="img-fluid" src="assets/tips/tip_7.jpg" alt="tip#7"></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $lang[
                                    'tip7_date'
                                ]; ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo $lang['tip7']; ?></h4>
                            <a href="faq"><?php echo $lang['tip7_desc']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <a href="faq"><img loading="lazy" class="img-fluid" src="assets/tips/tip_6.jpg" alt="tip#6"></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $lang[
                                    'tip6_date'
                                ]; ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo $lang['tip6']; ?></h4>
                            <a href="faq"><?php echo $lang['tip6_desc']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <a href="faq"><img loading="lazy" class="img-fluid" src="assets/tips/tip_5.jpg" alt="tip#5"></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $lang[
                                    'tip5_date'
                                ]; ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo $lang['tip5']; ?></h4>
                            <a href="faq"><?php echo $lang['tip5_desc']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tips Start -->

    <!-- Quote Start -->
    <div id="quote" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $lang[
                            'request'
                        ]; ?></h5>
                        <h1 class="mb-0"><?php echo $lang['needquote']; ?></h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i><?php echo $lang[
                                'reply'
                            ]; ?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone text-primary me-3"></i><?php echo $lang[
                                '24h'
                            ]; ?></h5>
                        </div>
                    </div>
                    <p class="mb-4"><?php echo $lang['contactnow']; ?></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <a class="btn btn-primary" href="tel:+15148831972"><?php echo $lang[
                            'call'
                        ]; ?></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="contactform.php" method="POST">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" id="name" class="form-control bg-light border-0" placeholder="<?php echo $lang[
                                        'name'
                                    ]; ?>" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" id="email" class="form-control bg-light border-0 <?php $invalid_class_name ??
                                        ''; ?>" placeholder="<?php echo $lang[
    'email'
]; ?>" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected><?php echo $lang[
                                            'selectservice'
                                        ]; ?></option>
                                        <option value="1">Installation</option>
                                        <option value="2"><?php echo $lang[
                                            'repair'
                                        ]; ?></option>
                                        <option value="3">Maintenance</option>
                                        <option value="4"><?php echo $lang[
                                            'iaq'
                                        ]; ?></option>
                                        <option value="5"><?php echo $lang[
                                            'smart'
                                        ]; ?></option>
                                        <option value="6"><?php echo $lang[
                                            'pressure'
                                        ]; ?></option>
                                        <option value="7">Inspection</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" class="form-control bg-light border-0" rows="3" required placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button name="submit" class="btn btn-dark w-100 py-3" type="submit"><?php echo $lang[
                                        'submit'
                                    ]; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <img class="logo-footer" loading="lazy" src="assets/logo/logo.jpg" alt="logo">
                        <p class="mt-3 mb-4"><?php echo $lang['footer']; ?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $lang[
                                    'contactus'
                                ]; ?></h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Vaudreuil-Dorion, Canada</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">climatisationacg@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+1 514.883.1972</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" target="_blank" href="https://www.facebook.com/anthonywoohvac/"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" target="_blank" href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" target="_blank" href="https://twitter.com/?lang=en"><i class="fab fa-twitter fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $lang[
                                    'site'
                                ]; ?></h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'home'
                                ]; ?></a>
                                <a class="text-light mb-2" href="#about"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'about'
                                ]; ?></a>
                                <a class="text-light mb-2" href="#services"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'service'
                                ]; ?></a>
                                <a class="text-light mb-2" href="#testimonials"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'testimonials'
                                ]; ?></a>
                                <a class="text-light mb-2" href="faq"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'tips'
                                ]; ?></a>
                                <a class="text-light" href="#quote"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'contactus'
                                ]; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $lang[
                                    'service'
                                ]; ?></h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Installation</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'repair'
                                ]; ?></a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Maintenance</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>IAQ</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'smart'
                                ]; ?></a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Inspection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">Climatisation ACG &copy; <script>
                            document.write(new Date().getFullYear())
                          </script> - <?php echo $lang['rights']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="js/main.js"></script>
</body>
</html>