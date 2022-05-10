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
            <div class="row mb-2">
                <div class="col text-left">
                    <h1>Työajanseuranta</h1>

                </div>
                <div class="col text-left">
                    <p class="monitordiv">Ota pois käytöstä</p>
                </div>
            </div>
            <form class="text-left">
                <div class="mb-4">
                    <p class="monitordiv2">Viikottainen työaika <span class="monitordiv3">5</span> päivää</p>
                </div>
                <button type="submit" class="btn btn-warning form-control col-md-4">Tallenna</button>

            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
