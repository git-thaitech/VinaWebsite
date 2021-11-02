<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @yield('title')

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:wght@100&display=swap"
        rel="stylesheet" type="text/css">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('extend-css')
</head>

<body style="font-family: 'Open Sans', sans-serif;">

    @include('partials.navigation')

    <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active boat">
                <div class="container h-100 d-none d-md-block">
                    <div class="row align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="caption animated fadeIn">
                                <h2 class="animated fadeInLeft">Boat Excursions</h2>
                                <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                    tristique,
                                    ac posuere arcu varius.</p>
                                <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item sea">
                <div class="container h-100 d-none d-md-block">
                    <div class="row align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="caption animated fadeIn">
                                <h2 class="animated fadeInLeft">Discover the canyon by the sea</h2>
                                <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                    tristique,
                                    ac posuere arcu varius.</p>
                                <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item river">
                <div class="container h-100 d-none d-md-block">
                    <div class="row align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="caption animated fadeIn">
                                <h2 class="animated fadeInLeft">Explore the river valley</h2>
                                <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                    tristique,
                                    ac posuere arcu varius.</p>
                                <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    @yield('main-content')

    @include('partials.footer')


    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>

</body>

</html>
