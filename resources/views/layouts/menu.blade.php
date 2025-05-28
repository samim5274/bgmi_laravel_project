<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to - BGMIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/bgmibd.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/menu.css" rel="stylesheet">
</head>

<body>
    
    
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->










    
    <!-- top section start -->
    <section id="top-section" class="top-section d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-12 text-center text-md-center py-2">
                    <div class="social-icons d-flex justify-content-center justify-content-md-center gap-3">
                        <a href="#"><p class="mx-2"><i class="fas fa-phone"></i> +880 1787-226675 <span class="badge rounded-pill bg-warning">24hrs</span></p></a>
                        <a href="#"><p class="mx-2"><i class="fas fa-envelope"></i> info@bgmit.com</p></a>
                        <a href="#"><p class="mx-2"><i class="fas fa-graduation-cap"></i> Student Registration</p></a>
                    </div>
                </div>
                <div class="col-md-3 col-12 py-2"></div>
                <div class="col-md-3 col-12 text-center text-md-center p-0">
                    <div class="social-icons d-flex justify-content-center justify-content-md-center gap-3">
                        <a href="https://www.facebook.com/bgmiit"><i class="fab fa-facebook-f text-white"></i></a>
                        <a href="https://www.instagram.com/bgmit2020/"><i class="fab fa-instagram text-white"></i></a>
                        <a href="https://x.com/bgmit2020"><i class="fa-brands fa-x-twitter text-white"></i></a>
                        <a href="https://www.youtube.com/@bgmit2020"><i class="fab fa-youtube text-white"></i></a>
                        <a href="https://www.linkedin.com/company/bgmit/"><i class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top section end -->














    <!-- Navbar Start -->
    <div class="sticky">
        <div class="col-12 container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
            <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="{{ url('/') }}">
                <img src="../img/bgmibd.png" class="img-fluid" width="120" height="120" alt="Logo">
            </a>
            <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto p-4 p-lg-0">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>

                <!-- Mega Menu Dropdown -->
                <li class="nav-item dropdown position-static">
                    <a href="#" class="nav-link dropdown-toggle" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Courses
                    </a>
                    <div class="dropdown-menu w-100 mt-0" aria-labelledby="coursesDropdown" style="border-top: 3px solid #5472d2;">
                        <div class="container">
                            <div class="row py-4 px-5">
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-images me-2"></i> Graphic Design</h5>
                                    <a href="{{ url('/course/basic-graphic-design') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Basic Graphic Design</a>
                                    <a href="{{ url('/course/advance-graphic-design') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Advance Graphic Design</a>
                                    <a href="{{ url('/course/motion-graphic-design') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Motion Graphic Design</a>
                                    <a href="{{ url('/course/ux-ui-graphic-design') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> UI/UX Design</a>
                                </div>
                                
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-chart-column me-2"></i> Digital Marketing</h5>
                                    <a href="{{ url('/course/digital-marketing') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Digital Marketing</a>
                                    <a href="{{ url('/course/search-engine-optimization') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> SEO</a>
                                    <a href="{{ url('/course/social-media-marketing') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Social Media Marketing</a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-code me-2"></i> Software Development</h5>
                                    <a href="{{ url('/course/full-stack-web-development') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Full Stack Developer</a>
                                    <a href="{{ url('/course/front-end-development') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Frontend Developer</a>
                                    <a href="{{ url('/course/back-end-development') }}" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Backend Development (PHP & Laravel)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Software</a></li>
                <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }} ">About</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }} ">Contact</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->




