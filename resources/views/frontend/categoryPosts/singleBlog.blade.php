@extends('layouts.master')

@section('content')

<!--====== Post Details Start ======-->
<section class="post-details-area">
<div class="container container-1000">
    <div class="post-details">
        <div class="entry-header">
            <h2 class="title">{{ $blog->title}}</h2>
            <ul class="post-meta">
                <li>{{ \Carbon\Carbon::parse($blog->date)->format('M,d-Y');}}</li>
                <li><a href="#">{{ $blog->RelationwithCategory->title}},</a></li>
            </ul>

        </div>
        <div class="entry-media text-center">
            <img src="{{ asset('uploads/blog')}}/{{ $blog->image}}" alt="image">
        </div>
        <div class="entry-content">
            <p class="has-dropcap">

                @php
                    echo $blog->description;
                @endphp
        </div>
        <div class="entry-footer">
            <div class="post-tags">
                <span>Tag:</span>
                @foreach ($blog->RelationwithTags as $tag)
                    <a href="{{ route('root.tag.blogs',$tag->id)}}">{{ $tag->title}},</a>
                @endforeach
            </div>
            <div class="social-share">
                <span>Share:</span>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="post-author">
                <div class="author-img">
                    <img src="{{ asset('uploads/profile')}}/{{ $blog->RelationwithUser->image}}" alt="PostAuthor">
                </div>
                <h5><a href="#">{{ $blog->RelationwithUser->name}}</a></h5>
                <p>
                    {{ $blog->RelationwithUser->description}}
                </p>
            </div>
        </div>
        <div class="post-nav">
            <div class="prev-post">
                <a href="#"><i class="far fa-angle-left"></i></a><span class="title">Previous Post</span>
            </div>
            <div class="next-post">
                <span class="title">Next Post</span><a href="#"><i class="far fa-angle-right"></i></a>
            </div>
        </div>
        <div class="related-posts">
            <h4 class="related-title">Related Posts</h4>
            <div class="related-loop row justify-content-center">
                @foreach ($related_blogs as $banners)
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="related-post-box">
                            <div class="thumb">
                                <img src="{{ asset('uploads/banner')}}/{{ $banners->image}}" alt="image">
                            </div>
                            <h5 class="title">
                                <a href="#">
                                {{ $banners->title}}
                                </a>
                            </h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="comment-template">
        <h4 class="template-title">04 Comments</h4>
        @foreach ($comments as $comment)
        <ul class="comment-list">
            <li>
                {{-- @foreach ($comments as $comment) --}}
                   <div class="comment-body">
                       <div class="comment-author">
                           <img src="{{ Avatar::create($comment->name)->toBase64() }}" alt="image">
                       </div>
                       <div class="comment-content">
                           <h6 class="comment-author">{{ $comment->name}}</h6>
                           <p>
                            {{ $comment->message}}
                           </p>
                           <div class="comment-footer">
                               <span class="date"> 10:35pm, {{ \Carbon\Carbon::parse($comment->created_at)->format('M,d-Y');}}.</span>
                               <a href="#replies" class="btn-reply rana" onclick="clickF(event)" id="{{ $comment->id}}"><i class="las la-reply"></i> Reply</a>
                           </div>
                       </div>
                   </div>


                   @foreach ($comment->relationwithreply as $reply )
                   <div class="comment-body mt-2" style="margin-left: 90px !important;">
                    <div class="comment-author">
                        <img src="{{ Avatar::create($reply->name)->toBase64() }}" alt="image">
                    </div>
                    <div class="comment-content">
                        <h6 class="comment-author">{{ $reply->name}}</h6>
                        <p>
                         {{ $reply->message}}
                        </p>
                        <div class="comment-footer">
                            <span class="date"> 10:35pm, {{ \Carbon\Carbon::parse($reply->created_at)->format('M,d-Y');}}.</span>
                            <a href="#replies" class="btn-reply rana" onclick="clickF(event)" id="{{ $reply->id}}"><i class="las la-reply"></i> Reply</a>
                        </div>
                    </div>
                </div>
                @foreach ($reply->relationwithreply as $subreply )
                <div class="comment-body mt-2" style="margin-left: 180px !important;">
                    <div class="comment-author">
                        <img src="{{ Avatar::create($subreply->name)->toBase64() }}" alt="image">
                    </div>
                    <div class="comment-content">
                        <h6 class="comment-author">{{ $subreply->name}}</h6>
                        <p>
                         {{ $subreply->message}}
                        </p>
                        <div class="comment-footer">
                            <span class="date"> 10:35pm, {{ \Carbon\Carbon::parse($subreply->created_at)->format('M,d-Y');}}.</span>
                            {{-- <a href="#replies" class="btn-reply rana" onclick="clickF(event)" id="{{ $subreply->id}}"><i class="las la-reply"></i> Reply</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
                   @endforeach
             @endforeach
            </li>
        </ul>


        <h4 class="template-title">Leave your comment</h4>
        @auth
        <div class="comment-form">
            <form action="{{ route('root.comment.post')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Enter your name" name="name" value="{{ auth()->user()->name}}">
                        <input type="hidden"  name="post_id" value="{{ $blog->id}}">
                        <input type="hidden"  name="user_id" value="{{ (auth()->id()) ? auth()->id() : '0'}}">
                        <input type="hidden" class="life"  name="parent_id" value="">
                    </div>
                    <div class="col-sm-6">

                        <input type="email" placeholder="Your Email" name="email" value="{{auth()->user()->email}}">

                    </div>
                    <div class="col-12">
                        <textarea placeholder="Your message here" name="message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit">Post <i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="comment-form" id="replies">
            <form action="{{ route('root.comment.post')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Enter your name" name="name">
                        <input type="hidden"  name="post_id" value="{{ $blog->id}}">
                        <input type="hidden"  name="user_id" value="{{ (auth()->id()) ? auth()->id() : '0'}}">
                        <input type="hidden" class="life"  name="parent_id" value="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" placeholder="Your Email" name="email">

                    </div>
                    <div class="col-12">
                        <textarea placeholder="Your message here" name="message"></textarea>

                    </div>
                    <div class="col-12">
                        <button type="submit">Post <i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
        @endauth

    </div>
</div>
</section>
<!--====== Post Details End ======-->


<!--====== Instagram Area Start ======-->
<section class="instagram-section">
<div class="container-fluid p-0">
    <h5 class="instagram-title">
        Follow Us <span class="instagram-icon"><i class="fab fa-instagram"></i></span> Instagram
    </h5>
    <div class="instagram-images">
        <div class="image">
            <img src="assets/img/instagram/01.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/02.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/03.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/04.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/05.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/06.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/07.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/01.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/02.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/03.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/04.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/05.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/06.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="image">
            <img src="assets/img/instagram/07.jpg" alt="Instagram-image">
            <a class="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</section>
<!--====== Instagram Area End ======-->


@endsection

@section('footer_script')


@section('footer_script')

<Script>

let rana = document.querySelector('.rana');
let input = document.querySelector('.life');

function clickF(event){
let x = event.target.getAttribute('id')
input.value = x;
}
</Script>

@endsection
