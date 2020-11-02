@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="col-lg-4 mx-auto">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
            <div class="text-center mb-4">
            <img class="mb-4" src="{{ asset('/img/primary-logo.png') }}" alt="" width="auto" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Login Page</h1>
            </div>
        
            <div class="form-label-group">
                <label for="email">Email address</label>
                <input type="email" id="email" placeholder="Email " class="form-control mb-3  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-label-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Password" required="">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
            </label>
            </div>
            <button class="btn btn-lg btn-pink-2 text-white btn-block" type="submit">{{ __('Login') }}</button>
        </form>
    </div>
</div>
@endsection
