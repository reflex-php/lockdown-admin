<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lockdown | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Theme style -->
        {!! HTML::style('adminlte/dist/css/AdminLTE.min.css') !!}
        {!! HTML::style('adminlte/dist/css/skins/skin-blue.min.css') !!}
        <!-- iCheck -->
        {!! HTML::style('adminlte/plugins/iCheck/square/blue.css') !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/lockdown">Lockdown</a>
            </div><!-- /.login-logo -->
            <form action="../../index2.html" method="post">
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">    
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>                        
                            </div>
                        </div>                        
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </form>
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.1: both Bootstrap and AdminLTE dependent on jQuery -->
        {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') !!}
        <!-- Bootstrap 3.3.2 JS -->
        {!! HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js') !!}
        <!-- AdminLTE App. Required in all pages -->
        {!! HTML::script('adminlte/dist/js/app.min.js') !!}
        {!! HTML::script('adminlte/plugins/iCheck/icheck.min.js') !!}
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>
      
        </body>
</html>