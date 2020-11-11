<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeeFlix</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Font Awesome--}}
    <script src="https://kit.fontawesome.com/4f1f1da23d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    @include('layout.navbarLayout')

    <div class="section" id="container1">
        <div class="section" id="container2">
            @yield('content')
        </div>
    </div>

    <div class="footer">
        <h5>&copy; Made By Gilbert Nicholas Winata</h5>
        <h5>2201737324</h5>
    </div>

    {{-- Custom JS --}}
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
</body>
</html>
