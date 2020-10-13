@extends('layout.frontend.master')
@section('home')
    active
@endsection
@section('content')

    <!-- Slider Area -->
    <section class="home-slider">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider overlay" style="background-image:url('images/slider/slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="slider-text">
                                <h1>Our <span>Mission</span> </h1>
                                <p>Induct young children into a vibrant academic environment and groom them to become brilliant young scholars with an exemplary discipline and refined personality traits. They should be able to excel in any field of life .</p>
                                <div class="button">
                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                    <a href="{{route('about-us')}}" class="btn">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
            <!-- Single Slider -->
            <div class="single-slider overlay" style="background-image:url('images/slider/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                            <div class="slider-text text-center">
                                <h1>Our <span>Mission</span> </h1>
                                <p>Induct young children into a vibrant academic environment and groom them to become brilliant young scholars with an examplary discipline and refined personality traits. They should be able to excel in any field of life .</p>
                                <div class="button">
                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                    <a href="{{route('about-us')}}" class="btn">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
            <!-- Single Slider -->
            <div class="single-slider overlay" style="background-image:url('images/slider/slider1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
                            <div class="slider-text text-right">
                                <h1>Our <span>Mission</span> </h1>
                                <p>Induct young children into a vibrant academic environment and groom them to become brilliant young scholars with an examplary discipline and refined personality traits. They should be able to excel in any field of life .</p>
                                <div class="button">
                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                    <a href="{{route('about-us')}}" class="btn">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->
        <!-- introduction section -->
    <section class="our-introduction section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Introduction of <span>Aziz Bhatti Shaheed Cadet High School</span> </h2>
                        <p> Aziz Bhatti Shaheed Cadet High School has been founded on the philosophy that young boys and girls at the age of 3-4 years be inducted into an environment which is distinguished for its academic brilliance as well as an excellent personality grooming system, guided by a touch of Military discipline. A highly qualified academic faculty has been combined with an administration comprising Miltry officers in order to fully cater for the Educational, Moral and Physical requirements of our young students. the school curriculum consists of a very balanced academic course for each class, complemented by extremely effective personality development program which will help the youn students grow up as confident, self rsponsile , Disciplined and refined young scholars, wo will be welcome into the three armed forces of Pakistan or any other field of life they choose to adopt.  </p>
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
                            <div class="main-content"   style="text-align: center;">
                                <h3 class="name">Patron In Chief <span>Brigadier Javed Ahmed Hashmi</span></h3>
                                <h5> <span>Sitara-e-imtiaz</span>(<span>Military</span>)</h5>
                                <h4> Our Principal vision</h4>
                                <p> Imparting education is the noblest pursuit of life. Aziz Bhatti Shaheed Cadet High School has been founded on a comprehensive philosophy of education, duly complemented with a child grooming programme for inculcating the finest traits of personality in the young minds of students.</p>
                                <p>The school will serve as an alma mater for young students to shape their lives into ideal personalities and groom them into excellent citizens of Pakistan.</p>
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
                        <h2>Our<span>Academics</span></h2>
                        <p>At Aziz Bhatti Shaheed Cadet High School, the training philosophy consists of practical based teaching techniques and activity based learning programmes. An able team of cducationists has compiled a composite syllabus for each class which is in conformity with the age grouping as well as intellectual level of young sudents.The junior school begins with the play Group ad comprises Kindergaeten class to Grade5. The middle Section consists of classes 6 to 8, whereas the high section comprises 9th and 10th grades. Student of class 7 onwards are prepared every year to enter the cadet colleges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End academics -->
    <!-- Enroll -->
    <section class="enroll overlay section" data-stellar-background-ratio="0.5">
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
                                <!-- Form -->
                                <form class="form"  id="emailForm" >
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
                                <!--/ End Form -->
                            </div>
                            <!-- Single Enroll -->
                        </div>
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="enroll-right">
                                <div class="section-title">
                                    <h2>We Have More than 2,000+ Student Serving in different fields of Pakistan!</h2>
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
                        <h2>Kids Grooming</h2>
                        <p> Aziz Bhatti Shaheed Cadet High School has much more to offer than an ordinary school can.
                            Our vision of education includes character building, love for the ideology of Pakistan and a disciplined outlook of life.
                            We believe that the finest human qualities are instilled in the character of a person right in the childhood.
                            Hence our emphases in the school is evenly placed in academic curriclum as well on personality grooming of the children. That
                        includes inculcating and promoting the finest qualities of character which will bear them through all situations in life.</p>
                    </div>
                    <!-- Blogs -->
                    <section class="blog section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="blog-slider">
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>10<span>May</span></h4>
                                                </div>
                                                <img src="images/blog/blog1.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Learning</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>05<span>May</span></h4>
                                                </div>
                                                <img src="images/blog/blog2.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Academic</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>33K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>15<span>Mar</span></h4>
                                                </div>
                                                <img src="images/blog/blog3.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Knowledge</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>11K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>10<span>Mar</span></h4>
                                                </div>
                                                <img src="images/blog/blog4.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Learning</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>25<span>Feb</span></h4>
                                                </div>
                                                <img src="images/blog/blog2.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Academic</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>33K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>28<span>Feb</span></h4>
                                                </div>
                                                <img src="images/blog/blog3.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Knowledge</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>11K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Blog -->
                                        <!-- Single Blog -->
                                        <div class="single-blog">
                                            <div class="blog-head overlay">
                                                <div class="date">
                                                    <h4>03<span>Jan</span></h4>
                                                </div>
                                                <img src="images/blog/blog4.jpg" alt="#">
                                            </div>
                                            <div class="blog-content">
                                                <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                                                <div class="blog-info">
                                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                                    <a href="#"><i class="fa fa-list"></i>Learning</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                                                </div>
                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                                                <div class="button">
                                                    <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                                </div>
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
    <section class="courses section-bg section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Popular <span>Courses</span> We Offer</h2>
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
                                <img src="images/course/course1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Quran and Ahades</span></a></h4>
                                <p>Learn the basics of Quran recitation and also advance talafuz with a bunch of ahades in this course and Make your after world a pleasent place.</p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>25 Seats</span>
                                    <span><i class="fa fa-clock-o"></i>6 Months</span>
                                </div>
                                <span class="price">Rs 3000/month</span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/course/course1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Spoken English </span></a></h4>
                                <p>Learn how to have an English conversation and gain confidence speaking English with this free course.</p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>25 Seats</span>
                                    <span><i class="fa fa-clock-o"></i>6 Months</span>
                                </div>
                                <span class="price">Rs 3000/month</span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/course/course2.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Computer</span>Courses</a></h4>
                                <p>This course is an introduction for non-computer science students. Instead this course is a gentler, lighter survey course without delving too much into technical details.</p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>20 Seats</span>
                                    <span><i class="fa fa-clock-o"></i>3 Months</span>
                                </div>
                                <span class="price">Rs 3500/month</span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/course/course3.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Science</span> Practicles</a></h4>
                                <p>This course is an intrduction for students of class 8 to onward specially for the matric level students.tought by Experianced teachers with perfect and accurate skills.</p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>25 Seat</span>
                                    <span><i class="fa fa-clock-o"></i>2 Years</span>
                                </div>
                                <span class="price">Rs 4500/month</span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/course/course1.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Art and Design</span></a></h4>
                                <p>This course is aimed at those who want to advance to British degree programmes. It allows students to get a necessary level of creative skills, both theoretical and practical. </p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>20 Seat</span>
                                    <span><i class="fa fa-clock-o"></i>3 Months</span>
                                </div>
                                <span class="price">Rs 2500/month</span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="images/course/course3.jpg" alt="#">
                                <a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="course-single.html"><span>Karaty & Gymnastic</span></a></h4>
                                <p>It is our goal that the experiences provided by these activities will contribute to the development of an active, healthy lifestyle. </p>
                            </div>
                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i>25 Seat</span>
                                    <span><i class="fa fa-clock-o"></i>6 Months</span>
                                </div>
                                <span class="price">Rs 4000/month</span>
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
                                parents/guardian. A student missing an examination will not be given a mark-up exam.</p>
                        </div>
                        <div class="text-content" style="text-align:left;margin-top: 30px;">
                            <h2 style="margin-bottom: 10px;">Uniform</h2>
                            <p>School uniform is compulsory for all students.Biys are required to take a smart hair-cut .
                             Girls are required to tir back their hair and are not allowed to any kinf of make-up or jewelry.</p>
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

@section('script')
    <script type="text/javascript">
        $( document ).ready(function() {
          



        });
    </script>
    @endsection