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
        
                                                <form>
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="companyname-input" class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" required="required"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="role-input" class="form-label">Role</label>
                                                                <input type="text" class="form-control" name="role" placeholder="Role Served" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="employmenttype" class="form-label">Employment Type</label>
                                                                <select name="employment_type" class="form-select">
                                                                    <option selected>Select Employment Type</option>
                                                                    <option value="full_time">Full Time</option>
                                                                    <option value="contract">Contract</option>
                                                                    <option value="part_time">Part Time</option>
                                                                    <option value="internship">Internship</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="formrow-location-input" class="form-label">Location</label>
                                                                <input type="text" class="form-control" name="location" placeholder="Enter Your Password" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label>Start Date</label>
                                                                <div class="position-relative" id="datepicker4">
                                                                    <input type="date" class="form-control" name="start_date" id="monthYearInput" required="required"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label>End Date</label>
                                                                <div class="position-relative" id="datepicker4">
                                                                    <input type="date" class="form-control" name="start_date" id="monthYearInput" required="required"/>
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
        
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Education</h4>
        
                                                <form>
                                                    <div class="row mb-4">
                                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Education Level</label>                                                        <div class="col-sm-9">
                                                            <select name="education level" class="form-select">
                                                                <option selected>Select Education Level</option>
                                                                <option value="high_school">High School Degree</option>
                                                                <option value="associate">Associate's Degree</option>
                                                                <option value="bachelor">Bachelor's Degree</option>
                                                                <option value="masters">Master's Degree</option>
                                                                <option value="doctoral">Doctoral Degree</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="horizontal-institution-input" class="col-sm-3 col-form-label">Institution</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="institution" placeholder="Institution Name">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Start Date</label>
                                                        <div class="col-sm-9" id="datepicker4">
                                                            <input type="date" class="form-control" name="start_date" id="monthYearInput" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">End Date</label>
                                                        <div class="col-sm-9" id="datepicker4">
                                                            <input type="date" class="form-control" name="start_date" id="monthYearInput" required="required"/>
                                                        </div>
                                                    </div>
        
                                                    <div class="row justify-content-end"> 
                                                        <div>
                                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                        </div>
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