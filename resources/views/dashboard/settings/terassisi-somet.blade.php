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
    <section class="content col-md-6">
        <div class="container-fluid setting-yellow text-center">
            <h3 class="text-left col-12 p-0">Lisää terassisi somet</h3>
            <form>
                <div class="mb-3">
                    <lable class="left_alignment">Instagram</lable>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin nimi"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <lable class="left_alignment">Facebook</lable>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tagline"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <lable class="left_alignment">TikTok</lable>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Sähköpostiosoite"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <lable class="left_alignment">LinkedIn</lable>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Puhelinnumero"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
              
                <div class="mb-3">
                    <lable class="left_alignment">Youtube</lable>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Terassin verkkosivu"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                
                <button type="submit" class="btn btn-warning form-control col-md-6">Tallenna</button>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
