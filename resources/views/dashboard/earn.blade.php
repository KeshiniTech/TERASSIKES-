@extends('dashboard.master')
@section('page-title', '| Body')
@section('body')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-3">
                            <h1 class="m-0">Ansainta</h1>
                        </div>
                        <div class="col-5 ">
                            <button type="submit" class="btn btn-white text-left"
                                style="width:80%;background:#c1c7ce; color:white;font-size:20px;"><i
                                    class="fas fa-download pr-3"></i>Lataa raportti</button>
                        </div>
                    </div>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row ">
                <div class="row col-md-9">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <div class="row">
                                <div class="col">
                                    <p class="arrow-orange"><i class="fas fa-arrow-trend-up"></i></p>
                                </div>
                                <div class="col">
                                    <p class="text-black">300,000€</p>
                                    <p class="text-gray">Kokonaismyynti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <div class="row">
                                <div class="col">
                                    <p class="arrow-orange"><i class="fas fa-arrow-trend-up"></i></p>
                                </div>
                                <div class="col">
                                    <p class="text-black">300,000€</p>
                                    <p class="text-gray">Kokonaismyynti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <div class="row">
                                <div class="col">
                                    <p class="arrow-orange"><i class="fas fa-arrow-trend-up"></i></p>
                                </div>
                                <div class="col">
                                    <p class="text-black">300,000€</p>
                                    <p class="text-gray">Kokonaismyynti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
                        <div id="chart">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 ">

                        <div class="row bottom-chart">
                            <div class="col-6">
                                <img src="{{ asset('img/test.jpg') }}" style="height: 60px;">
                            </div>
                            <div class="col-6">
                                <p class="text-black-small">{item-name}</p>
                                <p class="text-orange-small">{item-summary-sales}</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-12 ">

                        <div class="row bottom-chart">
                            <div class="col-6">
                                <img src="{{ asset('img/test.jpg') }}" style="height: 60px;">
                            </div>
                            <div class="col-6">
                                <p class="text-black-small">{item-name}</p>
                                <p class="text-orange-small">{item-summary-sales}</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-12 ">

                        <div class="row bottom-chart">
                            <div class="col-6">
                                <img src="{{ asset('img/test.jpg') }}" style="height: 60px;">
                            </div>
                            <div class="col-6">
                                <p class="text-black-small">{item-name}</p>
                                <p class="text-orange-small">{item-summary-sales}</p>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="col-md-12 col-sm-6 col-12">
                        <div class="container-fluid">
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="text-left d-flex" style="width:100%;">
                                            <h3 style="font-weight:900;">Uudet Viestit</h3>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4" style="width:100%;">
                                            <img src="dist/img/user2-160x160.jpg" width="30" height="30"
                                                class="rounded-circle mb-2"
                                                style="width:auto;height: 53px;transform: rotate(5deg);">
                                        </div>
                                        <div class="col-8" style="width:100%;">
                                            <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                            <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4" style="width:100%;">
                                            <img src="dist/img/user2-160x160.jpg" width="30" height="30"
                                                class="rounded-circle mb-2"
                                                style="width:auto;height: 53px;transform: rotate(5deg);">
                                        </div>
                                        <div class="col-8" style="width:100%;">
                                            <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                            <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-4">
                                        <div class="col-4" style="width:100%;">
                                            <img src="dist/img/user2-160x160.jpg" width="30" height="30"
                                                class="rounded-circle mb-2"
                                                style="width:auto;height: 53px;transform: rotate(5deg);">
                                        </div>
                                        <div class="col-8" style="width:100%;">
                                            <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                            <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="text-left d-flex" style="width:100%;">
                                            <h3 style="font-weight:900;">Uudet Viestit</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row col-md-3">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="text-center mt-3 pb-3 mb-3 d-flex" style="width:100%;">
                                <div class="image" style="width:100%;">
                                    {{-- <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle mb-2"
                                        style="width:auto;height: 179px;outline: #faa51a  solid 13px;transform: rotate(5deg);"> --}}
                                    <p style="font-size: 21px;font-weight:400;color:black;line-height: 0mm;">Terassinne
                                        myynti tässä kuussa
                                    </p>
                                    <p class="mt-4" style="font-size: 63px;font-weight:900;">4000€</p>


                                </div>

                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col" style="width:100%;">
                                <button type="submit" class="btn btn-white"
                                    style="width:80%;background:black; color:white;">Tallenna</button>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col"
                                style="width:80%;background: black;padding: 10px;border-radius:10px;color:white;">
                                <h4 class="text-left">Tilaukset</h4>
                                <div class="row">
                                    <div class="col">
                                        <p>Tilauksia yhteensä:</p>
                                    </div>
                                    <div class="col secondery-color">
                                        <p>20000</p>
                                    </div>
                                </div>
                                <div class="row text-center mt-4">
                                    <div class="col">
                                        <div class="dot">
                                            <div class="center">
                                                <p class="secondery-color">200</p>
                                                <p style="font-size:12px;">Viimeiset 7 päivää</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        var options = {
            series: [{
                data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,

                }
            },

            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ['#faa51a'],
                    shadeIntensity: 1,
                    type: 'vertical',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 0, 50, 50]
                },
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                    'United States', 'China', 'Germany'
                ],
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
