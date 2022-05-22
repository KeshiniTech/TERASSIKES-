@extends('layouts.login_app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card primary-color-b">
                <div class="card-header col-6 m-auto"><img src="{{asset('img/login-logo.png')}}" alt="" style="width: 100%;"></div>
                <div class="card-header col-12 m-auto text-center primary-text-cl-w">
                    <h1><b>Unohditko salasanasi?</b></h1>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label primary-text-cl-w">{{ __('Sähköpostiosoite') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12 ">
                                    <button type="submit" class="btn primary-color col-12 mt-3">
                                       <h3><b> {{ __('Tilaa uusi salasanak') }}</b></h3>
                                    </button>
                                </div>
                                <a class="btn btn-link text-center col-12 mt-5 primary-text-cl-w" href="{{ route('login') }}">
                                    {{ __('Onko sinun terassisi jo terassikesässä?') }}
                                </a>
                                <a class="btn btn-link text-center col-12 mt-3 primary-text-cl-w" href="{{ route('register') }}">Etkö ole vielä Terassikesässä?<br>Lisää terassi ilmaiseksi alustalle!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection