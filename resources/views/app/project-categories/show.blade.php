@extends('components.layouts.base')

@section('title')
    {{ $projectCategory->title }} | Projects
@endsection

@section('seo_title', $projectCategory->title . ' | Projects')
@section('seo_description', 'View ' . $projectCategory->title . ' ventilation project gallery by Aerotek Lanka (Pvt) Ltd.')
@section('seo_keywords', $projectCategory->title . ', ventilation projects, HVAC projects, Aerotek Lanka')
@section('seo_image', asset('images/projects/' . $projectCategory->image))

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{ $projectCategory->title }}</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span><a href="{{ route('projects.index') }}">Projects</a> / </span>
                            <span> {{ $projectCategory->title }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row project-single-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cmt-pf-single-content-wrapper-innerbox cmt-pf-view-left-image">
                            <div class="cmt-pf-single-related-wrapper mb_15">
                                <div class="row">
                                    @forelse ($projectCategory->projects as $project)
                                        <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                <div class="cmt-box-view-overlay">
                                                    <div class="featured-thumbnail">
                                                        <img width="600" height="750" class="img-fluid" src="{{ asset('images/projects/' . $project->image) }}" alt="{{ $projectCategory->title }} project image">
                                                    </div>
                                                    <div class="cmt-media-link">
                                                        <a class="cmt_prettyphoto cmt_image" data-gal="prettyPhoto[gallery1]" href="{{ asset('images/projects/' . $project->image) }}" data-rel="prettyPhoto" tabindex="0">
                                                            <i class="ti ti-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 text-center">No projects found!</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
