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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- partial:index.partial.html -->
            <div class="card order-summery col-md-8 mb-4 pb-4">
                <div class="card-body text-center">
                    <h1>Lisää uusi kategoria</h1>
                    <form>
                        <div class="row mt-4">
                            <div class="col text-center">
                                <img src="{{ asset('img/test.jpg') }}" class="rounded cat-image" alt="Cinque Terre">

                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="exampleInputPassword1" class="form-label order-num">Kategorian nimi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-black">Tallenna</button>
                    </form>
                </div>
            </div>
            <!-- partial -->



        </div><!-- /.container-fluid -->
    </section>



@endsection
