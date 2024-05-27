<!DOCTYPE html>
<html lang="en">

@include('admin/layout/header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Left Sidebar Start ========== -->
    

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <a href="index.html" class="d-block mb-5">
                                                    <img src="assets/images/logo-dark.png" alt="app-logo" height="18" />
                                                </a>
                                            </div>
                                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                            <h1 class="h5 mb-1">Welcome Back!</h1>
                                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                            <form class="user" action="{{Route('admin.login_post')}}" method="post">
                                            @csrf

                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user" id="email" name = "email" placeholder="Xin vui lòng nhập email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" id="password" name ="password" placeholder="Xin vui lòng nhập mật khẩu">
                                                </div>
                                                <input type="submit"class="btn btn-success btn-block" value="đăng nhập">
                                                <!-- <a href="" class="btn btn-success btn-block"> Đăng Nhập </a> -->
                                                </form>

                                                <div class="text-center mt-4">
                                                    <h5 class="text-muted font-size-16">Sign in using</h5>
                                                
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                

                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-2"><a href="auth-recoverpw.html" class="text-muted font-weight-medium ml-1">Forgot your password?</a></p>
                                                    <p class="text-muted mb-0">Don't have an account? <a href="auth-register.html" class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->





       
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


@include('admin/layout/js')

</body>

</html>