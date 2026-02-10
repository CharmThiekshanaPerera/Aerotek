@extends('components.layouts.base')

@section('title')
    {{ $productCategory->title }} | Products
@endsection

@section('seo_title', $productCategory->title . ' | Products')
@section('seo_description', \Illuminate\Support\Str::limit(strip_tags($productCategory->content ?? ''), 155))
@section('seo_keywords', $productCategory->title . ', ventilation products, Aerotek Lanka')
@section('seo_image', asset('images/products/' . $productCategory->image))
@section('seo_schema')
    @php
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => url('/'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Products',
                    'item' => route('products.index'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $productCategory->title,
                    'item' => route('product-categories.show', $productCategory),
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{{ json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}</script>
@endsection

@section('content')
    <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{ $productCategory->title }}</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span><a href="{{ route('products.index') }}">Products</a> / </span>
                            <span>{{ $productCategory->title }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="pt-70 tab-section clearfix pr-10 pl-10">
            <div class="container">
                <div class="row">
                    <div class="res-991-pr-0 pr-40">
                        <div class="section-title with-desc">
                            <div class="title-header">
                                <h2 class="title">{{ $productCategory->title }}</h2>
                            </div>
                            <div class="title-desc">
                                <p>{{ $productCategory->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-70 grid-section clearfix">
            <div class="container">
                <div class="row row-equal-height cmt-boxes-spacing-25px">
                    @forelse ($productCategory->products as $product)
                        <div class="cmt-box-col-wrapper col-lg-4">
                            <div class="featured-imagebox featured-imagebox-post style1">
                                <div class="cmt-post-thumbnail featured-thumbnail">
                                    <img width="770" height="530" class="img-fluid" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->title }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="#">{{ $product->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">No products found!</div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection
