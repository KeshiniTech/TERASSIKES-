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
            <h3 class="text-left">Terassin Tiedot</h3>
            <form>
                <div class="row mb-4">
                    <div class="col-5">

                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Muokkaa omia painikkeita</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Painike 1"
                                aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Painike 2"
                                aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-warning form-control mt-4 col-md-6">Submit</button>

                    </div>
                    <div class="col-7">

                        <div class="card order-summery col-md-12 kol-body">
                            <div class="card-body text-center ">
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="{{ asset('img/test.jpg') }}" class="rounded kol-image"
                                            alt="Cinque Terre">

                                    </div>
                                </div>
                                <h4>Hei, {username}!</h4>
                                <h2 class="order-num ">Leimaa itsesi</h2>
                                <div class="row mb-2">
                                    <div class="col text-center ">
                                        <p class="kol-text">Kirjaudu
                                            sisään</p>
                                    </div>
                                    <div class="col text-center">
                                        <p class="kol-text">Kirjaudu
                                            ulos</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col text-center ">
                                        <p class="kol-text pt-4">Painike1</p>
                                    </div>
                                    <div class="col text-center">
                                        <p class="kol-text pt-4">Painike 2</p>
                                    </div>
                                </div>
                                <p class="kol-text2">00:00:00</p>
                                <button type="submit" class="btn btn-black">Tallenna</button>
                            </div>
                        </div>

                    </div>
                </div>


            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
