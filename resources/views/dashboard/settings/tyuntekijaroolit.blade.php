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
        <h3 class="text-left col-12 p-0 row ml-1 mb-5">Työntekijäroolit</h3>
        <form class="col-12 row">
            <div class="form-control border-radius border-radius-t p-2 col-12 row min-hg-70 ml-1">
                <div class="col-8" style="float: left;">
                    <h5 class="text-left text_black">{role 1}</h5>
                    <h6 class="text-left text_black">{role-details}</h6>
                </div>
                <div class="col-4" style="float: left;">
                    <span class="custom_list_button"><span class="min_circle"></span></span>
                </div>
            </div>
            <div class="form-control border-radius p-2 col-12 row min-hg-70 ml-1">
                <div class="col-8" style="float: left;">
                    <h5 class="text-left text_black">{role 1}</h5>
                    <h6 class="text-left text_black">{role-details}</h6>
                </div>
                <div class="col-4" style="float: left;">
                    <span class="custom_list_button"><span class="min_circle"></span></span>
                </div>
            </div>
            <div class="form-control border-radius p-2 col-12 row min-hg-70 ml-1">
                <div class="col-8" style="float: left;">
                    <h5 class="text-left text_black">{role 1}</h5>
                    <h6 class="text-left text_black">{role-details}</h6>
                </div>
                <div class="col-4" style="float: left;">
                    <span class="custom_list_button"><span class="min_circle"></span></span>
                </div>
            </div>
            <div class="form-control border-radius border-radius-b p-2 col-12 row min-hg-70 ml-1 mb-5">
                <div class="col-8" style="float: left;">
                    <h5 class="text-left text_black">{role 1}</h5>
                    <h6 class="text-left text_black">{role-details}</h6>
                </div>
                <div class="col-4" style="float: left;">
                    <span class="custom_list_button"><span class="min_circle"></span></span>
                </div>
            </div>
            <button type="submit" class="btn btn-warning form-control col-md-4 m-auto">Tallenna</button>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection