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
                    <h1>Muokkaa kategorioita</h1>
                    <form>
                        <table class="table mt-4 pt-4">
                            <thead>
                                <tr>
                                    <th scope="col">Kategoria</th>
                                    <th scope="col">Julkaistuja tuotteita</th>
                                    <th scope="col">Tuotteita yhteensä</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Bites Burgers</th>
                                    <td>12</td>
                                    <td>12</td>
                                    <td> <button class="btn btn-black btn-sm rounded-0 mr-2" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></button><button
                                            class="btn btn-white btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bites Burgers</th>
                                    <td>12</td>
                                    <td>12</td>
                                    <td> <button class="btn btn-black btn-sm rounded-0 mr-2" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></button><button
                                            class="btn btn-white btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bites Burgers</th>
                                    <td>12</td>
                                    <td>12</td>
                                    <td> <button class="btn btn-black btn-sm rounded-0 mr-2" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></button><button
                                            class="btn btn-white btn-sm rounded-0" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-4">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-black">Lisää uusi kategoria</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- partial -->



        </div><!-- /.container-fluid -->
    </section>



@endsection
