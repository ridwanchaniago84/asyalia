<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asyalia</title>
        <link rel="shortcut icon" href="{{ asset('/img/primary-logo.png') }}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        <!-- Owl CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/85f6c3d1ae.js"></script>


    </head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white px-4 py-1 shadow-sm">
        <div class="container">
                <a class="navbar-brand" href="/">
                <img src="{{ asset('/img/primary-logo.png') }}" width="auto" height="50" class="d-inline-block align-top" alt=""
                    loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mt-2 mt-lg-0 ml-auto d-flex flex-lg-row flex-column text-center">
                    @if(\Request::is('/'))
                    <li class="nav-item mr-lg-2 mr-0 my-lg-0 my-3">
                        <a href="{{ route('order') }}" type="button" class="btn btn-pink-2 btn-block text-white font-weight-bold test">CUSTOM YOUR
                            DRESS</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            &nbsp&nbsp Cart
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item d-flex flex-lg-row flex-column">
                        @guest
                        <a href="{{ route('login') }}" class="btn text-pink-2 my-2 my-sm-0" type="submit">{{ __('Login') }}</a>
                        
                        @if (Route::has('register'))
                        <a class="btn text-pink-2 my-2 my-sm-0"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <!-- Footer -->
    <footer class="bg-pink">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 text-lg-left text-center mb-lg-0 mb-4">
                    <img class="mb-2" src="/img/logo-text.png" alt="" width="300" height="auto">
                </div>
                <div class="col- col-md text-lg-left text-center">
                    <h5>Help</h5>
                    <ul class="list-unstyled text-small mb-lg-0 mb-5">
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Akun Saya</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Wishlist</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">FAQ</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Tata Cara Order</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Konfirmasi</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Pembayaran</a></li>
                    </ul>
                </div>
                <div class="col- col-md text-lg-left text-center">
                    <h5>About Us</h5>
                    <ul class="list-unstyled text-small ">
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Tentang Kami</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Kebijakan Privasi</a></li>
                        <li class="my-2"><a class="text-muted text-decoration-none" href="#">Social Media</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Sub Footer -->
    <div class="bg-pink-2">
        <div class="container py-2 text-center">
            <hp class="card-title text-white mb-0">ASYALIA . ID - LOREM IPSUM COLOR DOT SIT AMET</hp>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Owl JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    
    <!-- Custom Owl -->
    <script src="{{ asset('assets/js/custom-owl.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    
</body>

</html>
