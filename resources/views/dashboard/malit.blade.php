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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer>
    </script>
    <section class="content col-md-12">
        <div class="container-fluid setting-yellow text-center">
            <div class="row mb-2">
                <div class="col text-left">
                    <h4>Mallit</h4>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-white form-control">Luo uusi mallista <i
                            class="fa fa-plus"></i></button>
                </div>
            </div>
            <form>
                <table id="example" class="malit-datatable" style="width:100%;background:white !important;color:black;">
                    <thead class="mb-2">
                        <tr>
                            <th>Malli</th>
                            <th>Sesonki</th>
                            <th>Viimeinen muokkaus</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="mt-2">
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>
                        <tr>
                            <td>{design-name}</td>
                            <td>{seson-name}</td>
                            <td>{latest-edit-design}</td>
                            <td>Luo pdf</td>
                            <td>Muokkaa</td>
                            <td>Poista</td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- /.content -->
@endsection
