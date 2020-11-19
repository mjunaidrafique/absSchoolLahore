@extends('layout.frontend.master')
@section('about-us')
    active
@endsection
@section('content')
<!-- Start Breadcrumbs -->
<section >
    <div class="school_name_heaeder">
        <h1 style="font-size: 2rem;"><img src="{{asset('images/medal.jpg')}}" class="school-logo" style="width: 75px;border-radius: 100px;height: 75px;">
            Aziz Bhatti Shaheed Cadet High School
            <img src="{{asset('images/aziz.jpg')}}" style="width: 75px;border-radius: 100px;height: 75px;"
                 class="school-logo"></h1>
    </div>
</section>
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
                <div class="single-image overlay" style="margin-top: 85px;">
                    <img src="{{asset('images/slider/slider1.jpg')}}"  alt="#">
                    {{--<a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-text">
                    <h2>About Our Education</h2>
                    <p> Aziz Bhatti Shaheed Cadet High School has been founded on the philosophy that young boys and girls at the age of 3-4 years be inducted into an environment which is distinguished for its academic brilliance as well as an excellent personality grooming system, guided by a touch of Military discipline. A highly qualified academic faculty has been combined with an administration comprising Militry officers in order to fully cater for the Educational, Moral and Physical requirements of our young students. the school curriculum consists of a very balanced academic course for each class, complemented by extremely effective personality development program which will help the young students grow up as confident, self rsponsile , Disciplined and refined young scholars, wo will be welcome into the three armed forces of Pakistan or any other field of life they choose to adopt.  </p>

                    {{--<p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>--}}
                    <div class="button">
                        <a href="/#course-section" data-scrollto="#course-section" class="btn">Our Education Society</a>
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
                    <h2><span>Our Awesome Teachers</span></h2>
                    <p>We have Best Educational staff in this area they all are qualified and motivated and expert in their subjects.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/brag-javed.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4>Brigadier Javed Ahmed<span> English </span></h4>
                        <p style="color: #000;font-weight: 700;">BSc hons(War Studies)</p>
                        <p  style="color: #000;font-weight: 700;">Master in Islamic-Studies</p>
                        <p  style="color: #000;font-weight: 700;" >Master in Pak-Studies</p>
                        <p  style="color: #000;font-weight: 700;">Master in History</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/qariyousaf.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Qari Muhammad Yousaf<span class="work">Quran and Ahades (Islamiyat)</span></h4>
                        <p  style="color: #000;font-weight: 700;">Master in Islamic-Studies</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/missrubina.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Miss Rubina<span class="work">Urdu</span></h4>
                        <p  style="color: #000;font-weight: 700;">Master in Urdu</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="1s">
                <!-- Single Team -->
                <div class="single-team">
                    <img src="{{asset('images/team/misssajida.jpg')}}" alt="#">
                    <div class="team-hover">
                        <h4 class="name">Miss Sajida<span class="work">Science Teacher</span></h4>
                        <p  style="color: #000;font-weight: 700;">BS in Zoology</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
        </div>
    </div>
</section>
<!--/ End Team -->
@endsection
