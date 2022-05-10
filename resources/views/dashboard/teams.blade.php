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
                    <h4>Tiimit /osastot</h4>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-warning form-control">Lisää uusi tiimi <i
                            class="fa fa-plus"></i></button>
                </div>
            </div>
            <form>
                <table class="table text-left mt-4">
                    <thead>
                        <tr class="teams">
                            <th scope="col">Tiimi</th>
                            <th scope="col">Työntekijät</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-6">Keittiö</td>
                            <td class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning form-control">Lisää uusi tiimi <i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning form-control">Lisää uusi tiimi <i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td class="col-6">Sali</td>
                            <td class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning form-control">Lisää uusi tiimi <i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning form-control">Lisää uusi tiimi <i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
