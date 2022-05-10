@extends('dashboard.master')
@section('page-title', '| Body')
@section('body')

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row mt-4">
                <div class="row col-md-9">
                    <div class="col-md-12 kamjet-container mb-4">
                        <div class="row col-md-7 kamjet-container-sub mb-2">
                            <div class="col text-black-big">Kampanjat</div>
                            <div class="col img"><img src="{{ asset('img/ada.png') }}"></div>
                            <div class="col-1 text-black-white">x</div>
                            <div class="col"><img src="{{ asset('img/logo.png') }}" class="img1">
                            </div>
                        </div>
                        <div class="row col-md-12 kamjet-container-sub text-center mt-4">
                            <div class="col text-black-big">
                                <p>HEAD-koodi</p>
                            </div>
                        </div>
                        <div class="row col-md-12  mt-4">
                            <div class="col-2">

                            </div>
                            <div class="col-8 kamjet-container-content">
                                <p>

                                    (() => {
                                    window.onload = function() {
                                    const scriptElement = document.createElement('script');
                                    scriptElement.type = 'text/javascript';
                                    scriptElement.src = 'https://d3c1rbfz6sx1n3.cloudfront.net/embedded-script.js';
                                    document.head.appendChild(scriptElement);
                                    }
                                    })()

                                </p>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                        <div class="row col-md-12 kamjet-container-sub text-center mt-4">
                            <div class="col text-black-big">
                                <p>DIV-koodi</p>
                            </div>
                        </div>
                        <div class="row col-md-12  mt-4">
                            <div class="col-2">

                            </div>
                            <div class="col-8 kamjet-container-content">
                                <p>
                                    Terassikesä on lyöttäytynyt kampanjoiden osalta Adactin kanssa yhteen.
                                    Terassikesä-paketin mukana saat Acact X Terassikesä -lisenssin.

                                </p>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                        <div class="row col-md-12  mt-4">
                            <div class="col-2">

                            </div>
                            <div class="col-8 kamjet-container-content-sub">
                                <p>
                                    Terassikesä on lyöttäytynyt kampanjoiden osalta Adactin kanssa yhteen.
                                    Terassikesä-paketin mukana saat Acact X Terassikesä -lisenssin.

                                </p>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                        <div class="row col-md-12  mt-4">
                            <div class="col-4">

                            </div>
                            <div class="col-4 kamjet-container-content-sub">
                                <button type="submit" class="btn btn-warning form-control mt-4 col-md-6">Tallenna</button>
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-3">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-12 text-center"><button type="submit"
                                    class="btn btn-warning form-control mt-4">Avaa Adact</button></div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center"><button type="submit"
                                    class="btn bn-white form-control mt-4 ">Avaa Terassikesä-ohjeet</button></div>
                        </div>

                    </div>

                </div>

            </div>



        </div><!-- /.container-fluid -->
    </section>


@endsection
