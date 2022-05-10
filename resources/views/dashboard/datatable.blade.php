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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer>
    </script>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid col-md-10">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Tiger
                            Nixon</td>
                        <td>System Architect
                            <hr class="loader-bar" style="width:20%;">
                        </td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2011/04/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Garrett
                            Winters</td>
                        <td>Accountant</td>

                        <td>Tokyo
                            <hr class="loader-bar" style="width:30%;">
                        </td>
                        <td>63</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2011/07/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Garrett
                            Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo
                            <hr class="loader-bar" style="width:80%;">
                        </td>
                        <td>63</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2011/07/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Ashton
                            Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco
                            <hr class="loader-bar" style="width:10%;">
                        </td>
                        <td>66</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2009/01/12</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Cedric
                            Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh
                            <hr class="loader-bar" style="width:50%;">
                        </td>
                        <td>22</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2012/03/29</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Airi
                            Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo
                            <hr class="loader-bar" style="width:20%;">
                        </td>
                        <td>33</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2008/11/28</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Brielle
                            Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York
                            <hr class="loader-bar" style="width:60%;">
                        </td>
                        <td>61</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2012/12/02</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Herrod
                            Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco
                            <hr class="loader-bar" style="width:70%;">
                        </td>
                        <td>59</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2012/08/06</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Rhona
                            Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo
                            <hr class="loader-bar" style="width:40%;">
                        </td>
                        <td>55</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2010/10/14</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Colleen
                            Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco
                            <hr class="loader-bar" style="width:30%;">
                        </td>
                        <td>39</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2009/09/15</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Sonya
                            Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh
                            <hr class="loader-bar" style="width:80%;">
                        </td>
                        <td>23</td>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                alt="message user image">2008/12/13</td>

                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                    </tr>
                </tfoot>
            </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
