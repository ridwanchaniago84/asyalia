@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="col-lg-4 mx-auto">
        <form method="POST" action="{{ route('register') }}" class="form-signin">
            @csrf
            
            <div class="text-center mb-4">
            <img class="mb-4" src="{{ asset('/img/primary-logo.png') }}" alt="" width="auto" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Register Page</h1>
            </div>
        
            <div class="form-label-group">
                <label for="inputEmail">Nama Lengkap</label>
                <input id="name" type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-label-group">
                <label for="inputPassword">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation" required autocomplete="new-password">
            </div>
            
            <button class="btn btn-lg btn-pink-2 text-white btn-block" type="submit">{{ __('Register') }}</button>
        </form>
    </div>
</div>


@endsection
