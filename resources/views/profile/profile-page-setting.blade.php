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
            <form>
                <div class="mb-3">
                    <h4 for="exampleInputEmail1" class="form-label"><b>Puhelinnumero</b></h4>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <h4 for="exampleInputPassword1" class="form-label"><b>Sähköpostiosoite</b></h4>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <h4 for="exampleInputEmail1" class="form-label"><b>Puhelinnumero</b></h4>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <h4 for="exampleInputEmail1" class="form-label"><b>Puhelinnumero</b></h4>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">

                    </div>
                    <div class="col text-end">
                        <h4 for="exampleInputEmail1" class="form-label"><b>Salli mainos-ilmoitukset</b></h4>
                    </div>
                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input btn-warning" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Tallenna</button>
            </form>
        </div>
    </div>
@endsection
