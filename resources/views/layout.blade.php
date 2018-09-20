<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HAJARI | Score Board</title>
  <link rel="icon" href="{{asset('icon.png')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" type="image/png" href="{{asset('fav.jpg')}}"/>
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/layout.css')}}">  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="{{route('dashboard')}}" title="Buy Sell Rent Everyting">
              <img class="logo-img" style="max-width:100px; margin-top: -7px;"
              src="{{asset('icon2.png')}}">&nbsp;&nbsp;<b>HAJARI</b> Score Board
            </a>
            <!-- <img class="logo-img" src="{{asset('icon2.png')}}" alt="Logo"> -->
            
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <!-- /.navbar-collapse -->
          <!-- Navbar Right Menu -->

          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->

    <div class="content-wrapper" style="min-height: 916px;">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <a href="https://facebook.com/foysalnibir"><i class="fa fa-facebook-square text-blue big-icon"></i></a>
          <a href="https://www.linkedin.com/in/foysalnibir"><i class="fa fa-linkedin-square text-blue big-icon"></i></a>
          <a href="#"><i class="fa fa-envelope-square text-blue big-icon" title="nibir2k12@live.com"></i></a>
          <a href="https://twitter.com/@foysal_nibir#"><i class="fa fa-twitter-square text-blue big-icon"></i></a>
        </div>
        <strong>Copyright © 2018-2019 <a href="https://www.linkedin.com/in/foysalnibir">foysal_nibir</a>.</strong> All rights
        reserved.
      </div>

      <!-- /.container -->
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  @yield('extrascript')
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
  <script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>