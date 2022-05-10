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

    <section class="content">
        <div class="container-fluid">
            <!-- partial:index.partial.html -->
            <div class="card order-summery col-md-8 mb-4 pb-4">
                <div class="card-body text-center">
                    <h1>Tilauksen yhteenveto:</h1>
                    <h2 class="order-num sub">(terrace name)</h2>

                    <div class="row">
                        <div class="col text-right">Päivämäärä:</div>
                        <div class="col text-left order-num">2022-04-14</div>
                    </div>
                    <table class="table mt-4 pt-4">
                        <thead>
                            <tr>
                                <th scope="col">Tilaus:</th>
                                <th scope="col">KPL</th>
                                <th scope="col">Lisätietoa Tilauksesta</th>
                                <th scope="col">Hinta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Bites Burgers</th>
                                <td>1x</td>
                                <td></td>
                                <td>1,460$</td>
                            </tr>
                            <tr>
                                <th scope="row">Bites Burgers</th>
                                <td>1x</td>
                                <td></td>
                                <td>1,460$</td>
                            </tr>
                            <tr>
                                <th scope="row">Bites Burgers</th>
                                <td>1x</td>
                                <td></td>
                                <td>1,460$</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3">Total:</td>
                                <td class="order-num">2920$</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mt-4 ">
                        <div class="col text-center">
                            <p>Maksutiedot</p>
                            <p>{payment-information}</p>

                        </div>
                        <div class="col text-center">
                            <p>Maksutiedot</p>
                            <p>{payment-information}</p>
                        </div>
                    </div>
                    <div class="row mt-4 ">
                        <div class="col text-center">
                            <p>Maksutiedot</p>
                            <p>{payment-information}</p>

                        </div>
                        <div class="col text-center">
                            <div class="col">
                                <div class="circle order-num">
                                    <span
                                        style=" height: 160px;width: 160px;background-color: #1e1c1c;border-radius: 50%;display: inline-block;text-align: center;padding: 30px;font-size: 32px;font-weight: bold;transform: rotate(25deg);">Lataa
                                        kuitti</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial -->



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
