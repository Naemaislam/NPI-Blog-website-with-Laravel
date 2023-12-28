@extends('layouts.master')

@section('content')

<!--====== About Section Start ======-->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="about-img">
                    <img src="{{ asset('uploads/about/WhatsApp Image 2023-11-28 at 11.16.56 PM.jpeg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="about-text">
                    <h1 class="title">Why Choose Me</h1>
                    <p class="subtitle">Laravel Developer</p>
                    <p>
                      <b> I want to work as a passionate and hard working
                        web developer with a reputed IT Company.Want
                        improve success of an organization while also
                       developing my career.</b>

                    </p>
                    <ul class="social-links">
                        <li><span>Follow Me :</span></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== About Section End ======-->

<!--====== Instagram Area Start ======-->
<section class="instagram-section border-top">
    <div class="container-fluid p-0">
        <h5 class="instagram-title">
            Follow Us <span class="instagram-icon"><i class="fab fa-instagram"></i></span> Instagram
        </h5>
        <div class="instagram-images">
            @foreach ($categories as $category)
            <div class="image">
                <img src="{{ asset('uploads/category')}}/{{ $category->image}}" alt="Instagram-image">
                <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!--====== Instagram Area End ======-->


@endsection
