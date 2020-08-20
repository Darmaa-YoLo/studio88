<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    @yield('og')
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">

</head>

<body>
    <div class="loader">
        <img class="uk-position-center" src="{{asset('images/copper-loader.gif')}}" alt="">
    </div>
    <div class="main-container">
        @include('components.menu')

        @yield('content')

        @include('partials.footer')
    </div>

    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        $(window).on("load", function() {
            $("div.loader").slideUp();
        });
    </script>
    @stack('scripts')
</body>

</html>