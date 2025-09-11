@extends('components.layouts.base')

@section('title')
    Services
@endsection

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Services</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row tab-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <div class="title-header">
                                <h2 class="title">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="cmt-tabs cmt-tab-style-02" data-effect="fadeIn">
                            <ul class="tabs clearfix text-center">
                                <li class="tab active"><a href="#">Mechanical Ventilation Systems</a></li>
                                <li class="tab"><a href="#">Evaporative Cooling Systems</a></li>
                                <li class="tab"><a href="#">Humidifier & Dehumidifier Systems</a></li>
                                <li class="tab"><a href="#">Air Conditioning Systems</a></li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner active">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-10">
                                            <div class="d-inline-block single-img-wraper cmt-bgcolor-white box-shadow p-3">
                                                <img width="580" height="470" class="img-fluid" src="{{ asset('images/service-1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="res-991-pl-0 res-991-pt-40 pl-20 pt-20">
                                                <ul class="cmt-list cmt-list-style-icon">
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Fresh Air Inflow System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Heat Air Exhaust System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Dust Collecting and Extraction System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Fume, Smoke, Gas & Polluted air Extraction and Purify System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">High rise building ventilation system.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Bathroom Extraction System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Staircase Pressurization System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Car Park Ventilation System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Kitchen Ventilation System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Laundry Ventilation System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Cyclones, Scrubbers – Venturing / Spray System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">All Ducting Systems.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Supply of Ventilation Fans, Filters, Grills, Louvers and other Accessories.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-10">
                                            <div class="d-inline-block single-img-wraper cmt-bgcolor-white box-shadow p-3">
                                                <img width="580" height="470" class="img-fluid" src="{{ asset('images/service-2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="res-991-pl-0 res-991-pt-40 pl-20 pt-20">
                                                <ul class="cmt-list cmt-list-style-icon">
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Positive Pressure Cooling System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Negative Pressure Cooling System.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-10">
                                            <div class="d-inline-block single-img-wraper cmt-bgcolor-white box-shadow p-3">
                                                <img width="580" height="470" class="img-fluid" src="{{ asset('images/service-3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="res-991-pl-0 res-991-pt-40 pl-20 pt-20">
                                                <ul class="cmt-list cmt-list-style-icon">
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Humidity Control System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">De humidity Control System.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-10">
                                            <div class="d-inline-block single-img-wraper cmt-bgcolor-white box-shadow p-3">
                                                <img width="580" height="470" class="img-fluid" src="{{ asset('images/air-conditioning-system.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="res-991-pl-0 res-991-pt-40 pl-20 pt-20">
                                                <ul class="cmt-list cmt-list-style-icon">
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Central Air Conditioning System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">VRV / VRF System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Packaged Air Conditioning System.</span>
                                                    </li>
                                                    <li>
                                                        <i class="ti ti-check cmt-textcolor-darkgrey"></i>
                                                        <span class="font-weight-normal pl-3">Domestic Air Conditioning System.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
