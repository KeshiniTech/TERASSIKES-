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
        <h3 class="text-left col-12 p-0 row ml-1 mb-5">Widgetti: {widget-name}</h3>
        
        <form class="col-md-10">
            <h4 class="text-left">Kopioi koodi:</h4>
            <div class="form-control p-150">
                <h5 class="on">{widget-embed-code}</h5>
            </div>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection