@extends('components.layouts.base')

@section('title')
    About Us
@endsection

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">About Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row tab-section cmt-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="res-991-pr-0 pr-40">
                            <div class="section-title with-desc">
                                <div class="title-header">
                                    <h2 class="title">Aerotek Lanka (Pvt) Ltd</h2>
                                </div>
                                <div class="title-desc">
                                    <p>AEROTEK LANKA (PVT) LTD provides high technology Ventilation Systems for your ventilation requirements. We can bring in a very comfortable atmosphere using our great experience in handling air that you require, efficiently and cost effectively. We can provide solutions for your requirements.</p>
                                </div>
                                <ul class="about-subpoints">
                                    <li>Fresh Air Inflow Systems</li>
                                    <li>Heat Air Exhaust Systems</li>
                                    <li>Dust Collecting and Extraction Systems</li>
                                    <li>Fume, Gas, Smoke Extraction and Purify Systems</li>
                                    <li>Kitchen Ventilation Systems</li>
                                    <li>Cyclones, Scrubbers - Venturing / Spray Systems</li>
                                    <li>Fabrication of all Ducting Systems</li>
                                    <li>Supply of Ventilation Fans, Evaporative Coolers, Filters, Grills, Louvers and other Ventilation Accessories</li>
                                </ul>
                            </div>
                            <div class="cmt-tabs cmt-tab-style-01 mt_10 clearfix" data-effect="fadeIn">
                                <ul class="tabs">
                                    <li class="tab active"><a href="#"><i class="flaticon flaticon-legal"></i>Our Vision</a></li>
                                    <li class="tab"><a href="#"><i class="flaticon flaticon-legal"></i>Our Mission</a></li>
                                    <li class="tab"><a href="#"><i class="flaticon flaticon-legal"></i>Our Goals</a></li>
                                </ul>
                                <div class="content-tab">
                                    <div class="content-inner active">
                                        <p><img alt="vision" class="alignleft" height="150" src="{{ asset('images/vision.jpg') }}" width="150"></p>
                                        <p>To be a world class acclaimed Mechanical Ventilation Solutions Company, giving Total Engineering Solutions to the entire Satisfaction of the Customers.</p>
                                    </div>
                                    <div class="content-inner">
                                        <p><img alt="misssion" class="alignleft" height="150" src="{{ asset('images/mission.jpg') }}" width="150">To provide superb customer service and to offer the highest Mechanical Ventilation options available.</p>
                                        <p>To keep up with advances in Mechanical Ventilation technology to continually expand our base of knowledge and expertise.</p>
                                        <p>To always remain aware of our responsibility to our environment and educate our customers and staff on eco-friendly options.</p>
                                    </div>
                                    <div class="content-inner">
                                        <p>
                                        <p><i class="ti ti-check"></i><span class="cmt-list-li-content pl-3">Listen to our customers and exceed their expectations with every opportunity.</span></p>
                                        <p><i class="ti ti-check"></i><span class="cmt-list-li-content pl-3">Listen to our people who do the work.</span></p>
                                        <p><i class="ti ti-check"></i><span class="cmt-list-li-content pl-3">Hold each member accountable for results, with a clear understanding that ethical standards must NEVER be compromised.</span></p>
                                        <p><i class="ti ti-check"></i><span class="cmt-list-li-content pl-3">Have the attitude: “One for all and all for one”, encourage and support like family.</span></p>
                                        <p><i class="ti ti-check"></i><span class="cmt-list-li-content pl-3">Always professional, courteous, understanding, eager, and enthusiastic.</span></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-991-pb-40">
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-icon-btn-left cmt-btn-color-skincolor mt-10 mr-2" href="{{ route('contact.index') }}"><i class="fa fa-headphones"></i>Request Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-inline-block cmt_single_image-wrapper position-relative">
                            <img alt="" class="img-fluid" height="574" src="{{ asset('images/about.png') }}" width="514">
                            <div class="d-flex mt_140 ml-90 res-991-m-0 res-991-mt-30 position-relative z-index-2">
                                <div class="cmt-bgcolor-highlight pl-5"></div>
                                <div class="d-inline w-100 pt-25 pb-15 cmt-bgcolor-white box-shadow pl-20 pr-20 text-left">
                                    <h3 class="mb-5">We Build for Your Comfort</h3>
                                    <p>Any Questions? Call Us:<span class="font-size-18 cmt-textcolor-highlight"><br><strong>{{ env('APP_PHONE_1') }}</strong></span></p>
                                </div>
                            </div>
                            <div class="about-all-in-one-title">
                                <h2 class="title">Go All In With All In One</h2>
                                <div class="content-inner">
                                    <p>
                                    <p><i class="ti ti-star"></i><span class="cmt-list-li-content pl-3">We Specialize in Energy-Efficient Ventilation Systems</span></p>
                                    <p><i class="ti ti-star"></i><span class="cmt-list-li-content pl-3">We'll Provide Honesty, Integrity, and Great Value</span></p>
                                    <p><i class="ti ti-star"></i><span class="cmt-list-li-content pl-3">Honest, Cost-Effective Services, from Beginning to End</span></p>
                                    <p><i class="ti ti-star"></i><span class="cmt-list-li-content pl-3">We Pride Ourselves in Always Exceeding Your Expectations</span></p>
                                    <p><i class="ti ti-star"></i><span class="cmt-list-li-content pl-3">Your Ventilation Project Will Always Be Completed Ahead of Time or on Schedule</span></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row experience-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <div class="d-flex">
                            <div class="col">
                                <div class="cmt_single_image-wrapper about-story-img">
                                    <img alt="" class="img-fluid" height="610" src="{{ asset('images/about-2.jpg') }}" width="571">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="pt-30 res-991-pt-40">
                            <div class="section-title with-desc">
                                <div class="title-header">
                                    <h2 class="title">Our Story</h2>
                                </div>
                                <div class="title-desc">
                                    <p>AEROTEK LANKA (PVT) LTD is a Professional Mechanical Ventilation Company in Sri Lanka Specialized in Cater to Domestic, Commercial and Industrial Mechanical Ventilation Requirements of the HVAC Sector.</p>
                                    <p>AEROTEK LANKA (PVT) LTD was established in 2016 and registered office is located in Gampaha district, Urapola and the Design office is located in Nittambuwa city.</p>
                                    <p>AEROTEK LANKA (PVT) LTD has strong technology strength, which has created a good platform for the company's technological innovation, related product research and development.</p>
                                    <p>At present AEROTEK LANKA (PVT) LTD carryout very sustainable designing, fabrication and installation of Ventilation Systems, Evaporative Cooling Systems and Air Conditioning Systems.</p>
                                    <p>Our solutions are widely used in production industries, factories, garments, hotels, hospitals, laboratories, pharmaceuticals, workshops, painting booths, high rise buildings, warehouses, poultry houses, greenhouses and residential requirements.</p>
                                    <p>We are very much perceived for our responsiveness, workmanship, and nature of work and most clients are happy with our administrations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="cmt-row client-section cmt-bgcolor-grey clearfix">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="title-header pt-20">
                            <h2 class="title">Our Valuable Customers</h2>
                        </div>
                        <div class="row cmt-vertical_sep slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "autoplaySpeed": 1000, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                            @include('components.includes.clients')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
