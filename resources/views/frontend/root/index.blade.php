@extends('layouts.master')

@section('content')


<!--====== Banner Area Start ======-->
<section class="banner-section">
    <div class="banner-slider">
        @foreach ($feature_banners as $banners)
            <div class="sinlge-banner">
                <div class="banner-wrapper">
                    <div class="banner-bg" style="background-image: url('{{ asset('uploads/banner')}}/{{ $banners->image}}');"></div>
                    <div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
                        <h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
                            <a href="#">
                                {{ $banners->title}}
                            </a>
                        </h3>
                        <ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
                            <li><a href="#">By - {{ $banners->RelationwithUser->name}}</a></li>
                            <li><a href="#">{{ $banners->RelationwitCategory->title}}</a></li>
                        </ul>
                        <p data-animation="fadeInUp" data-delay="1s">

                            <?php
                            $banners_des = strip_tags($banners->description);
                            $banners_id = $banners->id;
                            if(strlen($banners_des > 250)):
                                $banners_cut = substr($banners_des,0,250);
                                $endpoint = strrpos($banners_cut, " ");
                                $banners_des = $endpoint?substr($banners_cut,0,$endpoint):substr($banners_cut,0);
                                $banners_des .="..... ";
                            endif;
                            echo $banners_des;
                        ?>
                        </p>
                        <a href="blog-details.html" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="sinlge-banner">
            <div class="banner-wrapper">
                <div class="banner-bg" style="background-image: url({{ asset('master')}}/assets/img/banner/02.jpg);"></div>
                <div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
                    <h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
                        <a href="#">
                            The Olivier da Costa restaurant experience in Lisbon
                        </a>
                    </h3>
                    <ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
                        <li><a href="#">By - Zhon Smith</a></li>
                        <li><a href="#">Travel,</a><a href="#">Design,</a><a href="#">Nature</a></li>
                    </ul>
                    <p data-animation="fadeInUp" data-delay="1s">
                        When it comes to creating is a website for your busin an attractive design will only get you
                        far. With people increasingly using their tablets and smartphones and shop online,...
                    </p>
                    <a href="blog-details.html" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
                        Read More <i class="fas fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="banner-nav"></div>
</section>
<!--====== Banner Area End ======-->

<!-- Line One -->
<div class="line-one"></div>

<!--====== Image Boxes Start======-->
<section class="image-boxes-area">
    <div class="container-fluid">
        <div class="image-boxes">
            <div class="image-box" style="background-image: url('{{ asset('uploads/about/happy-graduation-girl-cap-gown-260nw-2324563821.jpg')}}');">
                <a href="{{ route('root.about')}}">About Me</a>
            </div>
            <div class="image-box" style="background-image: url('{{ asset('uploads/photo/NPI-1G-1-690x500.jpg')}}');">
                <a href="{{ route('root.photo')}}">Photos Stories</a>
            </div>
            <div class="image-box" style="background-image: url({{ asset('master')}}/assets/img/image-box/03.jpg);">
                <a href="#">Follow @ Instagram</a>
            </div>
            {{-- <div class="image-box" style="background-image: url({{ asset('master')}}/assets/img/image-box/04.jpg);">
                <a href="#">Browse Shop</a>
            </div> --}}
        </div>
    </div>
</section>
<!--====== Image Boxes End ======-->



    <!--====== Post Area Start ======-->
    <section class="post-area with-sidebar">
    <div class="container-fluid">
        <div class="post-area-inner">
            <!-- Entry Post -->

                <div class="entry-posts clearfix masonary-posts row">
                    @forelse ($feature_blogs as $blog)
                    <div class="col-xl-4 col-sm-6">
                        <div class="entry-post">
                            <div class="entry-thumbnail">
                                <img src="{{ asset('uploads/blog')}}/{{ $blog->image}}" alt="Image" href="{{ route('root.single.category.blogs',$blog->id)}}">
                            </div>
                            <div class="entry-content">
                                <h4 class="title">
                                    <a href="{{ route('root.single.category.blogs',$blog->id)}}">
                                        {{ $blog->title}}
                                    </a>
                                </h4>
                                <ul class="post-meta">
                                    <li class="date">
                                        <a href="{{ route('root.single.category.blogs',$blog->id)}}">{{ \Carbon\Carbon::parse($blog->date)->format('M,d-Y');}}</a>
                                    </li>
                                    <li class="categories">
                                        <a href="{{ route('root.single.category.blogs',$blog->id)}}">{{ $blog->RelationwithCategory->title}},</a>
                                        {{-- <a href="#">Travel,</a>
                                        <a href="#">photography,</a>
                                        <a href="#">Nature</a>  --}}
                                    </li>
                                </ul>
                                <p>
                                    <?php
                                    $blog_des = strip_tags($blog->description);
                                    $blog_id = $blog->id;
                                    if(strlen($blog_des > 350)):
                                        $blog_cut = substr($blog_des,0,350);
                                        $endpoint = strrpos($blog_cut, " ");
                                        $blog_des = $endpoint?substr($blog_cut,0,$endpoint):substr($blog_cut,0);
                                        $blog_des .="..... ";
                                    endif;
                                    echo $blog_des;
                                ?>
                                </p>
                                <a href="{{ route('root.single.category.blogs',$blog->id)}}" class="read-more">
                                    Read More <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    @empty
                    <div class="col-xl-4 col-sm-6">
                    <div class="entry-post">
                        <div class="entry-thumbnail">
                            <img src="-----" alt="Image">
                        </div>
                        <div class="entry-content">
                            <h4 class="title">
                                <a href="blog-details.html">
                                    ------
                                </a>
                            </h4>
                            <ul class="post-meta">
                                <li class="date">
                                    <a href="#">-----</a>
                                </li>
                                <li class="categories">
                                    <a href="#">-----</a>
                                    {{-- <a href="#">Travel,</a>
                                    <a href="#">photography,</a>
                                    <a href="#">Nature</a> --}}
                                </li>
                            </ul>
                            <p>
                                When it comes to creating is a website for your business, an attractive design
                                will only get you far. With people increasingly using their tablets and
                                smartphones and shop online,...
                            </p>
                            <a href="blog-details.html" class="read-more">
                                Read More <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    @endforelse


                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="load-more-btn">Load More</a>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="primary-sidebar clearfix">
                <div class="sidebar-masonary row">
                    <div class="col-lg-12 col-sm-6 widget author-widget">



                          {{-- @foreach ($fronteds as $fronted) --}}
                                    <div class="author-img">
                                        <img src="{{ asset('uploads/profile/16-Scott Armstrong-19-Dec-2023.jpg')}}">
                                    </div>
                                <h5 class="widget-title">{{ $blog->RelationwithUser->description}}</h5>
                              {{-- @endforeach --}}
                            <p>
                                When it comes to creating is a website for your business, an attractive design will only
                                get you far,...
                            </p>

                        <div class="author-signature">
                            <img src="{{ asset('master')}}/assets/img/sidebar/author-signature.png" alt="Signature">
                        </div>
                    </div>

                    {{-- all category --}}
                    <div class="col-lg-12 col-sm-6 widget categories-widget">
                        <h5 class="widget-title">Categoriesr</h5>
                        <div class="categories">
                            @foreach ($categories as $category)
                                <div class="categorie" style="background-image: url('{{ asset('uploads/category')}}/{{ $category->image}}');">
                                    <a href="{{ route('root.category.blogs',$category->id)}}">
                                    {{ $category->title}}
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 widget social-widget">
                        <h5 class="widget-title">Subscribe</h5>
                        <div class="social-links">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram
                            </a>
                            <a href="#">
                                <i class="fab fa-youtube"></i>YouTube
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest-p"></i>Pinterest
                            </a>
                        </div>
                    </div>

                    {{-- popular post --}}
                    <div class="col-lg-12 col-sm-6 widget popular-articles">
                        <h5 class="widget-title">Popular Articles</h5>
                        <div class="articles">
                            @foreach ($popular_blogs as $blog)
                                <div class="article">
                                    <div class="thumb">
                                        <img src="{{ asset('uploads/blog')}}/{{ $blog->image}}">
                                    </div>
                                    <div class="desc">
                                        <h6><a href="{{ route('root.single.category.blogs',$blog->id)}}">{{ $blog->title}}</a></h6>
                                        <span class="post-date">{{ \Carbon\Carbon::parse($blog->date)->format('M,d-Y');}}</span>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 widget ad-widget">
                        <img src="{{ asset('uploads/advertise/out (6).jpg')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Post Area End ======-->




<!--====== Instagram Area Start ======-->
<section class="instagram-section">
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
