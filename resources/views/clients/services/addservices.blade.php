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
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">MY SERVICES</h4>
                                        </div>
                                    </div>
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Add Services</h4>
                                                <form action={{route('add_service')}} class="outer-repeater" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div data-repeater-list="outer-group" class="outer">
                                                        <div data-repeater-item class="outer">
                                                            <div class="mb-3">
                                                                <label for="servicename">Service Name :</label>
                                                                <input type="text" class="form-control" name="service" placeholder="Enter the Service" required="required">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="formdescription">Description :</label>
                                                                <textarea id="formmessage" class="form-control" rows="4" name="description" placeholder="Enter Your Message" required="required"></textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="serviceicon">Service Icon :</label>
                                                                <input type="file" class="form-control" name="image">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
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



