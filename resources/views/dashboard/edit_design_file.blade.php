@extends('dashboard.master_edit')
@section('page-title', '| Body')
@section('head')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asetukset</h1>
                </div><!-- /.col -->
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col --> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('body')

    <section class="content col-md-12 mb-4">
        <div class="container-fluid setting-yellow text-center">
            <div class="row head-design text-center">
                <div class="col">
                    <h3>Page1</h3>
                </div>
                <div class="col">
                    <h3>Page2</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col text-design-form">
                    <h3>{item-kategory}</h3>


                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4 mb-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-6 text-right">
                            <img src="{{ asset('img/qr.png') }}">
                        </div>
                        <div class="col-6 text-left">
                            <p class="text-orange">Tilaa ruuat suoraan pöytään ja maksa netissä</p>
                            <p class="text-gray">Scannaa QR-koodi, tilaa ruoat ja nauti</p>
                        </div>
                    </div>
                </div>
                <div class="col text-design-form">
                    <h3>{item-kategory}</h3>


                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4 ">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4 mb-4">
                        <div class="col-5 edit-design-text text-center">
                            <p class="pt-4">{item-image}</p>
                        </div>
                        <div class="col text-center">
                            <p class="text-black">{item-name}</p>
                            <p class="text-gray">{item-details}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
