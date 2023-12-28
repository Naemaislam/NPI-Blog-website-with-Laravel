@extends('layouts.master')

@section('content')

  <!--====== Shop Wrapper Start ======-->
  <section class="shop-wrapper section-gap-100-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <div class="main-images-slider">
                        <div class="imgae">
                            <img src="assets/img/products/products-details/gallery-01.jpg" alt="MainImage">
                        </div>
                        <div class="imgae">
                            <img src="assets/img/products/products-details/gallery-01.jpg" alt="MainImage">
                        </div>
                        <div class="imgae">
                            <img src="assets/img/products/products-details/gallery-01.jpg" alt="MainImage">
                        </div>
                        <div class="imgae">
                            <img src="assets/img/products/products-details/gallery-01.jpg" alt="MainImage">
                        </div>
                    </div>
                    <div class="dots-images-slider row">
                        <div class="image col">
                            <img src="assets/img/products/products-details/gallery-thumb-01.jpg" alt="ThumbImage">
                        </div>
                        <div class="image col">
                            <img src="assets/img/products/products-details/gallery-thumb-02.jpg" alt="ThumbImage">
                        </div>
                        <div class="image col">
                            <img src="assets/img/products/products-details/gallery-thumb-03.jpg" alt="ThumbImage">
                        </div>
                        <div class="image col">
                            <img src="assets/img/products/products-details/gallery-thumb-03.jpg" alt="ThumbImage">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-summary">
                    <h2 class="title">Product  the camera wonderful version</h2>
                    <span class="price"><del>$250</del>$199</span>
                    <div class="product-rating">
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <span class="rating-text">(15 review)</span>
                    </div>
                    <div class="short-dec">
                        <p>
                            Lorem ipsum dolor sit amet, consec ku tetur adipiscing elit. Cras vitae nibh nisl. Cras et mauris eget lorem ultricies fermentum a in diam. Morbi mollis pellent esque aug ue nec rhoncus.
                        </p>
                        <p>
                            Nam ut orci augue john. Phase llus ac venenatis orci. Nullam iaculis lao reet massa, vitae tempus ante tinci dunte et. Lorem ultricies ferme ntum a in diam. Morbi mollis pllentesque aug ue nec rho ncus.
                        </p>
                    </div>
                    <div class="product-meta">
                        <ul class="categories">
                            <li class="meta-title">Categories: </li>
                            <li><a href="#">Handi,</a></li>
                            <li><a href="#">Csam,</a></li>
                            <li><a href="#">brand,</a></li>
                            <li><a href="#">camera</a></li>
                        </ul>
                    </div>
                    <div class="add-to-cart-form">
                        <form action="#">
                            <div class="quantity-area">
                                <div class="quantity-box">
                                    <input type="number" value="1" id="quantity">
                                    <span class="quantity-plus" id="quantityUP">
                                        <i class="fas fa-angle-up"></i>
                                    </span>
                                    <span class="quantity-minus" id="quantityDown">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </div>
                                <div class="form-button">
                                    <button type="submit">ADD TO CART</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="product-tabs">
                    <ul class="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#review" role="tab" data-toggle="tab">Reviews (3)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="description">
                            <div class="description-content">
                                <h4 class="tab-title">Product  Description</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consec ku tetur adipiscing elit. Cras vitae nibh nisl. Cras et mauris eget lorem ultricies fermentum a in diam. Morbi mollis pellent esque aug ue nec rhoncus. Nam ut orci augue john. Phase llus ac venenatis orci. Nullam iaculis lao reet massa, vitae tempus ante tinci dunte et. Lorem ultricies ferme ntum a in diam. Morbi mollis pllentesque aug ue nec rho ncus. Nam ut orci  Suspendisse iaculis laoreet eros, a yee natis metus....
                                </p>
                                <div class="description-gallery">
                                    <div class="image">
                                        <img src="assets/img/products/products-details/01.jpg" alt="Gallery">
                                    </div>
                                    <div class="image">
                                        <img src="assets/img/products/products-details/02.jpg" alt="Gallery">
                                    </div>
                                    <div class="image">
                                        <img src="assets/img/products/products-details/03.jpg" alt="Gallery">
                                    </div>
                                </div>
                                <p>
                                    Dolor sit amet, consec ku tetur adipiscing elit. Cras vitae nibh nisl. Cras et mauris eget lorem ultricies fermentum a in diam. Morbi mollis pellent esque aug ue nec rhoncus. Nam ut orci augue john. Phase llus ac venenatis orci. Nullam iaculis lao reet massa, vitae tempus ante tinci dunte et. Lorem ultricies ferme ntum a in diam. Morbi mollis pllentesque aug ue nec rho ncus. Nam ut orci  Suspendisse iaculis laoreet eros, a yee natis metus....
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="review">
                            <div class="review-area">
                                <h4 class="tab-title">Product  Reviews</h4>
                                <h6 class="review-title">3 Reviews</h6>
                                <div class="review-list">
                                    <div class="single-review-box">
                                        <div class="author-img">
                                            <img src="assets/img/products/products-details/review-01.jpg" alt="Review">
                                        </div>
                                        <div class="review-desc">
                                            <h6>
                                                Robert
                                                <span class="date"> 10:35pm,  27 Nov 2020.</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum.
                                            </p>
                                            <ul class="rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-review-box">
                                        <div class="author-img">
                                            <img src="assets/img/products/products-details/review-02.jpg" alt="Review">
                                        </div>
                                        <div class="review-desc">
                                            <h6>
                                                Rohana
                                                <span class="date"> 10:35pm,  27 Nov 2020.</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum.
                                            </p>

                                            <ul class="rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-review-box">
                                        <div class="author-img">
                                            <img src="assets/img/products/products-details/review-03.jpg" alt="Review">
                                        </div>
                                        <div class="review-desc">
                                            <h6>
                                                Zara Smith
                                                <span class="date"> 10:35pm,  27 Nov 2020.</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum.
                                            </p>
                                            <ul class="rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <h6 class="review-title">Add A Review</h6>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea placeholder="Write comment....."></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Email*">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit">Submit</button>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <p>
                                                        <input type="checkbox" id="saveComment">
                                                        <label for="saveComment">Notify me of follow-up comments by email.</label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="newletter">
                                                        <label for="newletter">Notify me of new posts by email.</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
