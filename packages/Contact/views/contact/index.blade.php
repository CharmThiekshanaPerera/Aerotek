@extends('components.layouts.base')

@section('title')
    Contact Us
@endsection

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> /</span>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row contact-section clearfix">
            <div class="container">
                <div class="row mt_15 mb_15">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="featured-icon-box style6 border">
                            <div class="title-desc">
                                <p>We always be on time and give you great service possible for your all kind information.</p>
                            </div>
                            <div class="contact-details-box row">
                                <ul class="col-12 col-md-6 cmt-list cmt-list-style-icon font-weight-normal cmt-list-icon-color-darkgrey cmt-bgcolor-grey">
                                    <h3>Design Office</h3>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-map-marker d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_ADDRESS_1') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-phone d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_PHONE_1') }} <br /> {{ env('APP_PHONE_2') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-fax d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_PHONE_3') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-envelope-o d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_EMAIL') }}</span>
                                    </li>
                                </ul>
                                <ul class="col-12 col-md-6 cmt-list cmt-list-style-icon font-weight-normal cmt-list-icon-color-darkgrey cmt-bgcolor-grey">
                                    <h3>Register Office</h3>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-map-marker d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_ADDRESS_2') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-phone d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_PHONE_1') }} <br /> {{ env('APP_PHONE_2') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-fax d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_PHONE_3') }}</span>
                                    </li>
                                    <li class="d-flex align-items-center flex-row py-3 px-0">
                                        <i class="fa fa-envelope-o d-block"></i>
                                        <span class="cmt-list-li-content d-block p-0">{{ env('APP_EMAIL') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="featured-icon-box style6 border">
                            <img src="{{ asset('images/contact-us.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmt-row zero_padding-section clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="cmt-bgcolor-grey cmt-bg cmt-left-span h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1896587594338!2d80.14097591477395!3d7.104005694869807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8c01a95fbbb441e!2zN8KwMDYnMTQuNCJOIDgwwrAwOCczNS40IkU!5e0!3m2!1sen!2slk!4v1674120297527!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cmt-bgcolor-grey cmt-bg cmt-right-span spacing-10">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h2 class="title">Request Quote</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>We take great pride in everything that we do, complete control over products allows us to ensure customers receive best service.</p>
                                    </div>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success mb-20">{{ session('success') }}</div>
                                @endif
                                @if ($errors->all())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger mb-20">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form id="contact_form_1" class="contact_form_1 wrap-form clearfix" method="post" action="{{ route('contact.mail') }}">
                                    @method('post')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <i class="ti-user"></i>
                                                    <input name="name" type="text" placeholder="Enter your name" maxlength="255" required>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <i class="ti-email"></i>
                                                    <input name="email" type="email" placeholder="Enter your email address" maxlength="255" required>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input">
                                                    <i class="ti ti-comment"></i>
                                                    <input name="subject" type="text" placeholder="Enter your subject" maxlength="255" required>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input">
                                                    <i class="ti-comment"></i>
                                                    <textarea name="message" rows="5" placeholder="Enter your message" maxlength="5000" required></textarea>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 cmt-box-col-wrapper">
                                            <button class="cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-skincolor" type="submit">Submit Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
