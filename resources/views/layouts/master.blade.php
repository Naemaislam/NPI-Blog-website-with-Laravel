<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmlguru.net/genial/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:54:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<!--====== Required meta tags ======-->
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--====== Title ======-->
<title> Genial Blog Html Template || Home Three </title>
<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset('master')}}/assets/img/favicon.ico" type="img/png" />
<!--====== Animate Css ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/animate.min.css">
<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/bootstrap.min.css" />
<!--====== Fontawesome css ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/font-awesome.min.css" />
<!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/magnific-popup.css" />
<!--====== Slick  css ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/slick.css" />
<!--====== Nice Select ======-->
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/jquery-nice-select.min.css" />
<!--====== Style css ======-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="{{ asset('master')}}/assets/css/style.css" />
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--====== Header part start ======-->
<header class="sticky-header">
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between">
        <div class="site-logo">
            <a href="{{ route('home')}}"><img src="{{ asset('master')}}/assets/img/logo1.png" style="height: 55px;" alt="Genial"></a>
        </div>
        <div class="header-right">
            <div class="search-area">
                <a href="javascript:void(0)" class="search-btn"><i class="fas fa-search"></i></a>
                <div class="search-form">
                    <a href="#" class="search-close"><i class="fal fa-times"></i></a>
                    <form action="{{ route('root.search.blogs')}}" method="GET">
                        <input type="search" placeholder="Type here to search" name="search_value">
                    </form>
                    <div class="search-overly"></div>
                </div>
            </div>
            <div class="shoping-cart">
                <a href="cart.html" class="shoping-cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="count">2</span>
                </a>
            </div>
            <div class="offcanvas-panel">
                <a href="javascript:void(0)" class="panel-btn">
                    <span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <div class="panel-overly"></div>
                <div class="offcanvas-items">
                    <!-- Navbar Toggler -->
                    <a href="javascript:void(0)" class="panel-close">
                        Back <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>

                    <ul class="offcanvas-menu">
                        <li>
                            <a href="{{ route('front.home')}}">Home</a>
                            {{-- <ul class="submenu">
                                <li><a href="index-1.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="">Blog Single</a></li>
                        <li><a href="{{ route('root.about')}}">About</a></li>
                        <li><a href="{{ route('root.photo')}}">Photo Stories</a></li>
                        <li><a href="{{ route('frontend.contact')}}">Contact</a></li>
                        <li><a href="{{ route('root.not.found')}}">404</a></li>
                        {{-- <li>
                            <a href="{{ route('root.shop')}}">Shop</a>
                            <ul class="submenu">
                                <li><a href="product-details.html">Shop Details -A</a></li>
                                <li><a href="product-details-2.html">Shop Details -B</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="myaccount.html">My account</a></li>
                            </ul>
                        </li> --}}
                    </ul>

                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!--====== Header part end ======-->
@yield('content')

<!--====== Footer Area Start ======-->
<footer>
<div class="footer-widgets-area">
    <div class="container container-1360">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="widget address-widget">
                    <h4 class="widget-title">Our Address</h4>
                    <p>Sydney, Australia Sheen Darus Salam. <br> 112/B, Road 8A, Dhanmondi.</p>
                    <p>+880-036987458765521 <br> example@yourmail.com</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="widget nav-widget">
                    <h4 class="widget-title">Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Stories</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="widget nav-widget">
                    <h4 class="widget-title">Categories</h4>
                    <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Food & Drinks</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Decoration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 ml-auto">
                <div class="widget newsletter-widget">
                    <h4 class="widget-title">Our Monthly Newsletter </h4>
                    <p>
                        Sign Up TO Get Updates On Articles, Interviews And Events.
                    </p>


                    <div class="botton-sub">
                        @auth
                        @if (auth()->user()->approve_status == false)
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                        <button type="submit" class="btn-subscribe">{{ auth()->user()->name }}</button>
                        </form>
                        @else
                        <a href="{{ route('home') }}" class="btn-subscribe">HOME</a>
                        @endif
                            @else
                            <div class="dr">
                                <a href="{{ route('root.author.registration') }}" class="btn-subscribe mb-3" style="border: 1px solid blue; padding:15px 25px;"><b>Sign Up</b></a>
                            </div>


                        @endauth
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright-area">
    <div class="container container-1360">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="social-links">
                    <ul>
                        <li class="title">Follow Me</li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="copyright-text text-lg-right">
                    <p><span>Copyright</span> - 2020 EasyArt theme by Easygoods</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!--====== Footer Area End ======-->

<!--====== jquery js ======-->
<script src="{{ asset('master')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{ asset('master')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="{{ asset('master')}}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('master')}}/assets/js/popper.min.js"></script>
<!--====== Slick js ======-->
<script src="{{ asset('master')}}/assets/js/slick.min.js"></script>
<!--====== Images Loaded ======-->
<script src="{{ asset('master')}}/assets/js/imagesloaded.pkgd.min.js"></script>
<!--====== Isotope js ======-->
<script src="{{ asset('master')}}/assets/js/isotope.pkgd.min.js"></script>
<!--====== Magnific Popup js ======-->
<script src="{{ asset('master')}}/assets/js/jquery.magnific-popup.min.js"></script>
<!--====== Nice Select js ======-->
<script src="{{ asset('master')}}/assets/js/jquery.nice-select.min.js"></script>
<!--====== Main js ======-->
<script src="{{ asset('master')}}/assets/js/main.js"></script>

@yield('footer_script')
{!! NoCaptcha::renderJs() !!}
</body>


<!-- Mirrored from htmlguru.net/genial/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:54:55 GMT -->
</html>
