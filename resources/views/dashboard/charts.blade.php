@extends('dashboard.master')
@section('page-title', '| Body')
@section('body')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
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
                            <div class="info-box-content">
                                <span class="info-box-text">Climate</span>
                                <span class="info-box-number">13,648</span>
                                <span class="info-box-number"><i class="fas fa-cloud-sun-rain"></i> 13,648</span>

                            </div>
                            <div class="svg-item">
                                <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                                    <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="#fff">
                                    </circle>
                                    <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent"
                                        stroke-width="3.5"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954"
                                        fill="transparent" stroke-width="3.5" stroke-dasharray="69 31"
                                        stroke-dashoffset="25">
                                    </circle>
                                    <g class="donut-text donut-text-1">

                                        <text y="50%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-percent">+69%</tspan>
                                        </text>
                                        <text y="60%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-data"></tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-text">Climate</span>
                                <span class="info-box-number">13,648</span>
                                <span class="info-box-number"><i class="fas fa-cloud-sun-rain"></i> 13,648</span>

                            </div>
                            <div class="svg-item">
                                <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                                    <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="#fff">
                                    </circle>
                                    <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent"
                                        stroke-width="3.5"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954"
                                        fill="transparent" stroke-width="3.5" stroke-dasharray="69 31"
                                        stroke-dashoffset="25">
                                    </circle>
                                    <g class="donut-text donut-text-1">

                                        <text y="50%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-percent">+69%</tspan>
                                        </text>
                                        <text y="60%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-data"></tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-text">Climate</span>
                                <span class="info-box-number">13,648</span>
                                <span class="info-box-number"><i class="fas fa-cloud-sun-rain"></i> 13,648</span>

                            </div>
                            <div class="svg-item">
                                <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                                    <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="#fff">
                                    </circle>
                                    <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent"
                                        stroke-width="3.5"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954"
                                        fill="transparent" stroke-width="3.5" stroke-dasharray="69 31"
                                        stroke-dashoffset="25">
                                    </circle>
                                    <g class="donut-text donut-text-1">

                                        <text y="50%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-percent">+69%</tspan>
                                        </text>
                                        <text y="60%" transform="translate(0, 2)">
                                            <tspan x="50%" text-anchor="middle" class="donut-data"></tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
                        <div id="chart">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
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
                    </div>
                </div>
                <div class="row col-md-3">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="text-center mt-3 pb-3 mb-3 d-flex" style="width:100%;">
                                <div class="image" style="width:100%;">
                                    <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle mb-2"
                                        style="width:auto;height: 179px;outline: #faa51a  solid 13px;transform: rotate(5deg);">
                                    <p class="mt-4" style="font-size: 37px;font-weight:900;">Justus Berner</p>
                                    <p style="font-size: 20px;font-weight:400;color:grey;">CEO Terassikesä
                                    </p>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left d-flex" style="width:100%;">
                                <h3 style="font-weight:900;">Uudet Viestit</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3" style="width:100%;">
                                <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle mb-2"
                                    style="width:auto;height: 53px;transform: rotate(5deg);">
                            </div>
                            <div class="col-9" style="width:100%;">
                                <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3" style="width:100%;">
                                <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle mb-2"
                                    style="width:auto;height: 53px;transform: rotate(5deg);">
                            </div>
                            <div class="col-9" style="width:100%;">
                                <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3" style="width:100%;">
                                <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle mb-2"
                                    style="width:auto;height: 53px;transform: rotate(5deg);">
                            </div>
                            <div class="col-9" style="width:100%;">
                                <p style="font-size:20px;font-weight:600;">Elli Esimerkki</p>
                                <p style="font-size:20px;color:grey;">Onko tilaus tehty?</p>

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
