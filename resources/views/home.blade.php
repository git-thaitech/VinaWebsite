@extends('layouts.client')

@section('extend-css')
<link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">
@endsection

@section('title')
    <title>Trang chủ</title>
@endsection


{{-- Carousel --}}
@section('banner')
<div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active slide1">
            <div class="container h-100 d-none d-md-block">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="caption animated fadeIn">
                            <h2 class="animated fadeInLeft">Slide 1</h2>
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
        <div class="carousel-item slide2">
            <div class="container h-100 d-none d-md-block">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="caption animated fadeIn">
                            <h2 class="animated fadeInLeft">Slide 2</h2>
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
        <div class="carousel-item slide3">
            <div class="container h-100 d-none d-md-block">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="caption animated fadeIn">
                            <h2 class="animated fadeInLeft">Slide 3</h2>
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

@endsection


@section('main-content')
    Tran Thanh Thai
@endsection
