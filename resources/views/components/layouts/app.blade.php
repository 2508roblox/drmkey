<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="canonical" href="./" />
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/fontawesome.css' }}"><!-- Iconsax icon-->
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/iconsax.css' }}"><!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" id="rtl-link" href="{{ 'assets/css/vendors/bootstrap.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/swiper-slider/swiper-bundle.min.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/toastify.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ 'assets/css/style.css' }}">
    <script defer src="{{ asset('assets/css/landing_page.js') }}"></script>
    <script defer src="{{ asset('assets/css/style.js') }}"></script>
    <link href="{{ 'assets/css/landing_page.css' }}" rel="stylesheet">
    <link href="{{ 'assets/css/style.css' }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireAssets
</body>
<style>
    @media (max-width: 992px) {
        .col-md-9 {
            width: 100%;
        }
    }

    @media (max-width: 992px) {
        .col-sm-3 {
            width: 100%;
        }
    }
</style>
<x-livewire-alert::scripts />

</html>
