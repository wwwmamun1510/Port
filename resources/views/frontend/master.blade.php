<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('frontend_asset/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend_asset/css/responsive.css')}}">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                   
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                @foreach($all_logos as $logo)
                                    <a href="index.html" class="navbar-brand logo-sticky-none">
                                       <img src="{{asset('public/uploads/logos/')}}/{{$logo->logo_image}}" width="50px" height="50px" alt="Logo">
                                    </a>
                                    <a href="index.html" class="navbar-brand s-logo-none">
                                       <img src="{{asset('public/uploads/logos/')}}/{{$logo->logo_image}}" width="50px" height="50px" alt="Logo">
                                    </a>
                                    @endforeach
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="{{asset('frontend_asset/img/logo/logo.png')}}" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->
        @yield('content')
       <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
		<!-- JS here -->
        <script src="{{asset('frontend_asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/one-page-nav-min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/slick.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/ajax-form.js')}}"></script>
        <script src="{{asset('frontend_asset/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/aos.js')}}"></script>
        <script src="{{asset('frontend_asset/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend_asset/js/plugins.js')}}"></script>
        <script src="{{asset('frontend_asset/js/main.js')}}"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
