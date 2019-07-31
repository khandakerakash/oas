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
                <div class="cat-menu-on-scroll-wrap view-only-scroll">
                    <ul class="">
                        <li></li>
                    </ul>
                </div>
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
