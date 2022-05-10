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
                        <td><i class="fa fa-star on mr-2"></i>4.9

                        </td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Garrett
                            Winters</td>
                        <td><i class="fa fa-star off mr-2"></i>5.9</td>

                        <td>Tokyo

                        </td>
                        <td>63</td>
                        <td>2011/07/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Garrett
                            Winters</td>
                        <td><i class="fa fa-star off mr-2"></i>3.9</td>
                        <td>Tokyo

                        </td>
                        <td>63</td>
                        <td>2011/07/25</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Ashton
                            Cox</td>
                        <td><i class="fa fa-star on mr-2"></i>4.9</td>
                        <td>San Francisco

                        </td>
                        <td>66</td>
                        <td>2009/01/12</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Cedric
                            Kelly</td>
                        <td><i class="fa fa-star on  mr-2"></i>3.9</td>
                        <td>Edinburgh

                        </td>
                        <td>22</td>
                        <td>2012/03/29</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Airi
                            Satou</td>
                        <td><i class="fa fa-star on mr-2"></i>1.9</td>
                        <td>Tokyo

                        </td>
                        <td>33</td>
                        <td>2008/11/28</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Brielle
                            Williamson</td>
                        <td><i class="fa fa-star on mr-2"></i>8.9</td>
                        <td>New York

                        </td>
                        <td>61</td>
                        <td>2012/12/02</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Herrod
                            Chandler</td>
                        <td><i class="fa fa-star off mr-2"></i>1.9</td>
                        <td>San Francisco

                        </td>
                        <td>59</td>
                        <td>2012/08/06</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Rhona
                            Davidson</td>
                        <td><i class="fa fa-star on mr-2"></i>2.9</td>
                        <td>Tokyo

                        </td>
                        <td>55</td>
                        <td>2010/10/14</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Colleen
                            Hurst</td>
                        <td><i class="fa fa-star on mr-2"></i>6.9</td>
                        <td>San Francisco

                        </td>
                        <td>39</td>
                        <td>2009/09/15</td>

                    </tr>
                    <tr>
                        <td><img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">Sonya
                            Frost</td>
                        <td><i class="fa fa-star on mr-2"></i>4.9</td>
                        <td>Edinburgh

                        </td>
                        <td>23</td>
                        <td>2008/12/13</td>

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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer>
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
