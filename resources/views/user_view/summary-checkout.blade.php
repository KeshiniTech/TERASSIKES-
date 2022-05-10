@extends('user_view.master')
@section('page-title', '| Home')
@section('body')
<!-- Main content -->
<section class="content primary-color-g pb-5" style="margin-top: 60px;">
    <div class="container-fluid mt-4 mb-4 row">
        <div class="col-12 offset-md-1 col-md-10 primary-color-w mt-3 p-3">
            <h2 class="textCenter-alignment">Tuotteet</h2>
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8 primary-color-g mt-3 border-radius-t" style="border-bottom: 3px dashed #cfcfcf;">
                    <div class="row">
                        <div class="col-8 p-2">
                            <h4 class="primary-text-cl">{item1}</h4>
                            <p>Täysjauhelihapihvi (180g) naudasta ja pekonia, BBQ-majoneesi, ranskalaiset</p>
                            <p>00,00€</p>
                        </div>
                        <div class="col-4 col-md-2 m-auto">
                            <span class="circle-logo m-auto" style="width: 60px; height: 60px; float: revert;">
                                <img src="{{asset('img/nathan-dumlao-6VhPY27jdps-unsplash 1.png')}}" alt="" style="width: 100%; border-radius: 50%;">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8 primary-color-g mb-3 border-radius-b">
                    <div class="row">
                        <div class="col-8 p-2">
                            <h4 class="primary-text-cl">{item1}</h4>
                            <p>Täysjauhelihapihvi (180g) naudasta ja pekonia, BBQ-majoneesi, ranskalaiset</p>
                            <p>00,00€</p>
                        </div>
                        <div class="col-4 col-md-2 m-auto">
                            <span class="circle-logo m-auto" style="width: 60px; height: 60px; float: revert;">
                                <img src="{{asset('img/nathan-dumlao-6VhPY27jdps-unsplash 1.png')}}" alt="" style="width: 100%; border-radius: 50%;">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="textCenter-alignment mb-3">Valitse tilausaika<i class="fa-solid fa-clock clock-st ml-1 primary-text-cl"></i></h2>
            <div class="col-12 col-md-6 row m-auto pt-3 pb-3 pl-2 pr-2 rounded shadow">
                <h3 class="col-7">Valitse kellonaika:</h3>
                <select name="" id="" class="col-5 font-weight-normal primary-text-cl-w primary-color-b rounded">
                    <option value="">{choose-time}</option>
                    <option value="">{choose-time}</option>
                </select>
            </div>

            <div class="row mt-4">
                <div class="col-12 offset-md-2 col-md-5 mb-3 rounded-5 shadow-sm" style="background-color: #FCFCFC;">
                    <div class="row inside-shadow rounded-5 p-4" style="min-height: 100%;">
                        <h4 class="primary-text-cl p-2">Valitse maksutapa</h4>
                        <div class="col-12 p-2 row primary-color-g shadow-2 rounded-3 mb-3">
                            <div class="col-2"><i class="fa-brands fa-cc-visa" style="font-size: 35px;color: #21246e;"></i></div>
                            <h4 class="col-7">{card-name}</h4>
                            <h4 class="primary-text-cl col-3 text-right">Käytä</h4>
                        </div>
                        <div class="col-12 p-2 row primary-color-g shadow-2 rounded-3 mb-3">
                            <div class="col-2"><i class="fa-brands fa-cc-visa" style="font-size: 35px;color: #21246e;"></i></div>
                            <h4 class="col-7">{card-name}</h4>
                            <h4 class="primary-text-cl col-3 text-right">Käytä</h4>
                        </div>
                        <div class="col-12 p-2 row primary-color-g shadow-2 rounded-3 mb-3">
                            <div class="col-2"><i class="fa-brands fa-cc-visa" style="font-size: 35px;color: #21246e;"></i></div>
                            <h4 class="col-7">{card-name}</h4>
                            <h4 class="primary-text-cl col-3 text-right">Käytä</h4>
                        </div>
                        <div class="col-12 p-4 row primary-color-b shadow-2 rounded-3 mb-3">
                            <h4 class="col-12 primary-text-cl text-center">Lisää maksutapa</h4>
                        </div>
                        <h4 class="p-2 mb-2">Alennuskoodi</h4>

                        <div class="col-12 p-2 row primary-color-g shadow-2 rounded-3 mb-3">
                            <p class="col-8">Lisää alennuskoodi</p>
                            <h4 class="primary-text-cl col-4 text-right">Käytä</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 row col-md-3 mb-3 ml-2 rounded-5 shadow-sm" style="background-color: #FCFCFC;">
                    <div class="col-12 inside-shadow rounded-5" style="min-height: 100%;">
                        <div class="col-12 p-4">
                            <h2 class="text-center">Hinnat sis. verot</h2><br>
                            <h2 class="text-center">Välisumma<br> <span class="primary-text-cl">{subtotal}€</span></h2><br>
                            <h2 class="text-center">Palvelumaksu<br> <span class="primary-text-cl">0,20€</span></h2><br>
                            <h2 class="text-center">Alennus<br> <span class="primary-text-cl">0,20€</span></h2><br>
                            <h2 class="text-center">Yhteensä<br> <span class="primary-text-cl">{summary}€</span></h2><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row mb-5 mt-3">
                <div class="col-10 col-md-3 p-4 row primary-color-b shadow-2 rounded-3 m-auto">
                    <h2 class="col-12 primary-text-cl text-center">Tilaa</h2>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection