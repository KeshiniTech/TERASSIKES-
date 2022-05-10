@extends('dashboard.master_setting')
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
<!-- Content Header (Page header) -->

<!-- /.content-header -->

<!-- Main content -->
<section class="content row">
    <div class="container-fluid setting-yellow text-center">
        <h3 class="text-left col-12 p-0 row ml-1">Avainsanat:</h3>
        <h4 class="text-left col-12 p-0 row mb-5 ml-1">Lisää uusia avainsanoja tai poista vanhoja</h4>
        <form class="col-md-6">
            <div class="mb-3 row">
                <div class="form-control offset-4 col-8 pt-3 mb-3"><i class="fa-solid fa-plus pr-3"></i>Lisää uusi avainsana</div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>
                <div class="form-control p-2 row ml-1">
                    <div class="col-6 row" style="float: left;">
                        <h3 class="col-8 m-auto">{tag}</h3>
                    </div>
                    <div class="col-6 row">
                        <input type="button" class="form-control col-8 m-auto text__color" id="exampleInputEmail1" value="Poista" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-warning form-control col-md-6  mb-3">Tallenna</button>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection