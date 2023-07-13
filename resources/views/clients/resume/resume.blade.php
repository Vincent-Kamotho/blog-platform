<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>Skills</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <div id = "layout-wrapper">

            @include('clients.layouts.header');

            @include('clients.layouts.sidebar');

            <div class="main-content">

                <div class="page-content">

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-10">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">My Resume</h4>
                                </div>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="col-2">
                                <a href="{{route('create_resume')}}" class="btn btn-success">Add on Resume</a> 
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Work Experience</h4>   
                                        <div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead>
                                                    <tr>
                                                        <th>Company Name</th>
                                                        <th>Role</th>
                                                        <th>Employment Type</th>
                                                        <th>Location</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($works as $work)
                                                        <tr>
                                                            <td>{{$work->company_name}}</td>
                                                            <td>{{$work->role}}</td>
                                                            <td>{{$work->employment_type}}</td>
                                                            <td>{{$work->location}}</td>
                                                            <td>{{$work->start_date}}</td>
                                                            <td>{{$work->end_date}}</td>
                                                            <td>
                                                                <a href="{{url('resume/experience/edit/'. $work->id)}}" class="btn btn-success">Edit</a>
                                                                <a href="{{url('resume/experience/delete/'. $work->id )}}" class="btn btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Education</h4>   
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Education Level</th>
                                                        <th>Institution Name</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($educations as $education)
                                                        <tr>
                                                            <td>{{$education->education_level}}</td>
                                                            <td>{{$education->institution_name}}</td>
                                                            <td>{{$education->start_date}}</td>
                                                            <td>{{$education->end_date}}</td>
                                                            <td>
                                                                <a href="{{url('resume/education/edit/'. $education->id)}}" class="btn btn-success">Edit</a>
                                                                <a href="{{url('resume/education/delete/'. $education->id)}}" class="btn btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>