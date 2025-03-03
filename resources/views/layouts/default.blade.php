<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Dynamic SEO Meta Tags -->
    <title>{{ $seo['title'] ?? 'PowerX Systems | Inverters, Batteries, Solar Solutions & Water Purifiers in Payyanur, Kannur' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'PowerX Systems offers top-quality inverters, batteries, solar water heaters, and water purifiers in Payyanur, Kannur since 1998. Trusted sales & service for V-Guard, Luminous, Kent & more' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? 'inverters Payyanur, solar water heaters Kannur, water purifiers Kerala, battery sales, solar inverters, V-Guard, Luminous, Kent, PowerX Systems Kannur' }}">
    <meta name="author" content="{{ $seo['author'] ?? 'PowerX Systems' }}">
    <meta name="robots" content="{{ $seo['robots'] ?? 'index, follow' }}">

    <!-- Open Graph (OG) Tags for Social Media -->
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'PowerX Systems | Inverters, Batteries, Solar Solutions & Water Purifiers in Payyanur, Kannur' }}">
    <meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'PowerX Systems offers top-quality inverters, batteries, solar water heaters, and water purifiers in Payyanur, Kannur since 1998. Trusted sales & service for V-Guard, Luminous, Kent & more' }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? asset('images/meta/social.jpg') }}">
    <meta property="og:url" content="{{ $seo['og_url'] ?? request()->url() }}">
    <meta property="og:type" content="{{ $seo['og_type'] ?? 'website' }}">
    <meta property="og:site_name" content="{{ $seo['og_site_name'] ?? 'PowerX Systems' }}">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="{{ $seo['twitter_card'] ?? 'summary_large_image' }}">
    <meta name="twitter:title" content="{{ $seo['twitter_title'] ?? $seo['title'] ?? 'PowerX Systems | Inverters, Batteries, Solar Solutions & Water Purifiers in Payyanur, Kannur' }}">
    <meta name="twitter:description" content="{{ $seo['twitter_description'] ?? $seo['description'] ?? 'PowerX Systems offers top-quality inverters, batteries, solar water heaters, and water purifiers in Payyanur, Kannur since 1998. Trusted sales & service for V-Guard, Luminous, Kent & more' }}">
    <meta name="twitter:image" content="{{ $seo['twitter_image'] ?? asset('images/meta/social.jpg') }}">

    <!-- Favicon -->
    <link href="{{ asset('images/meta/favicon.ico') }}" rel="icon">

    <!-- Styles -->
    @include('partials.styles')

    <!-- Optional: Yield additional head content -->
    @yield('extra-head')
</head>
<body>
    <!-- /.preloader -->
    <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div>

    {{-- Header --}}
    @include('partials.header')

    <!-- Main content section -->
    @yield('content')

    <!-- Scripts -->
    @include('partials.scripts')

    <!-- Optional: Yield additional scripts -->
    @yield('extra-scripts')
</body>
</html>
