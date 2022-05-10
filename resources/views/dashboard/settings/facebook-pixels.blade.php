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
        <h3 class="text-left col-12 p-0 row ml-1 mb-5">Facebook Pixels</h3>

        <form class="col-md-6">
            <div class="mb-3">
                <lable class="left_alignment">Lisää Facebook Pixels ID</lable>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="123456987" aria-describedby="emailHelp" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-warning form-control col-md-6">Tallenna</button>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection