@extends('dashboard.master')
@section('page-title', '| Body')
@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <!-- <div class="row mb-2">
            <div class="col-sm-6">
               
            </div> /.col
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div> /.col
        </div>-->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- partial:index.partial.html -->
        <div class="drag-container"></div>
        <div class="row" style="width: 100%;">
            <div class="col-12">
                <h2 class="col-4 left_alignment">Työntekijät</h2>
                <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-plus"></i> Kutsu työntekijä</button>
                <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-download"></i> Lataa kuukausittainen raportti</button>
            </div>
            <div class="col-12 mt-4 mb-3">
                <span class="left_alignment mt-1">
                    <h4 class="text__color">Työntekijöitä yhteensä:</h4>
                </span>
                <span class="left_alignment row_button ml-3 primary-color primary-text-cl-w">15</span>
                <button class="bg-light download_button primary-color-w">Valitse kuukausi</button>

            </div>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Työtehtävä</th>
                    <th>Tuntimäärä tällä viikolla</th>
                    <th>Viimeksi paikalla</th>
                    <th class="none-attr"></th>
                    <th class="none-attr"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td>Tarjoilija</td>
                    <td>{item-total-price}</td>
                    <td>1.3.2022</td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td>Tarjoilija</td>

                    <td>(worker-week-hour}

                    </td>
                    <td>1.3.2022</td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td>Tarjoilija</td>
                    <td>(worker-week-hour}

                    </td>
                    <td>1.3.2022</td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td>Tarjoilija</td>
                    <td>(worker-week-hour}

                    </td>
                    <td>1.3.2022</td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td>Tarjoilija</td>
                    <td>(worker-week-hour}</td>
                    <td>1.3.2022</td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>
                <tr>
                    <td><span class="circle-logo"><img src="{{asset('img/Memoji Boys.png')}}" style="width: 80%; margin:10%;"></span>Justus Berner</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="left_alignment row_button">Muokkaa</span></td>
                    <td><span class="left_alignment row_button">Poista</span></td>
                </tr>

            </tbody>
            
        </table>
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer>
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('.none-attr').removeClass('sorting');
        });
    </script>
@endsection