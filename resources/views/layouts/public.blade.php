<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mount Kenya Wildlife Conservancy is a non-profit trust dedicated to preserving the environment and the wildlife within. The Conservancy is located in Nanyuki, at the foot of the scenic Mount Kenya forest ecosystem, a UN World Heritage Site, and an important and rich biodiverse area. It is home to 28 different animal species, a population of roughly 1,200 different animals.">
    <meta name="author" content="Mount Kenya Wildlife Conservancy ">

    <!-- Primary Meta Tags -->
    <title>Mount Kenya Wildlife Conservancy</title>
    <meta name="title" content="Mount Kenya Wildlife Conservancy">
    <meta name="description" content="Mount Kenya Wildlife Conservancy is a non-profit trust dedicated to preserving the environment and the wildlife within. The Conservancy is located in Nanyuki, at the foot of the scenic Mount Kenya forest ecosystem, a UN World Heritage Site, and an important and rich biodiverse area. It is home to 28 different animal species, a population of roughly 1,200 different animals.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:title" content="Mount Kenya Wildlife Conservancy">
    <meta property="og:description" content="Mount Kenya Wildlife Conservancy is a non-profit trust dedicated to preserving the environment and the wildlife within. The Conservancy is located in Nanyuki, at the foot of the scenic Mount Kenya forest ecosystem, a UN World Heritage Site, and an important and rich biodiverse area. It is home to 28 different animal species, a population of roughly 1,200 different animals.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta property="twitter:title" content="Mount Kenya Wildlife Conservancy">
    <meta property="twitter:description" content="Mount Kenya Wildlife Conservancy is a non-profit trust dedicated to preserving the environment and the wildlife within. The Conservancy is located in Nanyuki, at the foot of the scenic Mount Kenya forest ecosystem, a UN World Heritage Site, and an important and rich biodiverse area. It is home to 28 different animal species, a population of roughly 1,200 different animals.">
    <meta property="twitter:image" content="{{ asset('img/logo.png') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />

    <base href="{{ url('') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CRDK6TS6G8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CRDK6TS6G8');
    </script>
    @yield('styles')
</head>

<body>
    <div class="loader">
        <div class="text-center">
            <div class="loader-image-animation">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
        </div>
    </div>

    @include('partials.navbar')

    <div class="main-body">
        <style>
            .main-body {
                position: relative;
                z-index: 1;
            }
        </style>

        @yield('content')

    </div>

    <div class="footer bg-dark pt-4">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-6 pb-3">
                    © 2022 | All rights reserved
                </div>
                <div class="col-6 pb-3 text-end">
                    <a href="{{ route('index.home') }}" class="pe-4">Home</a>
                    <a href="contact.html">Contacts</a>
                </div>

            </div>
        </div>
    </div>
    <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fas fa-long-arrow-alt-up"></i> </a>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
