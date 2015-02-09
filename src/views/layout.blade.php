<html>
  <head>
    <meta charset="UTF-8">
    <title>Lockdown | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.1 loaded from CDN. You can add you own bootstrap copy -->
    <!-- AdminLTE won't work without loading Bootstrap first -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- ADMINLTE MAIN CSS FILE -->
    {!! HTML::style('adminlte/dist/css/AdminLTE.min.css') !!}
    {!! HTML::style('adminlte/dist/css/skins/skin-blue.min.css') !!}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- header logo: style can be found in header.less -->
      <header class="main-header">
        <a href="/lockdown" class="logo">
          <!-- LOGO -->
          Lockdown
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <div class="user-panel">
                <div class="pull-left image">
                    {!! gravatar_img(Auth::user()->email, 100, 'png', ['class' => 'img-circle', 'style' => '']) !!}
                </div>
                <div class="pull-left info">
                    <p>{!! Auth::user()->display_name !!}</p>
                    <small class="text text-info">{!! Auth::user()->email !!}</small>
                </div>
            </div>
            <li class="header">Navigation</li>
            <li class="treeview-menu">
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-group"></i> <span>Role Management</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  {!! HTML::clever_resource('lockdown.roles', 'View All Roles') !!}
                  {!! HTML::clever_resource('lockdown.roles.create', 'Create a New Role') !!}
                </ul>
              </li>
            </li>
            <li class="treeview-menu">
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-lock"></i> <span>Permission Management</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  {!! HTML::clever_resource('lockdown.home', 'View All Permissions') !!}
                  {!! HTML::clever_resource('lockdown.home', 'Create a New Permission') !!}
                </ul>
              </li>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Right side column. Contains the content of the page -->
      <div class="content-wrapper">
        <section class="content-header">
            <!-- Page title and breadcrumbs go here -->
            @yield('subtitle')
        </section><!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            @yield('notifications')
            @yield('content')
        </section><!-- /.content -->
      </div><!-- /.right-side -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright © 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.1: both Bootstrap and AdminLTE dependent on jQuery -->
    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js') !!}
    <!-- AdminLTE App. Required in all pages -->
    {!! HTML::script('adminlte/dist/js/app.min.js') !!}
  </body>
</html>