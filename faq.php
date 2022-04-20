<?php
include 'config.php'; ?>

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

    <!-- Navbar Start -->
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
                    <a href="index" class="nav-item nav-link"><?php echo $lang[
                        'home'
                    ]; ?></a>
                    <!-- <a href="#about" class="nav-item nav-link">About</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><?php echo $lang[
                            'company'
                        ]; ?></a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="index#about" class="dropdown-item"><?php echo $lang[
                                'about'
                            ]; ?></a>
                            <a href="index#testimonials" class="dropdown-item"><?php echo $lang[
                                'testimonials'
                            ]; ?></a>
                            <a href="faq" class="dropdown-item active"><?php echo $lang[
                                'tips'
                            ]; ?></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="detail.html" class="dropdown-item">Installation</a>
                            <a href="detail.html" class="dropdown-item"><?php echo $lang[
                                'repair'
                            ]; ?></a>
                            <a href="detail.html" class="dropdown-item">Maintenance</a>
                            <a href="detail.html" class="dropdown-item"><?php echo $lang[
                                'iaq'
                            ]; ?>
                            </a>
                            <a href="detail.html" class="dropdown-item"><?php echo $lang[
                                'smart'
                            ]; ?>
                            </a>
                            <a href="detail.html" class="dropdown-item"><?php echo $lang[
                                'pressure'
                            ]; ?>
                            </a>
                            <a href="detail.html" class="dropdown-item">Inspection</a>
                        </div>
                    </div>
                    <a href="index#quote" class="nav-item nav-link">Contact</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $lang[
                            'language'
                        ]; ?></a>
                        <div class="dropdown-menu m-0" role="menu">
                            <a href="faq?lang=en" class="dropdown-item"><?php echo $lang[
                                'lang_en'
                            ]; ?></a>
                            <a href="faq?lang=fr" class="dropdown-item"><?php echo $lang[
                                'lang_fr'
                            ]; ?></a>
                        </div>
                    </div>
                </div>
                <a href="index#quote" class="btn btn-primary py-2 px-4 ms-3"><?php echo $lang[
                    'quote'
                ]; ?></a>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px; height: 50vh;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?php echo $lang[
                        'tips'
                    ]; ?></h1>
                    <a href="index" class="h5 text-white"><?php echo $lang[
                        'home'
                    ]; ?></a>
                    <i class="fa fa-chevron-right text-info px-2"></i>
                    <a href="" class="h5 text-white"><?php echo $lang[
                        'tips'
                    ]; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

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

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_7.jpg" alt="tip#7">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>29 March, 2022 at 3:38 PM</small>
                                    </div>
                                    <h4 class="mb-3">Test Your Air Conditioning</h4>
                                    <p>Test Your Air Conditioning before the hot weather arrives...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_6.jpg" alt="tip#6">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>23 March, 2022 at 8:17 AM</small>
                                    </div>
                                    <h4 class="mb-3">Check Your Ductwork</h4>
                                    <p>Check Your Ductwork. Your ductwork is an important part of your home’s HVAC system...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_5.jpg" alt="tip#5">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>19 March, 2022 at 7:27 AM</small>
                                    </div>
                                    <h4 class="mb-3">A Dirty Heat Pump</h4>
                                    <p>This is a heat pump that hasn’t been cleaned for many years. In fact the unit was so dirty, it caused the fan motor to fail...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_4.jpg" alt="tip#4">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>14 March, 2022 at 8:30 AM</small>
                                    </div>
                                    <h4 class="mb-3">HVAC Seasonal Maintenance</h4>
                                    <p>Here is our 3rd tip for seasonal maintenance that you can do on your HVAC system prior to calling in the experts...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_2&3.jpg" alt="tip#3">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>9 March, 2022 at 11:27 AM</small>
                                    </div>
                                    <h4 class="mb-3">Spring Is Around The Corner Tip#1</h4>
                                    <p>We can feel warmer weather trying to squeak through, so its the perfect time to perform seasonal maintenance on your HVAC system...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img loading="lazy" class="img-fluid" src="assets/tips/tip_2&3.jpg" alt="tip#2">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>9 March, 2022 at 11:27 AM</small>
                                    </div>
                                    <h4 class="mb-3">Spring Is Around The Corner Tip#2</h4>
                                    <p>We can feel warmer weather trying to squeak through, so its the perfect time to perform seasonal maintenance on your HVAC system...</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="<?php echo $lang[
                                'keyword'
                            ]; ?>">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0"><?php echo $lang[
                                'service'
                            ]; ?></h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Installation</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $lang[
                                'repair'
                            ]; ?></a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Maintenance</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $lang[
                                'iaq'
                            ]; ?></a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $lang[
                                'smart'
                            ]; ?></a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $lang[
                                'pressure'
                            ]; ?></a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Inspection</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="assets/tips/tip_7.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="tip#7">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Test Your Air Conditioning
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="assets/tips/tip_6.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="tip#6">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Check Your Ductwork
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="assets/tips/tip_5.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="tip#5">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">A Dirty Heat Pump
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="assets/tips/tip_4.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="tip#4">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">HVAC Seasonal Maintenance
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/banner5.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <p class="btn btn-light m-1">Heating</p>
                            <p class="btn btn-light m-1">Cooling</p>
                            <p class="btn btn-light m-1">Air Condition</p>
                            <p class="btn btn-light m-1">Ventilating</p>
                            <p class="btn btn-light m-1">HVAC</p>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

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
                                <a class="text-light mb-2" href="index"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'home'
                                ]; ?></a>
                                <a class="text-light mb-2" href="index#about"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'about'
                                ]; ?></a>
                                <a class="text-light mb-2" href="index#services"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'service'
                                ]; ?></a>
                                <a class="text-light mb-2" href="index#testimonials"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'testimonials'
                                ]; ?></a>
                                <a class="text-light mb-2" href=""><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
                                    'tips'
                                ]; ?></a>
                                <a class="text-light" href="index#quote"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $lang[
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