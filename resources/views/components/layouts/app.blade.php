<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studyhub LMS & University HTML Template </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="frontend/assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="frontend/assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="frontend/assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="frontend/assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="frontend/assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="frontend/assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">
    <!-- Styles -->

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- @filamentStyles
    @vite('resources/css/app.css') -->
</head>

<body>
    {{ $slot }}


    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="frontend/assets/js/vendor/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="frontend/assets/js/vendor/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="frontend/assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="frontend/assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="frontend/assets/js/plugins/swiper.js"></script>
    <!-- counterup js -->
    <script src="frontend/assets/js/plugins/counterup.js"></script>
    <!-- waypoint js -->
    <script src="frontend/assets/js/vendor/waypoint.js"></script>
    <!-- wow js -->
    <script src="frontend/assets/js/vendor/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="frontend/assets/js/plugins/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="frontend/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="frontend/assets/js/plugins/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="frontend/assets/js/plugins/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="frontend/assets/js/plugins/twinmax.js"></script>
    <!-- chroma js -->
    <script src="frontend/assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="frontend/assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="frontend/assets/js/plugins/contact.form.js"></script>
    <!-- calender js -->
    <script src="frontend/assets/js/plugins/calender.js"></script>
    <!-- main Js -->
    <script src="frontend/assets/js/main.js"></script>

    @livewire('notifications')

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>