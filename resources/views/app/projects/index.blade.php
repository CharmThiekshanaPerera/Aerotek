@extends('components.layouts.base')

@section('title')
    Projects
@endsection

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Projects</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <div class="cmt-row sidebar cmt-sidebar-right clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 content-area">
                        @forelse ($projectCategories as $projectCategory)
                            <article class="post cmt-blog-classic clearfix">
                                <div class="cmt-post-featured-wrapper cmt-featured-wrapper">
                                    <div class="cmt-post-featured">
                                        <img width="1200" height="800" class="img-fluid"src="{{ asset('images/projects/' . $projectCategory->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="cmt-blog-classic-content">
                                    <div class="cmt-post-entry-header">
                                        <div class="post-meta">
                                            <span class="cmt-meta-line comment-links">
                                                <i class="fa fa-calendar"></i>{{ date('Y-m-d', strtotime($projectCategory->created_at)) }}
                                            </span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="{{ route('project-categories.show', $projectCategory) }}">{{ $projectCategory->title }}</a></h2>
                                        </header>
                                    </div>
                                    <div class="entry-content">
                                        <div class="cmt-blogbox-desc-footer">
                                            <div class="cmt-blogbox-footer-readmore">
                                                <a class="cmt-btn cmt-btn-size-sm cmt-btn-shape-rounded cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor" href="{{ route('project-categories.show', $projectCategory) }}">View More<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="text-center">No projects found!</div>
                        @endforelse
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Recent Projects</h3>
                            <ul class="widget-post cmt-recent-post-list">
                                @forelse ($projectCategories as $projectCategory)
                                    <li>
                                        <a href="{{ route('project-categories.show', $projectCategory) }}">
                                            <img width="500" height="597" class="img-fluid" src="{{ asset('images/projects/' . $projectCategory->image) }}" alt="">
                                        </a>
                                        <div class="post-detail">
                                            <a href="{{ route('project-categories.show', $projectCategory) }}">{{ $projectCategory->title }}</a>
                                            <span class="post-date"><i class="fa fa-calendar"></i> {{ date('Y-m-d', strtotime($projectCategory->created_at)) }}</span>
                                        </div>
                                    </li>
                                @empty
                                    <li>No projects found!</li>
                                @endforelse
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
