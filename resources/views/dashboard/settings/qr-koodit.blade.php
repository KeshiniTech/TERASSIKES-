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
<section class="content col-md-12">
    <div class="container-fluid setting-yellow text-center">
        <h3 class="text-left">QR-koodit</h3>
        <div class="col-12 mt-4">

            <div class="card order-summery col-md-12 kol-body">
                <h3 class="text-left mt-4 ml-3">Valitse malli</h3>
                <div class="card-body text-center row pt-2 pb-5">
                    <img class="col-4" src="{{ asset('img/draft1.png') }}" alt="">
                    <img class="col-4" src="{{ asset('img/draft2.png') }}" alt="">
                    <img class="col-4" src="{{ asset('img/draft3.png') }}" alt="">
                </div>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection