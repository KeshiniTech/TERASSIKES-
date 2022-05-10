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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="card-body p-0">
                <div class="d-md-flex">
                    <div class="p-1 flex-fill" style="overflow: hidden">
                        <!-- Map will be created here -->
                        <div id="world-map-markers" style="height: 325px; overflow: hidden">
                            <div class="map"></div>
                        </div>
                    </div>
                    <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                        <div class="description-block mb-4">
                            <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                            <h5 class="description-header">8390</h5>
                            <span class="description-text">Visits</span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description-block mb-4">
                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                            <h5 class="description-header">30%</h5>
                            <span class="description-text">Referrals</span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description-block">
                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                            <h5 class="description-header">70%</h5>
                            <span class="description-text">Organic</span>
                        </div>
                        <!-- /.description-block -->
                    </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRoJzH1o-m_8WHRUytZHGqc-DJ4INgvOc&callback=myMap">
    </script>
@endsection
