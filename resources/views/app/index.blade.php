@extends('components.layouts.base')

@section('title')
    Home
@endsection

@section('content')
    <rs-module-wrap data-source="gallery" id="rev_slider_2_1_wrapper" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module data-version="6.3.3" id="rev_slider_2_1" style="">
            <rs-slides>
                <rs-slide data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;" data-key="rs-2" data-thumb="{{ asset('images/slide-1.jpg') }}" data-title="Slide">
                    <img class="rev-slidebg" data-no-retina height="930" src="{{ asset('images/slide-1.jpg') }}" title="mainslider-img01" width="1920">
                    <rs-layer data-color="#ffffff" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:110;sp:600;sR:110;" data-frame_999="o:0;st:w;sR:8290;" data-rsp_ch="on" data-text="w:normal;s:18,18,14,13;l:30,30,30,35;fw:500,500,600,600;" data-type="text" data-xy="x:c;xo:0,0,30px,0;yo:365px,207px,100px,99px;" id="slider-1-slide-2-slide-3-layer-0" style="z-index:8;font-family:Jost;text-transform: uppercase;">Ventilation Solutions Expert</rs-layer>
                    <rs-layer data-color="#ffffff" data-dim="w:270px,270px,210px,129px;h:2px,2px,1px,1px;" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" data-rsp_ch="on" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-type="shape" data-vbility="t,t,t,f" data-xy="x:c;xo:0,0,28px,327px;y:m;yo:-66px,-142px,-98px,-59px;" id="slider-1-slide-2-layer-1" style="z-index:9;font-family:Jost;background-color: #fccc00;"></rs-layer>
                    <rs-layer data-color="#ffffff" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:270;sp:800;sR:270;" data-frame_999="o:0;st:w;sR:7930;" data-rsp_ch="on" data-text="w:normal;s:72,72,45,30;l:75,75,65,35;fw:600;" data-type="text" data-xy="x:c;xo:0,0,30px,0;yo:432px,283px,143px,140px;" id="slider-1-slide-2-layer-2" style="z-index:10;font-family:Jost;">
                        <p class="slider-title">Your Mechanical <span class="cmt-textcolor-skincolor">Ventilation </span> Systems Partner</p>
                    </rs-layer>
                    <rs-layer data-color="#fccc00" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:600;sp:500;sR:600;" data-frame_999="o:0;st:w;sR:7900;" data-rsp_ch="on" data-text="s:18,18,15,9;l:30,30,25,15;a:center;" data-type="text" data-vbility="t,t,t,f" data-xy="x:c;xo:0,0,30px,635px;yo:541px,401px,215px,136px;" id="slider-1-slide-2-layer-3" style="z-index:11;font-family:Jost;">Industrial, Commercial & Domestic Ventilation System Consultants, <br />Designers & Contractors.</rs-layer>
                    <a class="rs-layer cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-btn-color-highlight" data-border="bor:5px,5px,5px,5px;" data-color="#ffffff" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:720;sp:500;sR:720;" data-frame_999="o:0;st:w;sR:7780;" data-frame_hover="c:#fff;bgc:#fccc00;boc:#fccc00;bor:5px,5px,5px,5px;bos:solid;bow:1px,1px,1px,1px;" data-padding="t:15,15,15,12;r:43,43,35,30;b:15,15,15,12;l:43,43,35,30;" data-rsp_ch="on" data-text="w:normal;s:15,15,14,14;l:19,19,14,14;fw:500;" data-type="text" data-xy="x:c;xo:0,0,30px,0;y:m;yo:207px,150px,98px,45px;" href="{{ route('about.index') }}" id="slider-1-slide-2-layer-4" rel="nofollow" style="z-index:15;font-family:Jost;text-transform:capitalize;" target="_self">Read More</a>
                </rs-slide>
                <rs-slide data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;" data-key="rs-4" data-thumb="{{ asset('images/slide-2.jpg') }}" data-title="Slide">
                    <img class="rev-slidebg" data-no-retina height="930" src="{{ asset('images/slide-2.jpg') }}" title="mainslider-img02" width="1920">
                    <rs-layer data-color="#ffffff" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:110;sp:600;sR:110;" data-frame_999="o:0;st:w;sR:8290;" data-rsp_ch="on" data-text="w:normal;s:18,18,14,13;l:30,30,30,35;fw:500,500,600,600;" data-type="text" data-xy="x:c;xo:0,0,30px,0;yo:365px,207px,100px,99px;" id="slider-3-slide-2-slide-1-layer-0" style="z-index:8;font-family:Jost;text-transform: uppercase;">Ventilation Solutions Expert</rs-layer>
                    <rs-layer data-color="#ffffff" data-dim="w:270px,270px,210px,129px;h:2px,2px,1px,1px;" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" data-rsp_ch="on" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-type="shape" data-vbility="t,t,t,f" data-xy="x:c;xo:0,0,28px,327px;y:m;yo:-66px,-142px,-98px,-59px;" id="slider-3-slider-2-slide-1-layer-1" style="z-index:9;font-family:Jost;background-color: #fccc00;"></rs-layer>
                    <rs-layer data-color="#ffffff" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:270;sp:800;sR:270;" data-frame_999="o:0;st:w;sR:7930;" data-rsp_ch="on" data-text="w:normal;s:72,72,45,30;l:75,75,65,35;fw:600;" data-type="text" data-xy="x:c;xo:0,0,30px,0;yo:432px,283px,143px,140px;" id="slider-1-slider-2-slide-3-layer-2" style="z-index:10;font-family:Jost;">
                        <p class="slider-title">Your Mechanical <span class="cmt-textcolor-skincolor">Ventilation </span> Systems Partner</p>
                    </rs-layer>
                    <rs-layer data-color="#fccc00" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:600;sp:500;sR:600;" data-frame_999="o:0;st:w;sR:7900;" data-rsp_ch="on" data-text="s:18,18,15,9;l:30,30,25,15;a:center;" data-type="text" data-vbility="t,t,t,f" data-xy="x:c;xo:0,0,30px,635px;yo:541px,401px,215px,136px;" id="slider-2-slide-4-layer-3" style="z-index:11;font-family:Jost;">Industrial, Commercial & Domestic Ventilation System Consultants, <br />Designers & Contractors.</rs-layer>
                    <a class="rs-layer cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-btn-color-highlight" data-border="bor:5px,5px,5px,5px;" data-color="#ffffff" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:720;sp:500;sR:720;" data-frame_999="o:0;st:w;sR:7780;" data-frame_hover="c:#fff;bgc:#fccc00;boc:#fccc00;bor:5px,5px,5px,5px;bos:solid;bow:1px,1px,1px,1px;" data-padding="t:15,15,15,12;r:43,43,35,30;b:15,15,15,12;l:43,43,35,30;" data-rsp_ch="on" data-text="w:normal;s:15,15,14,14;l:19,19,14,14;fw:500;" data-type="text" data-xy="x:c;xo:0,0,30px,0;y:m;yo:207px,150px,98px,45px;" href="{{ route('about.index') }}" id="slider-2-slide-5-layer-4" rel="nofollow" style="z-index:15;font-family:Jost;text-transform:capitalize;" target="_self">Read More</a>
                </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <div class="site-main">
        <section class="cmt-row about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmt_single_image-wrapper">
                            <img alt="" class="img-fluid"src="{{ asset('images/about.png') }}" height="490" width="465">
                        </div>
                        <div class="fid cmt-fid inside fid-highlight-box-1 cmt-bgcolor-highlight">
                            <div class="cmt-fid-contents">
                                <h4 class="cmt-fid-inner">
                                    <span class="numinate" data-after-style="sub" data-after="" data-appear-animation="animateDigits" data-before-style="sup" data-before="" data-from="0" data-interval="5" data-to="452">452</span><span>+</span>
                                </h4>
                                <h3 class="cmt-fid-title">Projects Completed</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pt-40">
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>Why Choose Us?</h3>
                                    <h2 class="title">Mechanical Ventilation System Consultants, Designers & Contractors</h2>
                                </div>
                                <h5 class="mt-3">Why We're The Right Choice for You?</h5>
                                <div class="title-desc">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Fast and Flexible Service</li>
                                                    <li>Guaranteed On-Time Service</li>
                                                    <li>24/7 Availability</li>
                                                    <li>Transparent Pricing</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Full One Year Guarantee</li>
                                                    <li>We Respect Our Customers</li>
                                                    <li>Trusted Engineering Team</li>
                                                    <li>100% Customer Satisfaction</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cmt-horizontal_sep width-100 mt-40 mb-0"></div>
                        <h5 class="mt-3">Our Valuable Customers</h5>
                        <div class="row slick-slide_ver-sep slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 3}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                            @include('components.includes.clients')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row services-section cmt-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3>Our Services</h3>
                                <h2 class="title">Quality Service At Affordable Prices</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots":false, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}}, {"breakpoint":640,"settings":{"slidesToShow": 1}}]}'>
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="featured-thumbnail">
                                <a href="{{ route('services.index') }}"><img alt="" class="img-fluid" src="{{ asset('images/service-1.jpg') }}"></a>
                                <div class="process-num">
                                    <span class="number">01</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{ route('services.index') }}">Mechanical Ventilation Systems</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <span>Fresh Air Inflow System.</span><br>
                                    <span>Heat Air Exhaust System.</span>
                                </div>
                                <div class="service-btn pt-10">
                                    <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{ route('services.index') }}"><i class="ti ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="featured-thumbnail">
                                <a href="{{ route('services.index') }}"><img alt="" class="img-fluid" src="{{ asset('images/service-2.jpg') }}"></a>
                                <div class="process-num">
                                    <span class="number">02</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{ route('services.index') }}">Evaporative Cooling Systems</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <span>Positive Pressure Cooling System.</span><br>
                                    <span>Negative Pressure Cooling System.</span>
                                </div>
                                <div class="service-btn pt-10">
                                    <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{ route('services.index') }}"><i class="ti ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="featured-thumbnail">
                                <a href="{{ route('services.index') }}"><img alt="" class="img-fluid" src="{{ asset('images/service-3.jpg') }}"></a>
                                <div class="process-num">
                                    <span class="number">03</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{ route('services.index') }}">Humidifier & Dehumidifier Systems</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <span>Humidity Control System.</span><br>
                                    <span>De humidity Control System.</span>
                                </div>
                                <div class="service-btn pt-10">
                                    <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{ route('services.index') }}"><i class="ti ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="featured-thumbnail">
                                <a href="{{ route('services.index') }}"><img alt="" class="img-fluid" src="{{ asset('images/service-4.jpg') }}"></a>
                                <div class="process-num">
                                    <span class="number">04</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{ route('services.index') }}">Air Conditioning Systems</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <span>Central Air Conditioning System.</span><br>
                                    <span>VRV / VRF System.</span>
                                </div>
                                <div class="service-btn pt-10">
                                    <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{ route('services.index') }}"><i class="ti ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row fid-section bg-img2 cmt-bg cmt-bgcolor-darkgrey cmt-bgimage-yes clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8 m-auto">
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h3>Get Support</h3>
                                        <h2 class="title">Quality Service At Affordable Prices Great Agency</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cmt-vertical_sep pt-10 pb-10">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-icon-box icon-align-before-content cmt-textcolor-white style11 float-md-right pr-50 res-991-pr-0">
                                    <div class="featured-content text-md-right">
                                        <div class="featured-title">
                                            <h3>Call Us</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>{{ env('APP_PHONE_1') }}</p>
                                        </div>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-style-rounded cmt-icon_element-size-sm">
                                            <i class="ti ti-headphone-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-icon-box icon-align-before-content cmt-textcolor-white style11 res-991-pl-0 pl-20">
                                    <div class="featured-icon">
                                        <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-style-rounded cmt-icon_element-size-sm">
                                            <i class="ti ti-email"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content text-left">
                                        <div class="featured-title">
                                            <h3>Email Us</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>{{ env('APP_EMAIL') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-highlight mt-50 res-991-mt-20" href="{{ route('contact.index') }}">Request Quote</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row portfolio-section_1 clearfix">
            <div class="container-fluid">
                <div class="row cmt-boxes-spacing-px slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="cmt-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img alt="" class="img-fluid" height="750" src="{{ asset('images/project-1.jpg') }}" width="600">
                                </div>
                                <div class="cmt-media-link">
                                    <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" data-rel="prettyPhoto" href="{{ asset('images/project-1.jpg') }}" tabindex="0">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a class="cmt_link" href="#" tabindex="0"><i class="ti ti-link"></i></a>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="#">Natural Ventilation</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="cmt-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img alt="" class="img-fluid" height="750" src="{{ asset('images/project-2.jpg') }}" width="600">
                                </div>
                                <div class="cmt-media-link">
                                    <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" data-rel="prettyPhoto" href="{{ asset('images/project-2.jpg') }}" tabindex="0">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a class="cmt_link" href="#" tabindex="0"><i class="ti ti-link"></i></a>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="#">Exhaust Ventilation Systems</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="cmt-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img alt="" class="img-fluid" height="750" src="{{ asset('images/project-3.jpg') }}" width="600">
                                </div>
                                <div class="cmt-media-link">
                                    <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" data-rel="prettyPhoto" href="{{ asset('images/project-3.jpg') }}" tabindex="0">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a class="cmt_link" href="#" tabindex="0"><i class="ti ti-link"></i></a>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="#">Supply Ventilation Systems</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="cmt-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img alt="" class="img-fluid" height="750" src="{{ asset('images/project-4.jpg') }}" width="600">
                                </div>
                                <div class="cmt-media-link">
                                    <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" data-rel="prettyPhoto" href="{{ asset('images/project-4.jpg') }}" tabindex="0">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a class="cmt_link" href="#" tabindex="0"><i class="ti ti-link"></i></a>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="#">Balanced Ventilation Systems</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="cmt-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img alt="" class="img-fluid" height="750" src="{{ asset('images/project-5.jpg') }}" width="600">
                                    <div class="cmt-media-link">
                                        <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" data-rel="prettyPhoto" href="{{ asset('images/project-5.jpg') }}" tabindex="0">
                                            <i class="ti ti-search"></i>
                                        </a>
                                        <a class="cmt_link" href="#" tabindex="0"><i class="ti ti-link"></i></a>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="#">Recovery Systems</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row fid-section cmt-bgcolor-highlight clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-top_icon style3 mb-20">
                            <div class="cmt-fid-icon-wrapper">
                                <i class="flaticon flaticon-ventilator"></i>
                            </div>
                            <div class="cmt-fid-contents">
                                <h2 class="cmt-fid-inner">
                                    <span class="numinate" data-after-style="sub" data-after="+" data-appear-animation="animateDigits" data-before-style="sup" data-before="" data-from="0" data-interval="5" data-to="100">100</span>
                                    <sub>+</sub>
                                </h2>
                                <h3 class="cmt-fid-title">Total products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-top_icon style3 mb-20">
                            <div class="cmt-fid-icon-wrapper">
                                <i class="flaticon flaticon-air-cooler"></i>
                            </div>
                            <div class="cmt-fid-contents">
                                <h2 class="cmt-fid-inner">
                                    <span class="numinate" data-after-style="sub" data-after="" data-appear-animation="animateDigits" data-before-style="sup" data-before="" data-from="0" data-interval="5" data-to="95">95</span>
                                    <sub>%</sub>
                                </h2>
                                <h3 class="cmt-fid-title">Happy Clients</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-top_icon style3 mb-20">
                            <div class="cmt-fid-icon-wrapper">
                                <i class="flaticon flaticon-cooler"></i>
                            </div>
                            <div class="cmt-fid-contents">
                                <h2 class="cmt-fid-inner">
                                    <span class="numinate" data-after-style="sub" data-after="" data-appear-animation="animateDigits" data-before-style="sup" data-before="" data-from="0" data-interval="5" data-to="50">50</span>
                                    <sub>+</sub>
                                </h2>
                                <h3 class="cmt-fid-title">Number of services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-top_icon style3 mb-20">
                            <div class="cmt-fid-icon-wrapper">
                                <i class="flaticon flaticon-air-cooler"></i>
                            </div>
                            <div class="cmt-fid-contents">
                                <h2 class="cmt-fid-inner">
                                    <span class="numinate" data-after-style="sub" data-after="" data-appear-animation="animateDigits" data-before-style="sup" data-before="" data-from="0" data-interval="5" data-to="90">90</span>
                                    <sub>%</sub>
                                </h2>
                                <h3 class="cmt-fid-title">Successfully</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
