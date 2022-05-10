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
    <section class="content col-md-8">
        <div class="container-fluid setting-yellow text-center">
            <h6>Terassin Tiedot</h6>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin nimi"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tagline"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Sähköpostiosoite"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Puhelinnumero"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Y-tunnus"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin verkkosivu"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <h6>Terassin Tiedot</h6>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin nimi"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin nimi"
                            aria-describedby="emailHelp" autocomplete="off">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin nimi"
                            aria-describedby="emailHelp" autocomplete="off">
                    </div>

                </div>
                <button type="submit" class="btn btn-warning form-control col-md-6">Submit</button>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
