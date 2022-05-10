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
            <!-- partial:index.partial.html -->
            <div class="drag-container"></div>
            <div class="board">
                <div class="board-column todo">
                    <div class="board-column-container">
                        <div class="board-column-header">Todo</div>
                        <div class="board-column-content-wrapper">
                            <div class="board-column-content">
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="board-column working">
                    <div class="board-column-container">
                        <div class="board-column-header">Working</div>
                        <div class="board-column-content-wrapper">
                            <div class="board-column-content">
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="board-column done">
                    <div class="board-column-container">
                        <div class="board-column-header">Done</div>
                        <div class="board-column-content-wrapper">
                            <div class="board-column-content">
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="board-item">
                                    <div class="card bg-white p-3 mb-4 shadow">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="user-info">
                                                <div class="user-info__img">
                                                    <img src="{{ asset('img/user1.jpg') }}" alt="User Img">
                                                </div>
                                                <div class="user-info__basic">
                                                    <h5 class="mb-0">Kiran Acharya</h5>
                                                    <p class="text-muted mb-0">28 yrs, Male</p>
                                                </div>
                                            </div>
                                            <div class="dropdown open">
                                                <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="triggerId1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fa fa-trash mr-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">+91 9876543215</h6>
                                        <a href="#!"><small>Contact</small></a>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div>
                                                <h5 class="mb-0">06:00 PM
                                                    <small class="ml-1">2 Feb 2021</small>
                                                </h5>
                                            </div>
                                            <span class="text-success font-weight-bold">Consult</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial -->



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/haltu/muuri@0.9.3/dist/muuri.min.js'></script>


    <script>
        var dragContainer = document.querySelector('.drag-container');
        var itemContainers = [].slice.call(document.querySelectorAll('.board-column-content'));
        var columnGrids = [];
        var boardGrid;

        // Init the column grids so we can drag those items around.
        itemContainers.forEach(function(container) {
            var grid = new Muuri(container, {
                    items: '.board-item',
                    dragEnabled: true,


                    dragSort: function() {
                        return columnGrids;
                    },


                    dragContainer: dragContainer,
                    dragAutoScroll: {
                        targets: (item) => {
                            return [{
                                    element: window,
                                    priority: 0
                                },
                                {
                                    element: item.getGrid().getElement().parentNode,
                                    priority: 1
                                },
                            ];
                        }
                    },
                })
                .on('dragInit', function(item) {
                    item.getElement().style.width = item.getWidth() + 'px';
                    item.getElement().style.height = item.getHeight() + 'px';
                })
                .on('dragReleaseEnd', function(item) {
                    item.getElement().style.width = '';
                    item.getElement().style.height = '';
                    item.getGrid().refreshItems([item]);
                })
                .on('layoutStart', function() {
                    boardGrid.refreshItems().layout();
                });

            columnGrids.push(grid);
        });

        // Init board grid so we can drag those columns around.
        boardGrid = new Muuri('.board', {
            dragEnabled: true,
            dragHandle: '.board-column-header'
        });
    </script>


@endsection
