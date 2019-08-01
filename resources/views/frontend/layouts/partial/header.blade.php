<!-- Top Bar Start -->
<div class="top_bar mb-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <div class="top_bar_contact_item d-lg-block d-md-block d-none">
                    <div class="top_bar_icon">
                        <img src="{{ asset('frontend/img/flat-icons/phone.png') }}" alt="Phone">
                    </div>+880 1688 872617
                </div>

                <div class="top_bar_contact_item d-lg-block d-md-block d-none">
                    <div class="top_bar_icon">
                        <img src="{{ asset('frontend/img/flat-icons/mail.png') }}" alt="Male">
                    </div>
                    <a href="mailto:yeasir017@gmail.com">yeasir017@gmail.com</a>
                </div>

                <div class="top_bar_content ml-auto">
                    <div class="top_bar_user">
                        <div class="user_icon">
                            <img src="{{ asset('frontend/img/flat-icons/user.svg') }}" alt="User">
                        </div>
                        <div class="top_bar-reg"><a href="#">Register</a></div>
                        <div><a href="#">Sign in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Header Section Start -->
<header class="header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-lg-2 col-sm-3 col-3 order-1">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ asset('frontend/img/logo/logo-5.png') }}" alt="Online Auction System">
                    </a>
                </div>
                <!-- Header Logo End -->
            </div>

            <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
                <!-- Header Search Start -->
                <div class="header-search">
                    <div class="header_search_content">
                        <div class="header_search_form_container">
                            <form action="#" class="header_search_form clearfix">
                                <input type="search" required="required" class="header_search_input" placeholder="Search for products...">

                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('frontend/img/flat-icons/search.png') }}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Header Search End -->
            </div>

            <div class="col-lg-2 col-9 order-lg-3 order-2 text-lg-left text-right">
                <div class="header-auction-wrap d-flex flex-row align-items-center justify-content-end">
                    <div class="auction-icon">
                        <img src="{{ asset('frontend/img/flat-icons/auction-sm.png') }}" alt="Auction">
                        <div class="auction-count">
                            <span>10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-3">
                <!-- Category Menu In Scroll Start -->
                <div class="cat_menu_container {{Request::is('/')?'cat_menu-home_logic':'cat_menu_container_other-pages'}}">
                    <div class="dropdown">
                        <button class="cat-menu-other-page dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list-ul"></i> <span>Categories</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="other-page-cat-wrap">
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
                </div>
                <!-- Category Menu In Scroll End -->
            </div>

            <div class="col-lg-10 col-md-9">
                <div class="top-nav">
                    <input type="checkbox" id="menu-btn" class="menu-btn"> <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Best Bid</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
<!-- Header Section End -->
