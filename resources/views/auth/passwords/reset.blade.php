@extends('layouts.login_app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card primary-color-b">
                <div class="card-header col-6 m-auto"><img src="{{asset('img/login-logo.png')}}" alt="" style="width: 100%;"></div>
                <div class="card-header col-12 m-auto text-center primary-text-cl-w">
                    <h1><b>Kirjaudu</b></h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label primary-text-cl-w">{{ __('käyttäjätunnus') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row password_show">
                            <label for="password" class="col-md-12 col-form-label primary-text-cl-w">{{ __('Salasana') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <i class="fa-solid fa-eye" attr="show"></i>
                                <i class="fa-solid fa-eye-slash" attr="hide" style="display: none;"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row password_show">
                            <label for="password-confirm" class="col-md-12 col-form-label primary-text-cl-w">{{ __('Vahvista salasana') }}</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i class="fa-solid fa-eye" attr="show"></i>
                                <i class="fa-solid fa-eye-slash" attr="hide" style="display: none;"></i>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                            <button type="submit" class="btn primary-color col-12 mt-3">
                                    <h3><b> {{ __('Nollaa salasana') }}</b></h3>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection