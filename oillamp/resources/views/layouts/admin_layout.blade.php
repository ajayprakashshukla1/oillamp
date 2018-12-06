<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>shale.ai | User Dashboard</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style(url('/public/assets/vendor/bootstrap/css/bootstrap.min.css')) !!}
    <!-- MetisMenu CSS -->
    {!! Html::style(url('/public/assets/vendor/metisMenu/metisMenu.min.css')) !!}
    <!-- Custom CSS -->
    {!! Html::style(url('/public/assets/dist/css/sb-admin-2.css')) !!}
    <!-- Morris Charts CSS -->
    {!! Html::style(url('/public/assets/vendor/morrisjs/morris.css')) !!}
    <!-- Custom Fonts -->
    {!! Html::style(url('/public/assets/vendor/font-awesome/css/font-awesome.min.css')) !!}

    {!! Html::style(url('/public/css/jquery.datetimepicker.css')) !!}
    <style type="text/css">
       #page-wrapper{
           margin: 0 0 0 1px !important;
       }
       .form-subtitle{
          display: none;
       }
  
        #page-wrapper {
            padding: 0 70px;
        }

        .form-group {
            margin-bottom: 25px;
        }
        .loader {
            margin: auto;
            text-align: center;
            z-index: 9999999999;
            position: fixed;
            background-color: rgba(66, 74, 93, 0.44);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
        }
        .loader img {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;padding: 0 55px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="#">
                  <img src="{{ url('/public/img/logo.png')}}" />
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-left">
              <li><a href="{{url('dashboard')}}">Organizations</a></li>
              <li><a href="{{url('users_list')}}">Users</a></li>
              <li><a href="{{url('license_list')}}">Licenses</a></li>
              <li><a href="{{url('settings')}}">Settings</a></li>  
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <ul class="nav navbar-top-links navbar-right">
               <li style="margin-top: 10px;"><button class="btn btn-default" onclick="getout()"><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>  
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           @yield('content')
        </div>
        <!-- /#page-wrapper -->
        <div class="loader">
            <img src="{{ url('/public/loader.gif') }}">
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!! HTML::script(url('/public/assets/vendor/jquery/jquery.min.js')); !!}
    <!-- Bootstrap Core JavaScript -->
    {!! HTML::script(url('/public/assets/vendor/bootstrap/js/bootstrap.min.js')); !!}
    <!-- Metis Menu Plugin JavaScript -->
    {!! HTML::script(url('/public/assets/vendor/metisMenu/metisMenu.min.js')); !!}
    <!-- Custom Theme JavaScript -->
    {!! HTML::script(url('/public/assets/dist/js/sb-admin-2.js')); !!}

    {!! HTML::script(url('/public/js/jquery.datetimepicker.js')); !!}


<script type="text/javascript">
function getout(){
    window.location.href="{{url('logout')}}";
}    
</script>

</body>

</html>
