<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/images/favicon.png" >
        <!--Page title-->
        <title>Multi-Auth</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/css/bootstrap.min.css">
        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/css/all.min.css">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css">
        <link rel="stylesheet" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ asset('assets/back-end/multi-user/') }}/panel/assets/css/style.css">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/images/preloader.gif" alt="">
        </div>
        
        <!-- wrapper -->
        <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="login_page center_container">
                    <div class="center_content">
                        <!-- Validation Errors -->
                        @if($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        <span class="text-danger">{{ $error }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        

                        <form action="{{ route('login') }}" class="d-block" method="post">
                            @csrf
                            <div class="form-group icon_parent">
                                <label for="password">Email</label>
                                <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus placeholder="Email Address">
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
        
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control"   name="password" required
                                    autocomplete="current-password" placeholder="Password">
        
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group">
                                <label class="chech_container">Remember me
                                    <input type="checkbox" name="remember" id="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <a class="registration" href="{{ route('register') }}">Create new account</a><br>
                                <a href="{{ route('password.request') }}" class="text-white">I forgot my password</a>
                                <button type="submit" class="btn btn-blue">Login</button>
                            </div>
                        </form>
                        <div class="footer">
                            <p>Copyright &copy; 2021 <a href="#">multi-auth</a>. All rights reserved.
                            </p>
                        </div>
        
                    </div>
                </div>
            </div>
           <!--/ content wrapper -->
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/js/jquery.min.js"></script>
        <!-- popper Min Js -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/js/popper.min.js"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/js/bootstrap.min.js"></script>
        <!-- Fontawesome-->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/js/all.min.js"></script>
        <!-- metis menu -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js"></script>
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js"></script>
        <!-- nice scroll bar -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js"></script>
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/scrollbar/scroll.active.js"></script>
        <!-- counter -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/counter/js/counter.js"></script>
        <!-- chart -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/chartjs-bar-chart/Chart.min.js"></script>
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/chartjs-bar-chart/chart.js"></script>
        <!-- pie chart -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/pie_chart/chart.loader.js"></script>
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/plugins/pie_chart/pie.active.js"></script>
 
 
        <!-- Main js -->
        <script src="{{ asset('assets/back-end/multi-user/') }}/panel/assets/js/main.js"></script>

    
     


    </body>
</html>
