<header class="header cmt-header-style-01" id="masthead">
    <div class="top_bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 d-flex align-items-center flex-row">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div>
                        <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-phone"></i></div>
                        {{ env('APP_PHONE_1') }}
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-map-marker"></i></div>
                        {{ env('APP_ADDRESS_1') }}
                    </div>
                    <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                        <ul class="social-icons d-flex">
                            <li><a href="https://www.facebook.com/aeroteklk" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/manoj-ranasinghe-267a51220" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="top_bar_contact_item header_search">
                        <a class="btn-default search_btn" href="#"><i class="fa fa-search"></i></a>
                        <div class="header_search_content">
                            <div class="header_search_content_inner">
                                <a class="close_btn" href="#"><i class="ti ti-close"></i></a>
                                <form action="#" id="searchbox" method="get">
                                    <input class="search_query" id="search_query_top" name="keyword" placeholder="Enter Keyword" required type="text">
                                    <button class="btn close-search" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-header-menu" id="site-header-menu">
        <div class="site-header-menu-inner cmt-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-navigation d-flex cmt-bgcolor-darkgrey flex-row">
                            <div class="site-branding pl-15 res-1199-pl-0 mr-auto">
                                <a class="home-link" href="{{ route('index') }}" title="{{ env('APP_NAME') }}">
                                    <img alt="" class="img-center" id="logo-img" src="{{ asset('images/logo/logo.png') }}">
                                </a>
                            </div>
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="mega-menu-item {{ request()->is('about*') ? 'active' : '' }}">
                                        <a href="{{ route('about.index') }}">About Us</a>
                                    </li>
                                    <li class="mega-menu-item {{ request()->is('services*') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}">Services</a>
                                    </li>
                                    <li class="mega-menu-item {{ request()->is('project*') ? 'active' : '' }}">
                                        <a href="{{ route('projects.index') }}">Projects</a>
                                    </li>
                                    <li class="mega-menu-item {{ request()->is('product*') ? 'active' : '' }}">
                                        <a href="{{ route('products.index') }}">Products</a>
                                    </li>
                                    <li class="mega-menu-item {{ request()->is('contact*') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header_extra d-flex align-items-center justify-content-end flex-row">
                                <div class="header_btn">
                                    <a class="cmt-btn cmt-btn-size-sm cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor" href="{{ route('contact.index') }}">
                                        <i class="fa fa-plus"></i>REQUEST QUOTE
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
