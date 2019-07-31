@extends('frontend.layouts.main')

@section('content')
<!-- Hero Section Start -->
<div class="hero-section-wrap" style="background-color: #EBDDD4;">
    <div class="container">
        <div class="row no-gutters">
            <!-- Homepage Category Menu Start -->
            <div class="col-lg-2 col-md-3 d-lg-block d-md-block d-none">
                <div class="home-cat-fixed-menu-text">
                    <i class="fa fa-list-ul"></i> <span>categories</span>
                </div>
                <div class="home-cat-menu-wrap">
                    <ul class="home-cat-fixed-wrap">
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/sun-umbrella.png') }}"> &nbsp;
                                <span>Summer Splash</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/tree.png') }}"> &nbsp;
                                <span>Winter Hunter</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/woman.png') }}"> &nbsp;
                                <span>Women's World</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/man.png') }}"> &nbsp;
                                <span>Men's Club</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/teddy-bear.png') }}"> &nbsp;
                                <span>Kid's Zone</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/salon.png') }}"> &nbsp;
                                <span>Health &amp; Beauty</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/devices.png') }}"> &nbsp;
                                <span>Mobile &amp; Gadget</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/tower.png') }}"> &nbsp;
                                <span>Electronics</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/home.png') }}"> &nbsp;
                                <span>Home &amp; Living</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/trophy.png') }}"> &nbsp;
                                <span>Sports &amp; outdoor</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/mountain-bike.png') }}"> &nbsp;
                                <span>Biking &amp; Riding</span>
                            </a>
                        </li>
                        <li class="home-cat-fixed-item">
                            <a href="#">
                                <img src="{{ asset('frontend/img/category-icons/book.png') }}"> &nbsp;
                                <span>Books &amp; Gallery</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Homepage Category Menu End -->

            <!-- Carousel Start -->
            <div class="col-lg-10 col-md-9 col-12">

                <!-- Desktop Carousel Start -->
                <div class="hero-carousel-desktop">
                    <div class="carousel" data-flickity='{ "cellAlign": "center", "wrapAround": false, "autoPlay": 5000, "pauseAutoPlayOnHover": false}'>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>MacBook Pro</h1>
                                <h2>
                                    4-, 6-, and now 8-core Intel processors. Up to 32GB of memory for running multiple pro apps. Stunning Retina display with True Tone technology. Touch Bar and Touch ID for increased productivity.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/desktop/1.jpg') }}" alt="First Image">
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>Yamaha R15 V3</h1>
                                <h2>
                                    The previous-gen R15 lacked bottom end performance and was slow to get off the line. In contrast, R15 v3.0 gets a new and slightly larger 155cc liquid-cooled four-valve motor with more performance in the low range.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/desktop/2.jpg') }}" alt="Second Image">
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>Luca 4 Seater Sofa</h1>
                                <h2>
                                    The Luca collection is a stunning designer collection with boastful proportions. This vintage Luca sofa range features large square arms with a deep seat and extra sumptuous ‘sink into’ luxurious cushions for maximum comfort.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/desktop/3.jpg') }}" alt="Third Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Desktop Carousel End -->

                <!-- Mobile Carousel Start -->
                <div class="hero-carousel-mobile">
                    <div class="carousel" data-flickity='{ "cellAlign": "center", "wrapAround": false, "autoPlay": 5000, "pauseAutoPlayOnHover": false}'>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>MacBook Pro</h1>
                                <h2>
                                    4-, 6-, and now 8-core Intel processors. Up to 32GB of memory for running multiple pro apps. Stunning Retina display with True Tone technology. Touch Bar and Touch ID for increased productivity.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/mobile/1.jpg') }}" alt="First Image">
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>Yamaha R15 V3</h1>
                                <h2>
                                    The previous-gen R15 lacked bottom end performance and was slow to get off the line. In contrast, R15 v3.0 gets a new and slightly larger 155cc liquid-cooled four-valve motor with more performance in the low range.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/mobile/2.jpg') }}" alt="Second Image">
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="carousel-content">
                                <h1>Luca 4 Seater Sofa</h1>
                                <h2>
                                    The Luca collection is a stunning designer collection with boastful proportions. This vintage Luca sofa range features large square arms with a deep seat and extra sumptuous ‘sink into’ luxurious cushions for maximum comfort.
                                </h2>
                                <div class="common_btn">
                                    <a href="#">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-banner">
                                <img src="{{ asset('frontend/img/hero-carousel/mobile/3.jpg') }}" alt="Third Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Carousel End -->
            </div>
            <!-- Carousel End -->
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- New Arrivals Section Start -->
<div class="new-arrivals-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="new_arrivals_title">Hot New Arrivals</div>
                <div class="tabs_line"><span style="left: 645.844px; width: 79.0938px;"></span></div>
            </div>
        </div>

        <div class="row my-3 no-gutters">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/yamah.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 495000</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Yamaha YZF-R15</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="{{ url('/bid-product') }}" class="product-view-btn" target="_blank">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/1.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/2.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/3.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/4.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/5.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/6.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/7.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/8.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/img/products/9.png') }}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="assets/img/product-img/1.jpg" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="border_active active"></div>
                <div class="product-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product-image d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="assets/img/product-img/1.jpg" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <div class="product-price">
                            <span>Initial: ৳ 500</span>
                        </div>
                        <div class="product-name">
                            <div>
                                <a href="#">Astro M2 Black</a>
                            </div>
                        </div>
                        <div class="product-extras">
                            <a href="#" class="product-view-btn">View to Bid</a>
                        </div>

                        <ul class="product-marks">
                            <li class="product-mark product-new">new</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="pager-wrap">
            <ul class="pagination" role="navigation">
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">« Previous</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://cms.app?page=2" rel="next">Next »</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- New Arrivals Section End -->

<!-- Brands Section Start -->
<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">
                    <!-- Brands Slider -->
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="brands_item">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/1.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/2.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/3.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/4.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/5.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item d-flex flex-column justify-content-center">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/6.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item d-flex flex-column justify-content-center">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/7.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="brands_item d-flex flex-column justify-content-center">
                                <img class="img-fluid" src="{{ asset('frontend/img/brands/8.jpg') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brands Section End -->

<!-- Newsletter Section Start -->
<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="{{ asset('frontend/img/flat-icons/send.png') }}" alt="Send Icon"></div>
                        <div class="newsletter_title">Sign up for Newsletter</div>
                        <div class="newsletter_text"><p>...and receive %20 coupon for first bid.</p></div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                            <button class="newsletter_button">Subscribe</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->
@endsection
