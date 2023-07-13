<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>Create Resume</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/libs/%40chenfengyuan/datepicker/datepicker.min.css')}}">

    </head>

    <body data-sidebar="dark">

        <div id = "layout-wrapper">

            @include('clients.layouts.header');

            @include('clients.layouts.sidebar');

            <body data-sidebar="dark">

                <div id="layout-wrapper">
            
                    <div class="main-content">
                        
                        <div class="page-content">

                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Work Experience</h4>
        
                                                <form action="{{url('resume/experience/update/'.$works->id)}}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="companyname-input" class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" name="company_name" value={{$works->company_name}} required="required"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="role-input" class="form-label">Role</label>
                                                                <input type="text" class="form-control" name="role" value={{$works->role}} required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="employmenttype" class="form-label">Employment Type</label>
                                                                <select name="employment_type" class="form-select">
                                                                    <option selected>{{$works->employment_type}}</option>
                                                                    <option value="Full Time">Full Time</option>
                                                                    <option value="Contract">Contract</option>
                                                                    <option value="Part Time">Part Time</option>
                                                                    <option value="Internship">Internship</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="formrow-location-input" class="form-label">Location</label>
                                                                <input type="text" class="form-control" name="location" value={{$works->location}} required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label>Start Date</label>
                                                                <div class="position-relative" id="datepicker4">
                                                                    <input type="date" class="form-control" name="start_date" value={{$works->start_date}} id="monthYearInput" required="required"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label>End Date</label>
                                                                <div class="position-relative" id="datepicker4">
                                                                    <input type="date" class="form-control" name="end_date" value={{$works->end_date}} id="monthYearInput" required="required"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
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
        <script src="{{asset('assets/libs/%40chenfengyuan/datepicker/datepicker.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>