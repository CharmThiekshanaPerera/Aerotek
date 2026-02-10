<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $baseTitle = trim($__env->yieldContent('title'));
        $seoTitle = trim($__env->yieldContent('seo_title'));
        $pageTitle = $seoTitle !== '' ? $seoTitle : $baseTitle;
        $siteName = config('app.name');
        $fullTitle = $pageTitle !== '' ? $pageTitle . ' | ' . $siteName : $siteName;
        $seoDescription = trim($__env->yieldContent('seo_description'));
        if ($seoDescription === '') {
            $seoDescription = 'Aerotek Lanka provides mechanical ventilation, HVAC, evaporative cooling, and air conditioning solutions for industrial, commercial, and domestic projects in Sri Lanka.';
        }
        $seoKeywords = trim($__env->yieldContent('seo_keywords'));
        if ($seoKeywords === '') {
            $seoKeywords = 'mechanical ventilation, ventilation systems, HVAC Sri Lanka, evaporative cooling, air conditioning, industrial ventilation';
        }
        $seoImage = trim($__env->yieldContent('seo_image'));
        if ($seoImage === '') {
            $seoImage = asset('images/logo/logo.png');
        }
        $canonical = trim($__env->yieldContent('seo_canonical'));
        if ($canonical === '') {
            $canonical = url()->current();
        }
        $ogType = trim($__env->yieldContent('seo_og_type'));
        if ($ogType === '') {
            $ogType = 'website';
        }
        $organizationSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $siteName,
            'url' => config('app.url'),
            'logo' => asset('images/logo/logo.png'),
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => env('APP_PHONE_1'),
                    'contactType' => 'customer service',
                    'email' => env('APP_EMAIL'),
                ],
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => env('APP_ADDRESS_1'),
                'addressCountry' => 'Sri Lanka',
            ],
        ];
        $localBusinessSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => $siteName,
            'url' => config('app.url'),
            'image' => asset('images/logo/logo.png'),
            'telephone' => env('APP_PHONE_1'),
            'email' => env('APP_EMAIL'),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => env('APP_ADDRESS_1'),
                'addressCountry' => 'Sri Lanka',
            ],
            'sameAs' => [
                'https://www.facebook.com/aeroteklk',
                'https://www.linkedin.com/in/manoj-ranasinghe-267a51220',
            ],
        ];
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <meta name="author" content="Phyxle Infotech (Pvt) Ltd">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <title>{{ $fullTitle }}</title>
    <link rel="canonical" href="{{ $canonical }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $pageTitle !== '' ? $pageTitle : $siteName }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle !== '' ? $pageTitle : $siteName }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">
    <script type="application/ld+json">{{ json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}</script>
    <script type="application/ld+json">{{ json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}</script>
    @yield('seo_schema')
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pretty-photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mega-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/revolution.css') }}" id="rs-plugin-settings-css">
    @yield('head')
</head>

<body>
    <div class="page">
        @include('components.includes.preloader')
        @include('components.includes.header')
        @yield('content')
        @include('components.includes.footer')
        @include('components.includes.top')
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('js/tether.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/waypoints.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/pretty-photo.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/numinate.js') }}"></script>
    <script src="{{ asset('js/images-loaded.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/circle-progress.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src='{{ asset('js/revolution-tools.js') }}'></script>
    <script src='{{ asset('js/revolution.js') }}'></script>
</body>

</html>
