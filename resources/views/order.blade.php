@extends('layouts.app')

@section('content')
<!-- Banner Header -->
<div id="bannerHeader" class="pt-5" style="background: url({{ asset('/img/header-dress-1.png') }}) no-repeat center center; background-size: cover; height: 550px; width: 100%; border-bottom: solid 10px #d47283;">
</div>

<div class="bg-pink">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-pink rounded-0" >
                <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Custom Order</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <ul class="nav nav-tabs" id="tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted active" id="dressSec-tab" data-toggle="tab" href="#dressSec" role="tab" aria-controls="dressSec" aria-selected="true">DRESS</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="typeSec-tab" data-toggle="tab" href="#typeSec" role="tab" aria-controls="typeSec" aria-selected="false">TYPE</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="colorSec-tab" data-toggle="tab" href="#colorSec" role="tab" aria-controls="colorSec" aria-selected="false">COLOR</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="sizeSec-tab" data-toggle="tab" href="#sizeSec" role="tab" aria-controls="sizeSec" aria-selected="false">SIZE</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="lenghtSec-tab" data-toggle="tab" href="#lenghtSec" role="tab" aria-controls="lenghtSec" aria-selected="false">LENGHT</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="khimarSec-tab" data-toggle="tab" href="#khimarSec" role="tab" aria-controls="khimarSec" aria-selected="false">KHIMAR</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted disabled" id="niqobSec-tab" data-toggle="tab" href="#niqobSec" role="tab" aria-controls="niqobSec" aria-selected="false">NIQOB</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-muted" id="detailOrder-tab" data-toggle="tab" href="#detailOrder" role="tab" aria-controls="detailOrder" aria-selected="false">DETAIL ORDER</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <div class="tab-pane fade show active" id="dressSec" role="tabpanel" aria-labelledby="dressSec-tab">
            <!-- Judul & Sub Judul -->
            <div class="container text-center mt-5 mb-3">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR DRESS</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container">
                <ul class="checkboxImg row p-0 justify-content-center">
                    
                    @foreach ($brands as $brand)
                    <li class="checkboxImg col-lg-3 col-md-4 col-sm-6 col-12">
                        <input type="checkbox" id="dress_{{ $brand->id }}" name="dressCheck" value="{{ $brand->id }}"/>
                        <label for="dress_{{ $brand->id }}" class="border">
                            <div class="rounded-top imgcheckbox" style="height:200px; width:100%; background-image: url('{{ asset('/img/page1-04.jpg') }}');background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="rounded text-dark text-center pt-2 pb-1">
                                <h6 class="text-muted">{{ $brand->nama_brand }}</h6>
                            </div>
                        </label>
                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
        <div class="tab-pane fade" id="typeSec" role="tabpanel" aria-labelledby="typeSec-tab">
            <div id="dataSec">
                
            </div>
        </div>
        <div class="tab-pane fade" id="colorSec" role="tabpanel" aria-labelledby="colorSec-tab">

            <!-- Judul & Sub Judul -->
            <div class="container text-center mt-5 mb-3">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR COLOR</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container mb-5 text-center">
                <div class="row">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="/img/katalog-warna.png" class="mb-3" alt="" style="width: 60%; max-width: 400px; height: auto;">
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <ul class="checkboxImg p-0">
                            <li class="checkboxImg text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="color1" name="colorCheck[]"/>
                                <label for="color1" class="border rounded-circle imgcheckbox bg-danger" style="height:55px; width:55px;">
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg  text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="color2" name="colorCheck[]"/>
                                <label for="color2" class="border rounded-circle imgcheckbox bg-info" style="height:55px; width:55px;">
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg  text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="color3" name="colorCheck[]"/>
                                <label for="color3" class="border rounded-circle imgcheckbox bg-warning" style="height:55px; width:55px;">
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg  text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="color4" name="colorCheck[]"/>
                                <label for="color4" class="border rounded-circle imgcheckbox bg-primary" style="height:55px; width:55px;">
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="sizeSec" role="tabpanel" aria-labelledby="sizeSec-tab">
            <!-- Judul & Sub Judul -->
            <div class="container text-center mb-3 mt-5">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR SIZE</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container mb-5 text-center">
                <div class="row">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="/img/katalog-size.png" class="mb-3" alt="" style="width: 60%; max-width: 400px; height: auto;">
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <ul class="checkboxImg p-0">
                            <li class="checkboxImg text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="size1" name="sizeCheck[]"/>
                                <label for="size1" class="border" style="height:55px; width:55px;">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">XS</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="size2" name="sizeCheck[]"/>
                                <label for="size2" class="border" style="height:55px; width:55px;">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">S</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="size3" name="sizeCheck[]"/>
                                <label for="size3" class="border" style="height:55px; width:55px;">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">M</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg text-center d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="size4" name="sizeCheck[]"/>
                                <label for="size4" class="border" style="height:55px; width:55px;">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">L</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="lenghtSec" role="tabpanel" aria-labelledby="lenghtSec-tab">
            <!-- Judul & Sub Judul -->
            <div class="container text-center mb-5 mt-5">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR LENGHT OF DRESS</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container mb-5 text-center">
                <img src="/img/long-dress.png" class="mb-3" alt="" style="width: 60%; max-width: 400px; height: auto;">
                <br>
                <div class="btn-group mt-3">
                    <button type="button" class="btn btn-pink-2 text-white dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        CHOOSE THE LENGTH OF DRESS
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="khimarSec" role="tabpanel" aria-labelledby="khimarSec-tab">
            <!-- Judul & Sub Judul -->
            <div class="container text-center mb-5 mt-5">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR KHIMAR</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container mb-5">
                <ul class="checkboxImg row p-0 justify-content-center">
                    <li class="checkboxImg col-lg-3 col-md-6">
                        <input type="checkbox" id="khimar1" name="khimarCheck[]"/>
                        <label for="khimar1" class="border">
                            <div class="rounded-top imgcheckbox" style="height:200px; width:100%; background-image: url('/img/page1-04.jpg');background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="rounded text-dark text-center pt-2 pb-1">
                                <h6 class="text-muted">PHASMINA</h6>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </div>
                        </label>
                    </li>
                    <li class="checkboxImg col-lg-3 col-md-6">
                        <input type="checkbox" id="khimar2" name="khimarCheck[]"/>
                        <label for="khimar2" class="border">
                            <div class="rounded-top imgcheckbox" style="height:200px; width:100%; background-image: url('/img/page1-04.jpg');background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="rounded text-dark text-center pt-2 pb-1">
                                <h6 class="text-muted">SQUARE</h6>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </div>
                        </label>
                    </li>

                    <li class="checkboxImg col-lg-3 col-md-6">
                        <input type="checkbox" id="khimar3" name="khimarCheck[]"/>
                        <label for="khimar3" class="border">
                            <div class="rounded-top imgcheckbox" style="height:200px; width:100%; background-image: url('/img/page1-04.jpg');background-position: top; background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="rounded text-dark text-center pt-2 pb-1">
                                <h6 class="text-muted">TANPA KHIMAR</h6>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="niqobSec" role="tabpanel" aria-labelledby="niqobSec-tab">

            <!-- Judul & Sub Judul -->
            <div class="container text-center mb-5 mt-5">
                <div class="col-lg-9 col-12 mx-auto">
                    <h2 class="text-noto text-pink-2">CUSTOM YOUR NIQOB</h2>
                    <p class="card-text text-muted text-center" style="letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim admin- im veniam, quis nostrud exerci tation</p>
                </div>
            </div>

            <!-- Daftar Card -->
            <div class="container mb-5 text-center">
                <div class="row">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="/img/niqop.png" class="mb-3" alt="" style="width: 60%; max-width: 400px; height: auto;">
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <ul class="checkboxImg">
                            <li class="checkboxImg d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="niqob1" name="niqobCheck[]"/>
                                <label for="niqob1" class="border">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">20 CM</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="niqob2" name="niqobCheck[]"/>
                                <label for="niqob2" class="border">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">30 CM</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                            <li class="checkboxImg d-flex flex-row align-content-center align-items-center">
                                <input type="checkbox" id="niqob3" name="niqobCheck[]"/>
                                <label for="niqob3" class="border">
                                    <div class="rounded text-dark text-center p-3">
                                        <h6 class="text-muted mb-0">TANPA NIQOB</h6>
                                    </div>
                                </label>
                                <p class="text-pink-2 mb-1">
                                    Rp. 200.000
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="detailOrder" role="tabpanel" aria-labelledby="detailOrder-tab">

            <div class="col-md-4 mx-auto mb-5 mt-5">
                <h4 class="text-center mb-3 text-muted">Your Order</h4>
                <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Dress</small>
                        <h6 class="my-1">Himari Series</h6>
                        <input type="hidden" name="brandId" id="brandId" value="">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Type</small>
                        <h6 class="my-1">Series 1</h6>
                        <input type="hidden" name="typeId" id="typeId" value="">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Color</small>
                        <h6 class="my-1">Biru Tosca</h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Color</small>
                        <h6 class="my-1">Biru Tosca</h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Color</small>
                        <h6 class="my-1">Biru Tosca</h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">Your Color</small>
                        <h6 class="my-1">Biru Tosca</h6>
                    </div>
                </li>
                </ul>

                <label for="firstName">Email Address</label><label class="text-danger">*</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="required">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                
                <div class="d-flex flex-row mt-3">
                    <button class="btn btn-pink-1 flex-fill mr-1 text-white">CHECKOUT</button>
                    <button class="btn btn-pink-2 flex-fill ml-1 text-white">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigasi Bottom-->
<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-white px-4 py-3 shadow-lg">
    <div class="container d-block justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item mr-2 ml-auto">
                <button type="button" class="btn px-4 text-muted font-weight-bold btnPrevious">BACK</button>
                <button type="button" class="btn btn-outline-pink-2 px-4 text-pink-2 btnNext" id="nextButton">NEXT</button>
            </li>
        </ul>
    </div>
</nav>
@endsection