@extends('layout.frontend.master')
@section('contact-us')
    active
@endsection
@section('content')
    <style>
        .error{
            color: red;
        }
    </style>
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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>--}}
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
                            <form class="form"  id="emailForm" name="emailForm"  method="post" action="{{route('send.email')}}">
                                @csrf
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
                            <p>1-Canal Road Mian Aziz Garden Khaira Pul Lahore</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h3>Email Address</h3>
                            <a href="mailto:ABScadetschool@gmail.com">ABScadetschool@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h3>Get in Touch</h3>
                            <p>(+92) 300 4102055</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            function initMap() {}

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