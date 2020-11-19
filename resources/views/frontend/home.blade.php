@extends('layout.frontend.master')
@section('home')
    active
@endsection
@section('content')
<style>
    .error{
        color: red;
    }
</style>
{{--<link rel="stylesheet" href={{asset("/interior.css")}} type="text/css" />--}}
    <!-- Slider Area -->
    <section >
        <div class="school_name_heaeder">
            <h1 style="font-size: 2rem;"><img src="{{asset('images/medal.jpg')}}" class="school-logo" style="width: 75px;border-radius: 100px;height: 75px;">
                Aziz Bhatti Shaheed Cadet High School
                <img src="{{asset('images/aziz.jpg')}}" style="width: 75px;border-radius: 100px;height: 75px;"
                     class="school-logo"></h1>
        </div>
    </section>
    <section class="home-slider">
            <!-- Single Slider -->
        <div class="single-slider overlay" style="background-image:url('images/slider/slider1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                            <div class="slider-text text-center">

                                <h1><span>Our Mission</span> </h1>
                                <p>Induct young children into a vibrant academic environment and groom them to become brilliant young scholars with an exemplary discipline and refined personality traits. They should be able to excel in any field of life .</p>
                                <div class="button">
                                    <a href="/#course-section" data-scrollto="#course-section" class="btn primary">Our Education Society</a>
                                    <a href="{{route('about-us')}}" class="btn">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->
        <!-- introduction section -->
    <section class="our-introduction section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>
                            {{--<img src="{{asset('images/medal.jpg')}}" class="school-logo" style="width: 75px;border-radius: 100px;height: 75px;">--}}
                            <span>Introduction</span>
                            {{--<img src="{{asset('images/aziz.jpg')}}" style="width: 75px;border-radius: 100px;height: 75px;" class="school-logo">--}}
                            </h2>
                        <p> Aziz Bhatti Shaheed Cadet High School has been founded on the philosophy that young boys and girls at the age of 3-4 years be inducted into an environment which is distinguished for its academic brilliance as well as an excellent personality grooming system, guided by a touch of Military discipline. A highly qualified academic faculty has been combined with an administration comprising Militry officers in order to fully cater for the Educational, Moral and Physical requirements of our young students. the school curriculum consists of a very balanced academic course for each class, complemented by extremely effective personality development program which will help the young students grow up as confident, self rsponsile , Disciplined and refined young scholars, wo will be welcome into the three armed forces of Pakistan or any other field of life they choose to adopt.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="{{asset('images/brag-javed.jpg')}}" alt="#">
                            <div class="main-content" >
                                <div class="patron_heading">
                                    <h3 class="name" style="font-size: 1.25rem;"><mark style="background: #f5e762;">Patron In Chief</mark> <br>
                                    <span>Brigadier Javed Ahmed Hashmi</span></h3>
                                <h5 style="font-size: 1rem"><span style="margin-left: 110px">Sitara-e-imtiaz</span>(<span>Military</span>)</h5>
                                </div>
                                <p> Imparting education is the noblest pursuit of life. Aziz Bhatti Shaheed Cadet High School has been founded on a comprehensive philosophy of education, duly complemented with a child grooming programme for inculcating the finest traits of personality in the young minds of students.</p>
                                <p>The school will serve as an alma mater for young students to shape their lives into ideal personalities and groom them to excellent citizens of Pakistan.</p>
                                <p>At Aziz Bhatti Shaheed Cadet High School, we have a composite educational and co-curricular programme in order to groom young boys and girls for preparing them to assume important responsibilites in the three armed forces as well as in other walks of life.</p>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonials -->
    <!-- academics -->
    <section class="courses section-bg section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2><span >Our Academics </span></h2>
                        <p>At Aziz Bhatti Shaheed Cadet High School, the training philosophy consists of practical based teaching techniques and activity based learning programmes. An able team of ecducationist has compiled a composite syllabus for each class which is in conformity with the age grouping as well as intellectual level of young students.The Junior School begins with the Play Group and comprises Kindergaeten class to Grade-5. The Middle Section consists of classes 6 to 8, whereas the High Section comprises 9th and 10th Grades. Student of class 7 onwards are prepared every year to enter the cadet colleges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End academics -->
    <!-- Enroll -->
    <section class="enroll overlay section" id="enroll" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Single Enroll -->
                            <div class="enroll-form">
                                <div class="form-title">
                                    <h2>Enroll Today</h2>
                                    <p>Before you miss the chance to get your seat!</p>
                                </div>
                                {{--<!-- Form -->--}}
                                <form class="form"  id="emailForm" name="emailForm"  method="post" action="{{route('send.email')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Enter Your name</label>
                                        <input name="name" type="text" placeholder="Full Name here">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Email</label>
                                        <input name="email" type="email" placeholder="email@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Type your messages</label>
                                        <textarea name="message" placeholder=" explain yourself in few lines"></textarea>
                                    </div>
                                    <div class="form-group button">
                                        <button type="submit" class="btn send_email">Register Now</button>
                                    </div>
                                </form>
                                {{--<!--/ End Form -->--}}
                            </div>
                            {{--<!-- Single Enroll -->--}}
                        </div>
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="enroll-right">
                                <div class="section-title">
                                    <h2>We are proud to see our Students Serving in different fields of life in Pakistan!</h2>
                                    <p></p>
                                </div>
                            </div>
                            <!-- Skill Main -->
                            <div class="skill-main">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="circle" data-value="0.7" data-size="130">
                                                <strong>2K+</strong>
                                            </div>
                                            <h4>Students</h4>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="circle" data-value="0.9" data-size="130">
                                                <strong>20+</strong>
                                            </div>
                                            <h4>Courses</h4>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="circle" data-value="0.8" data-size="130">
                                                <strong>20+</strong>
                                            </div>
                                            <h4>Teachers</h4>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                </div>
                            </div>
                            <!--/ End Skill Main -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Enroll -->
    <section class="co-curricular-activities section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2><span>Kids Grooming</span></h2>
                        <p> Aziz Bhatti Shaheed Cadet High School has much more to offer than an ordinary school can.
                            Our vision of education includes character building through teaching of Quran and ahadees, love for the ideology of Pakistan and a disciplined outlook of life.
                            We believe that the finest human qualities are instilled in the character of a person right in the childhood.
                            Hence our emphasis in the school is evenly placed at academic curriclum as well on personality grooming of the children. That
                        includes inculcating and promoting the finest qualities of character which will bear them through all situations in life.</p>
                    </div>
                    <!-- Blogs -->
                    <section class="blog section" style="padding: 10px 0px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="blog-slider">
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/3.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/4.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/5.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/6.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/7.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/8.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <img src="images/grooming/9.jpg" alt="#">
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Blogs -->
                </div>
            </div>
        </div>
    </section>
    <!-- Courses -->
    <section class="courses section-bg section" id="course-section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2><span>ABS Society</span></h2>
                        <p>Along with school courses we provide a vide varity of other courses which makes students as well as their family groom. anyone other than our school students can also learn these courses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="course-slider">
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/ad1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Quran and Ahades</span></a></h4>
                                <p>Learn the basics of Quran recitation with Tajweed as well as learning of selected ahadees in this course.Education of Quran and Ahadees is a compulsary componant of academic curriculum.</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/sp1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Spoken English </span></a></h4>
                                <p>Especial class of spoken English for all grades is organised in the school.</p>
                            </div>

                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/c1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Computer Lab</span></a></h4>
                                <p>A well equipped computer lab is available in the school for computer curriculm of the students. It also caters for special computer courses for advanced level.</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/m1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Science Lab</span></a></h4>
                                <p>A well furnished Physics Chemistry & Biology lab of the school is available for all kinds of scientific pracitals needed for high school students.</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/a1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Art and Design</span></a></h4>
                                <p>The Art & Design society of school is headed by a qualified Art Designer. It provides ample opportunity to students for learning and displaying their art & design facilities. </p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/grooming/9.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Karaty & Gymnastic</span></a></h4>
                                <p>It is our belief that the experiences Physical Healthh and Positive personality will contribute to the development of an active and healthy lifestyle. </p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Courses -->
    <!-- Call To Action -->
    <section class="cta" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="cta-inner overlay">
                        <div class="text-content" style="text-align:center;">
                            <h2>School Rules</h2>
                        </div>
                        <div class="text-content" style="text-align:left;">
                            <h2 style="margin-bottom: 10px;">Attendance</h2>
                            <p>Students must attend morning assembly. Late comers by more than 20 minutes will not be
                                allowed into the classes. Students upto class 2 will not be allowed to leave school without
                                parents/guardian. A student missing an examination will not be given a make-up exam.</p>
                        </div>
                        <div class="text-content" style="text-align:left;margin-top: 30px;">
                            <h2 style="margin-bottom: 10px;">Uniform</h2>
                            <p>School uniform is compulsory for all students.Boys are required to keep a smart hair-cut .
                             Girls are required to tie back their hair and are not allowed to any kind of make-up or jewelry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->
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
    <!-- Fun Facts -->
    <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-book"></i>
                        <div class="number"><span class="counter">20</span>+</div>
                        <p>Active Cources</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="number"><span class="counter">200</span>+</div>
                        <p>Active Students</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-user-circle-o"></i>
                        <div class="number"><span class="counter">20</span>+</div>
                        <p>Teachers</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-trophy"></i>
                        <div class="number"><span class="counter">100</span>+</div>
                        <p>Awards Won</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun Facts -->
    <!-- Events -->
    {{--<section class="events section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 wow zoomIn">--}}
                    {{--<div class="section-title">--}}
                        {{--<h2>Upcoming <span>Events</span></h2>--}}
                        {{--<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="event-slider">--}}
                        {{--<!-- Single Event -->--}}
                        {{--<div class="single-event">--}}
                            {{--<div class="head overlay">--}}
                                {{--<img src="images/events/event1.jpg" alt="#">--}}
                                {{--<a href="images/events/event1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>--}}
                            {{--</div>--}}
                            {{--<div class="event-content">--}}
                                {{--<div class="meta">--}}
                                    {{--<span><i class="fa fa-calendar"></i>05 June 2018</span>--}}
                                    {{--<span><i class="fa fa-clock-o"></i>12.00-5.00PM</span>--}}
                                {{--</div>--}}
                                {{--<h4><a href="event-single.html">Freshers Day Reception 2018</a></h4>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>--}}
                                {{--<div class="button">--}}
                                    {{--<a href="event-single.html" class="btn">Join Event</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/ End Single Event -->--}}
                        {{--<!-- Single Event -->--}}
                        {{--<div class="single-event">--}}
                            {{--<div class="head overlay">--}}
                                {{--<img src="images/events/event2.jpg" alt="#">--}}
                                {{--<a href="images/events/event2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>--}}
                            {{--</div>--}}
                            {{--<div class="event-content">--}}
                                {{--<div class="meta">--}}
                                    {{--<span><i class="fa fa-calendar"></i>03 July 2018</span>--}}
                                    {{--<span><i class="fa fa-clock-o"></i>03.20-5.20PM</span>--}}
                                {{--</div>--}}
                                {{--<h4><a href="event-single.html">Best Student Award 2018</a></h4>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>--}}
                                {{--<div class="button">--}}
                                    {{--<a href="event-single.html" class="btn">Join Event</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/ End Single Event -->--}}
                        {{--<!-- Single Event -->--}}
                        {{--<div class="single-event">--}}
                            {{--<div class="head overlay">--}}
                                {{--<img src="images/events/event3.jpg" alt="#">--}}
                                {{--<a href="images/events/event3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>--}}
                            {{--</div>--}}
                            {{--<div class="event-content">--}}
                                {{--<div class="meta">--}}
                                    {{--<span><i class="fa fa-calendar"></i>15 Dec 2018</span>--}}
                                    {{--<span><i class="fa fa-clock-o"></i>12.30-5.30PM</span>--}}
                                {{--</div>--}}
                                {{--<div class="title">--}}
                                    {{--<h4><a href="event-single.html">Student Workshop</a></h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>--}}
                                {{--</div>--}}
                                {{--<div class="button">--}}
                                    {{--<a href="event-single.html" class="btn">Join Event</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/ End Single Event -->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--/ End Events -->

@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
                // Initialize form validation on the registration form.
                // It has the name attribute "registration"
                $("#emailForm").validate({
                    // Specify validation rules
                    rules: {
                        // The key name on the left side is the name attribute
                        // of an input field. Validation rules are defined
                        // on the right side
                        name: "required",
                        message: "required",
                        email: {
                            required: true,
                            // Specify that email should be validated
                            // by the built-in "email" rule
                            email: true
                        },
                    },
                    // Specify validation error messages
                    messages: {
                        name: "Please enter your name",
                        message: "please enter your message details",
                        email: "Please enter a valid email address"
                    },
                    // Make sure the form is submitted to the destination defined
                    // in the "action" attribute of the form when valid
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
    </script>
    @endsection