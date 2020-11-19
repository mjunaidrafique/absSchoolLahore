@extends('layout.frontend.master')
@section('gallery')
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
                    <h2>Gallery</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="{{route('gallery')}}">galleryy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    <secction class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title" style="padding: 40px;">
                        <h2><span>Gallery</span></h2>
                    </div>
                </div>
                @for( $i=1; $i<25; $i++)
        <div class="col-sm-6 col-md-3" style="width: auto" >
        <div class="gallery_img">
            <a href="{{asset('images/gallery/'.$i. '.jpg')}}" data-fancybox="images">
                <img src="{{asset('images/gallery/'.$i. '.jpg')}}" class="img-thumbnail"/>
            </a>
        </div>
        </div>
        @endfor
            </div>
            </div>
        </div>
    </secction>

    <!--/ End Team -->
@endsection

