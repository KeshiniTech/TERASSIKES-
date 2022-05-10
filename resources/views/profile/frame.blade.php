@extends('profile.master')
@section('body')
    <div class="row tab-manu">
        <div class="col active">Käyttäjä</div>
        <div class="col">Maksutavat</div>
        <div class="col">Tilaushistoria</div>
        <div class="col">SunCoin</div>
        <div class="col-3">Oma Terassikesäkoodi</div>
        <div class="col">Asetukset</div>

    </div>


    <div class="row mt-4 text-start justify-content-center align-items-center">
        <div class="card">
            <div class="card-body text-center">
                <form>
                    <div class="mb-3 form-group has-search">
                        <span class="form-control-feedback"><img src="{{ asset('img/visa.png') }}"></span>
                        <input type="text" class="form-control" placeholder="{card-name}">
                        {{-- <span class="form-control-feedback"><img src="{{ asset('img/visa.png') }}"></span> --}}

                    </div>
                    <div class="mb-3 form-group has-search">
                        <span class="form-control-feedback"><img src="{{ asset('img/visa.png') }}"></span>
                        <input type="text" class="form-control" placeholder="{card-name}">
                    </div>
                    <button type="submit" class="btn btn-warning">Lisää maksutapa</button>
                </form>

            </div>
        </div>
    </div>
@endsection
