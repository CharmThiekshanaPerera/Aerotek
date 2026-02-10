@extends('components.layouts.base')

@section('title')
    Products
@endsection

@section('seo_title', 'Ventilation Products and Categories')
@section('seo_description', 'Browse Aerotek Lanka ventilation product categories, including fans, evaporative cooling, humidifiers, dehumidifiers, and accessories.')
@section('seo_keywords', 'ventilation products, ventilation fans, evaporative cooling, humidifiers, dehumidifiers, ventilation accessories')
@section('seo_image', asset('images/products/product.jpg'))
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
                            <h2 class="title">Products</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><a href="{{ route('index') }}">Home</a> / </span>
                            <span>Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <section class="cmt-row grid-section clearfix">
            <div class="container">
                <div class="row row-equal-height cmt-boxes-spacing-25px">
                    @forelse ($productCategories as $productCategory)
                        <div class="cmt-box-col-wrapper col-lg-4">
                            <div class="featured-imagebox featured-imagebox-post style1">
                                <div class="cmt-post-thumbnail featured-thumbnail">
                                    <img width="770" height="530" class="img-fluid" src="{{ asset('images/products/' . $productCategory->image) }}" alt="{{ $productCategory->title }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="{{ route('product-categories.show', $productCategory) }}">{{ $productCategory->title }}</a></h3>
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
