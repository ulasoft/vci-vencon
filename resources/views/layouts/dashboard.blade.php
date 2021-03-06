<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/vendor/admin/plugins/images/favicon.png">
    <title>@yield('title_head')@lang('admin.title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="/vendor/admin/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/vendor/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="/vendor/admin/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/vendor/admin/html/css/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from /vendor/admin/html/css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="/vendor/admin/html/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond./vendor/admin/html/js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
            <div class="top-left-part"><a class="logo" href="/dashboard"><b><img src="/vendor/admin/plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="/vendor/admin/plugins/images/pixeladmin-text.png" alt="home" /></span></a></div>
            <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <a class="profile-pic" href="#"> <img src="/vendor/admin/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b> </a>
                </li>

                <li>
                    <a class="profile-pic" href="/ru/logout">
                        <i class="fa fa-sign-out"></i> @lang('admin.logout')
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">

            <ul class="nav" id="side-menu">
                <li style="padding: 10px 0 0;">
                    <a href="{{Route('dashboard',['ru'])}}" class="waves-effect @if (is_active('*/dashboard')) active @endif"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">@lang('admin.home')</span></a>
                </li>
                <li>
                    <a href="{{Route('regions_d',['ru'])}}" class="waves-effect @if (is_active(['*/dashboard/regions','*/dashboard/regions/*'])) active @endif"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">@lang('admin.regions')</span></a>
                </li>
                <li>
                    <a href="{{Route('hotels_d',['ru'])}}" class="waves-effect @if (is_active(['*/dashboard/hotels','*/dashboard/hotels/*'])) active @endif"><i class="fa fa-bed fa-fw" aria-hidden="true"></i><span class="hide-menu">@lang('admin.hotels')</span></a>
                </li>
                <li>
                    <a href="{{Route('res_d',['ru'])}}" class="waves-effect  @if (is_active(['*/dashboard/restaurants','*/dashboard/restaurants/*'])) active @endif"><i class="fa fa-cutlery fa-fw" aria-hidden="true"></i><span class="hide-menu">@lang('admin.restarans')</span></a>
                </li>
                <li>
                    <a href="{{Route('dis_d',['ru'])}}" class="waves-effect  @if (is_active(['*/dashboard/distinctions','*/dashboard/distinctions/*'])) active @endif"><i class="fa fa-camera-retro fa-fw" aria-hidden="true"></i><span class="hide-menu">@lang('admin.dist')</span></a>
                </li>


                <li class="">
                    <a href="/settings" class="waves-effect">
                        <i data-icon="7" class="fa fa-cogs fa-fw"></i> <span class="hide-menu">@lang('admin.settings')<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                        <li> <a href="{{Route('settings',['ru'])}}"><i class="fa fa-cog fa-fw"></i>  @lang('admin.settings')</a> </li>
                        <li> <a href="themifyicon.html"><i class="fa fa-facebook-official fa-fw"></i> @lang('admin.fb')</a> </li>
                        <li> <a href="simple-line.html"><i class="fa fa-instagram fa-fw"></i>  @lang('admin.instagram')</a> </li>
                        <li><a href="linea-icon.html"><i class="fa fa-youtube-square fa-fw"></i> @lang('admin.youtube')</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('title')
            <div class="row">
                @yield('content')
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="/vendor/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/vendor/admin/html/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/vendor/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/vendor/admin/html/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/vendor/admin/html/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/vendor/admin/html/js/custom.min.js"></script>

@stack('js')
</body>

</html>
