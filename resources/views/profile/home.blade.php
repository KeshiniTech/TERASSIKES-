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


    <div class="row mt-4 text-start">
        <div class="card">
            <div class="card-body">
                <h5><b>Hello, {username}</b></h5>
                <h5 class="mt-4 mb-4"><b>Suosikkisi {favorites}</b></h5>
                <section class=" mt-4 pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="mb-3"><b>Suosikkisi {favorites}</b> </h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn btn-warning mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-warning mb-3 " href="#carouselExampleIndicators2" role="button"
                                    data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="row mt-4 justify-content-center align-items-center">
                    <div class="row bg-black col-lg-11 rounded">
                        <div class="col">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('img/spash-white.png') }}" class="round-border-primary">
                                </div>
                                <div class="col">
                                    <h2 class="primary-text-big">Omat SunCoinit</h2>
                                    <p class="text-white">Mitä voin tehdä näillä?</p>
                                </div>

                            </div>


                        </div>
                        <div class="col-2">
                            <div class="row justify-content-center align-items-center lablel1">
                                <div class="col mt-2">
                                    <p class="text-white-big">2</p>
                                </div>
                                <div class="col mt-2">
                                    <p class="text-white-big">X</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/spash-white.png') }}" class="round-border-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" mt-4 pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="mb-3"><b>Tilaa uudestaan {latest-order-terrace}</b> </h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn btn-warning mb-3 mr-1" href="#carouselExampleIndicators3" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-warning mb-3 " href="#carouselExampleIndicators3" role="button"
                                    data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="Responsive image"
                                                            src="{{ asset('img/bg1.png') }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Ravintola Veljekset</h4>
                                                            <p class="card-text">Ravintola Sipoon Söderkullassa</p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-5">
                    <div class="container">
                        <h4 class="mb-3"><b>Omat terassikesäpinssit 2022</b> </h4>
                        <div class="row">
                            <div class="col-6">
                                {{-- <h2 class="primary-text-big">Omat SunCoinit</h2>
                                <p class="text-white">Mitä voin tehdä näillä?</p> --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="row mainrow">
                                            <div class="col">
                                                <h2><b>{Terrace-name}</b></h2>
                                                <p class="">{Terrace-name}</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-black rounded text-center">
                                                    <h2 class="primary-text-big p-2">10</h2>
                                                    <h6 class="primary-text-mid">Kesäkuuta</p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row mt-2 mainrow">
                                            <div class="col">
                                                <h2><b>{Terrace-name}</b></h2>
                                                <p class="">{Terrace-name}</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-black rounded text-center">
                                                    <h2 class="primary-text-big p-2">10</h2>
                                                    <h6 class="primary-text-mid">Kesäkuuta</p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row mt-2 mainrow">
                                            <div class="col">
                                                <h2><b>{Terrace-name}</b></h2>
                                                <p class="">{Terrace-name}</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-black rounded text-center">
                                                    <h2 class="primary-text-big p-2">10</h2>
                                                    <h6 class="primary-text-mid">Kesäkuuta</p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row mt-2 mainrow">
                                            <div class="col">
                                                <h2><b>{Terrace-name}</b></h2>
                                                <p class="">{Terrace-name}</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-black rounded text-center">
                                                    <h2 class="primary-text-big p-2">10</h2>
                                                    <h6 class="primary-text-mid">Kesäkuuta</p>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="col-2 bg-black rounded">
                                        <p class="test">Luelisää</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-6">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786"
                                    width="600" height="450" frameborder="0" style="border:0"></iframe>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
