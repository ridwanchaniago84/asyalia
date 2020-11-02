@extends('layouts.app')

@section('content')
<!-- Banner Header -->
<div  style="background: url({{ asset('/img/header-home.png') }}) no-repeat center center; background-size: cover; height: 550px; width: 100%;"> </div>

<!-- Quotes Home -->
<div class="bg-pink-1">
    <div class="container py-lg-0 py-5">
        <div class="row">
            <div class="col-lg-6 col-12 p-lg-5 p-3 d-flex flex-column">
                <h4 class="card-title text-white text-center" style="letter-spacing: 4px;">THE EASIEST WAY TO CREATE
                </h4>
                <img src="/img/customdress-home.png" width="auto" height="200"
                    class="d-inline-block align-top align-self-center" alt="" loading="lazy">

            </div>
            <div class="col-lg-6 col-12 p-lg-5 p-3 d-flex flex-column align-content-end">
                <p class="card-text text-white text-justify" style="letter-spacing: 1px;">Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                <h6 class="card-title text-white text-right mt-auto">- A S Y A L I A</h6>
            </div>
        </div>
    </div>
</div>

<!-- Second Banner Home -->
<div class="text-left bg-light py-5"
    style="background: url(/img/second-header-home.png) no-repeat center center; background-size: cover; height: 500px; width: 100%;">
    <div class="container">
        <div class="col-lg-6 col-12 p-lg-5">
            <h1 class="display-4 text-noto text-pink-2">AMEERA <br> SERIES</h1>
            <p class="lead font-weight-normal">Lorem ipsum dolor sit</p>
            <a class="btn btn-outline-pink-2 btn-lg text-pink-2 font-weight-bold" href="{{ route('order') }}">CUSTOM YOUR DRESS</a>
        </div>
    </div>
</div>

<!-- Third Banner Home -->
<div class="text-right bg-light py-5" style="background: url({{ asset('') }}) no-repeat center center; background-size: cover; height: 500px; width: 100%;">
    <div class="container ">
        <div class="col-lg-6 col-12 p-lg-5 ml-auto">
            <h1 class="display-4 text-noto text-pink-2">AMEERA <br> SERIES</h1>
            <p class="lead font-weight-normal">Lorem ipsum dolor sit</p>
            <a class="btn btn-outline-pink-2 btn-lg text-pink-2 font-weight-bold" href="{{ route('order') }}">CUSTOM YOUR DRESS</a>
        </div>
    </div>
</div>

<!-- Instagram -->
<div class="bg-pink-1">
    <div class="container py-lg-0 py-5 text-center">
        <img src="{{ asset('/img/customdress-home.png') }}" width="auto" height="200"
            class="d-inline-block align-top align-self-center" alt="" loading="lazy">
    </div>
</div>

<!-- List Instagram Photos -->
<div class="row">
    <div class="col-lg-3 col-md-6 col-12"
        style="background: url({{ asset('/img/third-header-home.png') }}) no-repeat center top; background-size: cover; height: 200px; width: auto;">

    </div>
    <div class="col-lg-3 col-md-6 col-12"
        style="background: url({{ asset('/img//page1-04.jpg') }}) no-repeat center top; background-size: cover; height: 200px; width: auto;">

    </div>
    <div class="col-lg-3 col-md-6 col-12"
        style="background: url({{ asset('/img//page1-05.jpg') }}) no-repeat center top; background-size: cover; height: 200px; width: auto;">

    </div>
    <div class="col-lg-3 col-md-6 col-12"
        style="background: url({{ asset('/img//page1-06.jpg') }}) no-repeat center top; background-size: cover; height: 200px; width: auto;">

    </div>
</div>

@endsection