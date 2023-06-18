
<body data-sidebar="dark">

    <div id="layout-wrapper">
        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Heading Post</h4>
                                    <form action="{{route('store_blog_introduction')}}" method="POST" class="outer-repeater" enctype="multipart/form-data">
                                        @csrf
                                        <div data-repeater-list="outer-group" class="outer">
                                            <div data-repeater-item class="outer">
                                                <div class="mb-3">
                                                    <label for="formname">Introduction :</label>
                                                    <input type="text" class="form-control" id="formname" name="blog_introduction" value={{$intro->introduction}}>
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="formemail">Your Image :</label>
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
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            
            
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- form repeater js -->
    <script src="{{asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/form-repeater.int.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

<!-- Mirrored from themesbrand.com/skote-mvc/layouts/form-repeater.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 18:30:46 GMT -->
</html>
