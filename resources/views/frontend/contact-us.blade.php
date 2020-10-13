@extends('layout.frontend.master')
@section('contact-us')
    active
@endsection
@section('content')

    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Pages</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="{{route('contact-us')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Contact Us -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>Contact</span> Information</h2>
                        <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>
                    </div>
                </div>
            </div>
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-map">
                            <!-- Map -->
                            <div id="map-image">
                                <img src="{{asset('images/map.png')}}">
                            </div>
                            <!--/ End Map -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-head">
                            <!-- Form -->
                            <form class="form" action="https://themelamp.com/html/learnedu/mail/mail.php">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email Address">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<input name="subject" type="text" placeholder="Website">--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <textarea name="message" placeholder="Comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn primary">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h3>Location</h3>
                            <p>60 Grant Ave. Central New Road 0708, UK 9766 Tanner</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h3>Email Address</h3>
                            <a href="mailto:information@gmail.com">information@yourwebsite.com</a>
                            <a href="mailto:admission@myuniversity.com">admission@yourwebsite.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h3>Get in Touch</h3>
                            <p>+ (234) 853 232 455669</p>
                            <p>+ (533) 232 423 455600</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

@endsection
