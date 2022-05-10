@extends('dashboard.master')
@section('page-title', '| Body')
@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="m-0 col-3">Analytiikka</h1>
                    <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-download"></i> Lataa pohjapiirustus</button>
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
        <!-- partial:index.partial.html -->
        <div class="drag-container"></div>
        <!-- AREA CHART -->
        <div class="card">
            <div class="card-header row">
                <h3 class="col-8">Vierailijat</h3>
                <div class="card-tools col-4">
                    <button type="button" class="btn btn-tool align-right mt-2">
                        Select date
                    </button>
                </div>
            </div>
            <div class="row" style="width: 100%;">
                <div class="col-3 pt-3 pb-5 pl-3 text-center">
                    <h2 class="col-12">400</h2>
                    <h3 class="col-12">Kaikki vierailut</h3>
                </div>
                <div class="col-3 pt-3 pb-5 pl-3 text-center">
                    <h2 class="col-12">400</h2>
                    <h3 class="col-12">Kaikki tilaukset</h3>
                </div>
                <div class="col-3 pt-3 pb-5 pl-3 text-center">
                    <h2 class="col-12">14%</h2>
                    <h3 class="col-12">Konversio</h3>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="chart">
                    <div id="areaChart" style="min-height: 250px; height: 350px; max-width: 100%;"></div>
                </div>
            </div>
            <div class="offset-4 col-4 textCenter-alignment p-3"><span class="pr-3"><i class="fa-solid fa-square primary-text-cl"></i>  Vierailijat</span>     <span><i class="fa-solid fa-square" style="color: #FE724C;"></i>  Tilaukset</span></div>
            
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card">
            <div class="card-header row">
                <div class="card-tools col-12">
                    <button type="button" class="btn btn-tool align-right mt-2">
                        Select date
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                        </tr>
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
            <!-- /.card-body -->
        </div>

    </div><!-- /.container-fluid -->
</section>

@endsection