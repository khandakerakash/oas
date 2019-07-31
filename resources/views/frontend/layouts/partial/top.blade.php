<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/img/favicons/favicon-32x32.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/img/favicons/favicon-96x96.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/img/favicons/favicon-16x16.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- STYLES -->
    <!-- Font-Awesome 4.7 -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/WOW-master/animate.css') }}">
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/flickity-master/flickity.min.css') }}">
    <!-- Xzoom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/xzoom/xzoom.css') }}">
    <!-- Owl Carousel JS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/OwlCarousel2-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css') }}">

    <!-- Bootstrap-4.3.1 -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>
<body id="page-top">