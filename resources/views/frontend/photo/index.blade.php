@extends('layouts.master')

@section('content')

<!--====== Photo Stories Section Start ======-->
<section class="photo-stories-section" id="photoStoriesLoaded">
    <div class="container container-1360">
        <div class="photo-stories-heading">
            <h1 class="title">Photo Stories</h1>

               <ul class="photo-stories-nav">
                   <li data-filter="*" class="active">All Images</li>
                   @foreach ($categories as $category)
                   <li data-filter=".nature">{{ $category->title}}</li>
                   @endforeach
               </ul>

        </div>
        <div class="photo-stories row justify-content-center">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-sm-6 photo-item design illustration">
                    <div class="photo-wrap text-center">
                        <div class="photo">
                            <img src="{{ asset('uploads/blog')}}/{{ $blog->image}}" alt="Image">
                            <a href="assets/img/photo-stories/01.jpg" class="photo-view">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-sm-6 photo-item nature travel">
                <div class="photo-wrap text-center">
                    <div class="photo">
                        <img src="assets/img/photo-stories/02.jpg" alt="Image">
                        <a href="assets/img/photo-stories/02.jpg" class="photo-view">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 photo-item travel design">
                <div class="photo-wrap text-center">
                    <div class="photo">
                        <img src="assets/img/photo-stories/03.jpg" alt="Image">
                        <a href="assets/img/photo-stories/03.jpg" class="photo-view">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 photo-item illustration">
                <div class="photo-wrap">
                    <div class="photo">
                        <img src="assets/img/photo-stories/04.jpg" alt="Image">
                        <a href="assets/img/photo-stories/04.jpg" class="photo-view">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 photo-item illustration nature">
                <div class="photo-wrap text-center">
                    <div class="photo">
                        <img src="assets/img/photo-stories/06.jpg" alt="Image">
                        <a href="assets/img/photo-stories/06.jpg" class="photo-view">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 photo-item travel design">
                <div class="photo-wrap text-center">
                    <div class="photo">
                        <img src="assets/img/photo-stories/05.jpg" alt="Image">
                        <a href="assets/img/photo-stories/05.jpg" class="photo-view">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="text-center">
            <a href="#" class="photo-stories-btn">Load More</a>
        </div>
    </div>
</section>
<!--====== Photo Stories Section End ======-->

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
