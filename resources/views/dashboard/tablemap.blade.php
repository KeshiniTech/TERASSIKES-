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
                <h2 class="col-4 left_alignment">Salikartta</h2>
                <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-download"></i> Lataa pohjapiirustus</button>
                <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-download"></i> Tulosta QR-koodi tarrat</button>
                <button class="bg-light download_button primary-color-w"><i class="fa-solid fa-plus"></i> Lisää uusi tila</button>
            </div>
            <div class="col-12 mt-4 mb-3">
                <span class="left_alignment mt-1">
                    <h4 class="text__color">Pöytiä yhteensä:</h4>
                </span>
                <span class="left_alignment row_button ml-3 primary-color primary-text-cl-w">20</span>
                <span class="left_alignment row_button primary-color-b primary-text-cl">Etuterassi</span>
                <span class="left_alignment row_button primary-color-b primary-text-cl">Takaterassi</span>
                <span class="left_alignment row_button primary-color-b primary-text-cl">Sali</span>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card primary-color-g">
                            <div class="card-header">
                                <h3 class="card-title primary-text-cl" style="font-size: 1.75rem;">Etuterassi</h3>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#1</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#2</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#3</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#4</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#5</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#6</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#7</h1>
                                                </div>
                                                <div class="_border left_site">
                                                    <div></div>
                                                    <div></div>
                                                </div>

                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#8</h1>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#9</h1>
                                                </div>
                                                <div class="_border right_site">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#10</h1>
                                                </div>
                                                <div class="_border left_site">
                                                    <div></div>
                                                    <div></div>
                                                </div>

                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#11</h1>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#12</h1>
                                                </div>
                                                <div class="_border right_site">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#13</h1>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#14</h1>
                                                </div>
                                            </div>
                                            <div class="col-4 p-4 pt-5">
                                                <img style="width: 100%;" src="{{asset('img/rectangle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1 class="rectangle">#15</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-6 pt-5 pr-4 pl-4">
                                                <img style="width: 100%;" src="{{asset('img/circle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#16</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-5 pr-4 pl-4 mt-155">
                                                <img style="width: 100%;" src="{{asset('img/circle.png') }}" alt="">
                                                <div class="diamond">
                                                    <h1>#17</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-2 pr-4 pl-4">
                                                <img style="width: 100%;" src="{{asset('img/circle.png') }}" alt="">
                                                <div class="diamond" style="padding-top: 30%;">
                                                    <h1>#18</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-2 pr-4 pl-4 mt-155">
                                                <img style="width: 100%;" src="{{asset('img/circle.png') }}" alt="">
                                                <div class="diamond" style="padding-top: 30%;">
                                                    <h1>#19</h1>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-2 pr-4 pl-4">
                                                <img style="width: 100%;" src="{{asset('img/circle.png') }}" alt="">
                                                <div class="diamond" style="padding-top: 30%;">
                                                    <h1>#20</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card offset-2 col-5 primary-color-b p-2 border-radius_6 mt-3">
                                        <h3 class="primary-text-cl textCenter-alignment pb-2">Vedä tästä haluamasi pöytä kartalle</h3>
                                        <div class="row">
                                            <div class="col-3"><img style="width: 100%;" src="{{asset('img/circle2.png') }}" alt=""></div>
                                            <div class="col-3"><img style="width: 100%;" src="{{asset('img/diamond.png') }}" alt=""></div>
                                            <div class="col-3 pb-4 pr-4 pl-4"><img style="width: 100%; padding-left: 8px;" src="{{asset('img/rectangle.png') }}" alt=""></div>
                                            <div class="col-3"><img style="width: 100%;" src="{{asset('img/circle.png') }}" alt=""></div>
                                        </div>
                                    </div>

                                    <div class="card col-3 primary-color-b p-2 border-radius_6 ml-2 mt-3">
                                        <h3 class="primary-text-cl textCenter-alignment pb-2">Muut elementit</h3>
                                        <div class="row">
                                            <div class="col-12" style="padding: 0px 0px 0px 75px;">
                                                <div style="margin-top: 10px; position: absolute; display: block; background-color: #fff; min-height: 10px; width: 100px;"></div>
                                            </div>
                                            <div class="col-2" style="padding-left: 35px;">
                                                <div style="position: absolute; display: block; background-color: #fff; min-height: 100px; width: 10px;"></div>
                                            </div>
                                            <h2 class="col-12 textCenter-alignment primary-text-cl-w" style="margin-top: 40px;">Seinä</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
            </div>




</section>

@endsection