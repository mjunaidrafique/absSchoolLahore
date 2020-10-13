@extends('layout.frontend.master')
@section('about-us')
    active
@endsection
@section('content')
<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Pages</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('about-us')}}">about</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- About US -->
<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="single-image overlay">
                    <img src="{{asset('images/about.jpg')}}" alt="#">
                    <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-text">
                    <h2>About Our Education</h2>
                    <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                    <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                    <div class="button">
                        <a href="#" class="btn">Our Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End About US -->

<!-- Fun Facts -->
<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-institution"></i>
                    <div class="number"><span class="counter">80</span>k+</div>
                    <p>Active Cources</p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-graduation-cap"></i>
                    <div class="number"><span class="counter">33</span>k+</div>
                    <p>Active Students</p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-video-camera"></i>
                    <div class="number"><span class="counter">278</span>+</div>
                    <p>Video Cources</p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-trophy"></i>
                    <div class="number"><span class="counter">308</span>+</div>
                    <p>Awards Won</p>
                </div>
                <!--/ End Single Fact -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun Facts -->
<!-- Team -->
<section class="team section">
    <div class="container">
        <div class="row">
            <div class="col-12 wow zoomIn">
                <div class="section-title">
                    <h2>Our Awesome <span>Teachers</span></h2>
                    <p>We have Best Educational staff in this area they all are qualified and motivated and expert in their subjects.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/team1.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4>Brigadier Javed Ahmed<span> English </span></h4>
                        <h5>MA in English</h5>
                        <p>Teaches the student basics of English language in morning assembly and responsible for Board classes English subject.</p>
                        {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/team2.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Qari Muhammad Yousaf<span class="work">Quran and Ahades (Islamiyat)</span></h4>
                        <h5>MA in islamiyat</h5>
                        <p> Teaches the students quran and ahades in morning assembly and also teach students Islamiyat subeject.</p>
                        {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/team3.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Miss Rubina<span class="work">Urdu</span></h4>
                        <h5>MA in Urdu</h5>
                        <p>Responsible for teaching Urdu subject to all classes and also Head of urdu society of school</p>
                        {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="1s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/team4.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Miss Sajida<span class="work">Science Teacher</span></h4>
                        <p>Responsible for teaching science subject to all classes and also head of school science department</p>
                        {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
        </div>
    </div>
</section>
<!--/ End Team -->
@endsection
