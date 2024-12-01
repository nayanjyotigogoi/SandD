<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hook')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/shorthand.min.css') }}"> -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
   
    <!-- <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"> -->
    
    @stack('styles')
</head>

<body class="bg-black muli">
    @include('partials.nav')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function () {
            feather.replace();
            $('#slider-1, #slider-2').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
