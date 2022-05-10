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


    <div class="row text-start justify-content-center align-items-center row-body">
        <div class="col-8 text-center">
            <p>Terassikesä on kaikkia varten.</p>
            <p> Kutsu kavereita ja ansaitse SunCoineja</p>
            <img src="{{ asset('img/logo-4.png') }}" class="img-fluid">
            <p class="mt-4">Lisää saamasi</p>
            <p>Terassikesä-promokoodi</p>
            <div class="row mt-4 mb-4 text-start justify-content-center align-items-center">
                <div class="row col-lg-8 mt-4 text-start justify-content-center align-items-center share-panel">
                    <div class="col text-start">
                        <span>Add promo code</span>
                    </div>
                    <div class="col-3  text-center">
                        <p class="bg-warning share-panel-text rounded ">Käytä</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
