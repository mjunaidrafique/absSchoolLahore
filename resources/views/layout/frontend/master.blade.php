<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from themelamp.com/html/learnedu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 11:28:48 GMT -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="SITE KEYWORDS HERE" />
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Aziz Bhatti Shaheed Cadet School</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <!-- Web Font -->
    <link href="{{asset('fonts.googleapis.com/cssd5a5.css?family=Roboto:300,400,500,700,900')}}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Learedu Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- Learedu Color -->
    <link rel="stylesheet" href="{{asset('css/color/color1.css')}}">
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color2.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color3.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color4.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color5.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color6.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color7.css')}}">-->--}}
    {{--<!--<link rel="stylesheet" href="{{asset('css/color/color8.css')}}">-->--}}
    <link rel="stylesheet" href="#" id="colors">

    @yield('styles')
</head>
<body>

<!-- Book Preloader -->
<div class="book_preload">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>
<!--/ End Book Preloader -->
<!-- Header -->
<header class="header">
    <!-- Topbar -->
    {{--<div class="topbar">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 col-12">--}}
                    {{--<!-- Contact -->--}}
                    {{--<ul class="content">--}}
                        {{--<li><i class="fa fa-phone"></i>+92 300 4102055</li>--}}
                        {{--<li><a href=""><i class="fa fa-envelope-o"> ABScadetschool@gmail.com</i></a></li>--}}
                        {{--<li><i class="fa fa-clock-o"></i>Opening: 07:00am - 5:00pm</li>--}}
                    {{--</ul>--}}
                    {{--<!-- End Contact -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-12">--}}
                    {{--<!-- Social -->--}}
                    {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-google-plus "></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-behance"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--<!-- End Social -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="#"></a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4>Call Now<span>(+92) 300 4102055 </span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Send Message<a href="mailto:ABScadetschool@gmail.com"><span>ABScadetschool@gmail.com</span></a></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4>Our Location<span>1-Canal Road Mian Aziz Garden Khaira Pul Lahore</span></h4>
                        </div>
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                                <li class="@yield('home')"><a href="{{route('home')}}">Home</a></li>
                                <li class="@yield('about-us')"><a href="{{route('about-us')}}">About Us</a></li>
                                <li @yield('contact-us')><a href="{{route('contact-us')}}">Contact us</a></li>
                                {{--<li @yield('tab')><a href="{{route('teachers')}}">Staff</a></li>--}}
                                {{--<li @yield('tab')><a href="{{route('cources')}}">Courses</a></li>--}}
{{--                                <li @yield('tab')><a href="{{route('events')}}">Events</a>--}}
{{--                                <li @yield('tab')><a href="{{route('events')}}">Fee structure</a>--}}
{{--                                <li @yield('tab')><a href="{{route('events')}}">Gallery</a>--}}
                                {{--<li><a href="contact.html">Contact</a></li>--}}
                            </ul>
                            <!-- End Main Menu -->
                            <!-- button -->
                            <div class="button">
                                <a href="contact.html" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Menu -->
</header>
<!-- End Header -->
<!-- Slider Area -->
    @yield('content')
<!-- Footer -->
<footer class="footer overlay section">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- About -->
                    <div class="single-widget about">
                        <div class="logo"><a href="#" style="font-color:#ffffff;font-size:20px;font-weight:800">ABS Cadet School</a></div>
                        <p>Induct young children into a vibrant academic environment and groom them to become brilliant young scholars with an examplary discipline and refined personality traits</p>
                        <ul class="list">
                            <li><i class="fa fa-phone"></i>Phone: +92 300 4102055 </li>
                            <li><i class="fa fa-envelope"></i>Email: <a href="mailto:ABScadetschool@gmail.com.com">ABScadetschool@gmail.com</a></li>
                            <li><i class="fa fa-map-o"></i>1-Canal Road Mian Aziz Garden Khaira Pul Lahore</li>
                        </ul>
                    </div>
                    <!--/ End About -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Useful Links -->
                    <div class="single-widget useful-links">
                        <h2>Useful Links</h2>
                        <ul>
                            <li><a href="{{route('home')}}"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="{{route('about-us')}}"><i class="fa fa-angle-right"></i>About Us</a></li>
                            {{--<li><a href="#"><i class="fa fa-angle-right"></i>Courses</a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-angle-right"></i>Events</a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-angle-right"></i>Staff</a></li>--}}
                            <li><a href="{{route('contact-us')}}"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                            {{--<li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>--}}
                        </ul>
                    </div>
                    <!--/ End Useful Links -->
                </div>
                {{--<div class="col-lg-4 col-md-6 col-12">--}}
                    {{--<!-- Latest News -->--}}
                    {{--<div class="single-widget latest-news">--}}
                        {{--<h2>Latest Posts</h2>--}}
                        {{--<div class="news-inner">--}}
                            {{--<div class="single-news">--}}
                                {{--<img src="images/blog/blog1.jpg" alt="#">--}}
                                {{--<h4><a href="blog-single.html">Our Teacher the best Link to Savc</a></h4>--}}
                                {{--<p>Nunc purus orci, blandit condimentum rhoncus vels</p>--}}
                            {{--</div>--}}
                            {{--<div class="single-news">--}}
                                {{--<img src="images/blog/blog2.jpg" alt="#">--}}
                                {{--<h4><a href="blog-single.html">Student Have the best Link to Ronae</a></h4>--}}
                                {{--<p>Nunc purus orci, blandit condimentum rhoncus vels</p>--}}
                            {{--</div>--}}
                            {{--<div class="single-news">--}}
                                {{--<img src="images/blog/blog3.jpg" alt="#">--}}
                                {{--<h4><a href="blog-single.html">Sekker the best Link to build</a></h4>--}}
                                {{--<p>Nunc purus orci, blandit condimentum rhoncus vele</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/ End Latest News -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-12">--}}
                    {{--<!-- Newsletter -->--}}
                    {{--<div class="single-widget newsletter">--}}
                        {{--<h2>Subscribe Newsletter</h2>--}}
                        {{--<div class="mail">--}}
                            {{--<p>Don't miss to  subscribe to our news feed, Get the latest updates from us!</p>--}}
                            {{--<div class="form">--}}
                                {{--<input type="email" placeholder="Enter your email">--}}
                                {{--<button class="button" type="submit"><i class="fa fa-envelope"></i></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/ End Newsletter -->--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-head">
                        <div class="row">
                            <div class="col-12">
                                <!-- Social -->
                                {{--<ul class="social">--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                                {{--</ul>--}}
                                <!-- End Social -->
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p>© Copyright 2020 <a href="#">ABS Cadet School</a>. All Rights Reserved</p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End Footer -->

<!-- Jquery JS-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}"></script>
<!-- Popper JS-->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Colors JS-->
<script src="{{asset('js/colors.js')}}"></script>
<!-- Jquery Steller JS -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Particle JS -->
<script src="{{asset('js/particles.min.js')}}"></script>
<!-- Fancy Box JS-->
<script src="{{asset('js/facnybox.min.js')}}"></script>
<!-- Magnific Popup JS-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Masonry JS-->
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<!-- Circle Progress JS -->
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<!-- Owl Carousel JS-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Waypoints JS-->
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Slick Nav JS-->
<script src="{{asset('js/slicknav.min.js')}}"></script>
<!-- Counter Up JS -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Easing JS-->
<script src="{{asset('js/easing.min.js')}}"></script>
<!-- Wow Min JS-->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Scroll Up JS-->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<!-- Google Maps JS -->
{{--<script src="{{asset('maps.google.com/maps/api/js8230?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw')}}"></script>--}}
<script src="{{asset('js/gmaps.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')

</body>

<!-- Mirrored from themelamp.com/html/learnedu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 19:37:52 GMT -->
</html>