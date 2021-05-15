@extends('layouts.app')

@section('content')
<div class="mokhdesigns-innerbanner">
    <div class="mokhdesigns-parallaxcolor mokhdesigns-innerbannerparallaxcolor">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="mokhdesigns-innerbannercontent">
                        <div class="mokhdesigns-pagetitle">
                            <h1>@lang('site.login')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="login-form-main" style="padding: 150px 0px;">
<div class="container">

<div class="row">


            <div class="card">
                <div class="card-body">
                    <h3 class="text-center"> {{ __('Sign in') }}</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label text-md-right">

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                                </label>

                                <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Login') }}
                                            </button>
                                </div>
                            </div>

                    </form>

                    <div class="col-md-12">
                        <p> Dont Have An Acount ? </p>
                        <a href="{{ route('register')}}" class="btn btn-primary btn-block">
                                {{ __('Create Account') }}
                        </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
