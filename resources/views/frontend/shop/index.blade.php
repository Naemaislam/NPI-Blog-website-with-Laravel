@extends('layouts.master')

@section('content')

 <!--====== Shop Wrapper Start ======-->
 <section class="shop-wrapper section-gap-80-120">
    <div class="container-fluid">
        <div class="product-top">
            <div class="row">
                <div class="col-sm-6">
                    <div class="shop-page-title">
                        <h2>Shop</h2>
                        <p>Showing 1-15 of 16 results</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="product-sorting text-right">
                        <select class="right">
                            <option value="1">Sort by popularity</option>
                            <option value="2">Sort by average rating</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                          </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area">
            <div class="product-loop row justify-content-center">
                @foreach ($shops as $shop)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-product">
                            <div class="product-thumb">
                                <img src="{{ asset('uploads/shop')}}/{{ $shop->image}}" alt="ProductImage">
                                <div class="more-btn">
                                    <span class="more-icon">+</span>
                                    <a href="{{ route('root.single.product.')}}" class="more-link">More</a>
                                </div>
                            </div>
                            <h5 class="title"><a href="product-details.html">{{ $shop->title}}</a></h5>
                            <div class="product-action">
                                <div class="icon">
                                    <span class="currency">$</span>
                                    <span class="plus-icon">+</span>
                                </div>
                                <div class="hover-icon">
                                    <span class="price">${{ $shop->price}}</span>
                                    <a href="#" class="add-to-cart">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/16.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/02.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/03.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/04.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/05.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/06.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/07.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/08.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/09.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/10.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/11.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/12.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/13.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/14.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/products/15.jpg" alt="ProductImage">
                            <div class="more-btn">
                                <span class="more-icon">+</span>
                                <a href="product-details.html" class="more-link">More</a>
                            </div>
                        </div>
                        <h5 class="title"><a href="product-details.html">Bottle Design</a></h5>
                        <div class="product-action">
                            <div class="icon">
                                <span class="currency">$</span>
                                <span class="plus-icon">+</span>
                            </div>
                            <div class="hover-icon">
                                <span class="price">$125:00</span>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-pagination">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</section>
<!--====== Shop Wrapper End ======-->

<!--====== Instagram Area Start ======-->
<section class="instagram-section border-top">
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
