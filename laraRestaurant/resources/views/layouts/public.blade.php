<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('public-assets/img/favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public-assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('public-assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        @include('layouts.inc.public-inc.spinner')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('layouts.inc.public-inc.nav')
            @include('layouts.inc.public-inc.hero')
        </div>
        <!-- Navbar & Hero End -->

        @include('layouts.inc.public-inc.service')
        @include('layouts.inc.public-inc.about')
        @include('layouts.inc.public-inc.menu')
        @include('layouts.inc.public-inc.reservation')
        @include('layouts.inc.public-inc.team')
        @include('layouts.inc.public-inc.testimonial')
        @include('layouts.inc.public-inc.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public-assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('public-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('public-assets/js/main.js') }}"></script>
</body>

</html>
