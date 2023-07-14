<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>My services</title>
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

            <!-- ========== Left Sidebar Start ========== -->

            @include('clients.layouts.sidebar');

            <body data-sidebar="dark">

                <div id="layout-wrapper">
            
                    <div class="main-content">
            
                        <div class="page-content">
            
                            <div class="container-fluid">
            
                                <div class="row">
                                    <div class="col-10">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">MY TESTIMONIALS</h4>
                                        </div>
                                    </div>
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    <div class="col-2">
                                        <a href="{{route('create_testimonials')}}" class="btn btn-success">Add Testimonial</a> 
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"></h4>   
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                
                                                        <thead>
                                                            <tr>
                                                                <th>Client Name</th>
                                                                <th>Message</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($testimonials as $testimonial)
                                                            <tr>
                                                                <td>{{$testimonial->client_name}}</td>
                                                                <td>
                                                                    <textarea>{{ $testimonial->message }}</textarea>
                                                                </td>
                                                                <td>
                                                                    <a href="{{url('/testimonials/edit_testimonial/' . $testimonial->id)}}" class="btn btn-success">Edit</a>
                                                                    <a href="{{url('/testimonials/delete_testimonial/' . $testimonial->id)}}" class="btn btn-danger">Delete</a>
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
            </body>

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



