@extends('frontend.layouts.main')

@section('content')

    <!-- Single Product Section Start -->
    <div class="single-product-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-product-page-title">
                        <h2>Product Bidding Page</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-des">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="bidding-product-image xzoom-container d-flex flex-column align-items-center justify-content-center text-center">
                        <img
                                id="xzoom-default"
                                class="xzoom img-fluid"
                                src="{{ asset('frontend/img/products/yamah.png') }}"
                                xoriginal="{{ asset('frontend/img/products/yamah.png') }}"
                                alt="Product Name">
                    </div>

                    <div class="share-in-social-md">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="bidding-product-content">
                        <h2 class="bidding-product-title">Yamaha YZF-R15</h2>

                        <p class="bidding-product-des">The Yamaha YZF-R15 is a single cylinder sport bike made by Yamaha Motor Company since 2008.</p>

                        <div class="bidding-product-price">
                            <span>Initial Price: ৳ 495000</span>
                        </div>

                        <form>
                            <div class="form-group">
                                <label for="biddingRate">Input your bidding rate:</label>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="biddingRate"
                                               placeholder="Enter your price">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <button type="submit" class="btn bidding-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Section End -->

    <!-- Single Product Details Section Start -->
    <div class="product-details-tab-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="product-details-tab-wrap-title">
                        About the Product
                    </h2>
                    <div class="custom-tab">
                        <div class="product-details-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Return &amp;Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="detail-title-wrap">
                                        <h3 class="detail-title"><strong>Full Description</strong></h3>
                                    </div>
                                    <div class="product-tab-des">
                                        <p>
                                            The Yamaha YZF-R15 is a single cylinder sport bike made by Yamaha Motor Company since 2008. In September 2011, the second iteration, called v2.0, was released in India, and in April 2014 it was released in Indonesia. In January 2017, the third iteration of the bike, called v3.0, was launched in Indonesia
                                        </p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="detail-title-wrap">
                                        <h3 class="detail-title"><strong>Return &amp;Policy</strong></h3>
                                    </div>
                                    <div class="product-tab-des">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi consequuntur debitis, dolore doloribus in ipsum laboriosam officiis provident quas ratione soluta temporibus voluptas? Assumenda debitis eos itaque iure nihil nobis repellat. Cumque ipsa ipsam pariatur quia ratione rerum. Consectetur exercitationem nemo sequi. Alias cum doloremque iste laboriosam maxime voluptatibus.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="detail-title-wrap">
                                        <h3 class="detail-title"><strong>Reviews</strong></h3>
                                    </div>
                                    <div class="product-tab-des text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Details Section End -->

@endsection
