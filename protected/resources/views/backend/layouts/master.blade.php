<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - {!! isset($title) ? $title : 'Rao vặt' !!}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/dist/css/AdminLTE.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/dist/css/skins/_all-skins.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/iCheck/flat/blue.css') }}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/morris/morris.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/datepicker/datepicker3.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/daterangepicker/daterangepicker-bs3.css') }}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ URL::asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery 2.1.4 -->
        <script src="{{ URL::asset('public/backend/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ URL::asset('public/backend/bootstrap/js/bootstrap.min.js') }}"></script>
        
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ URL::asset('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

        <script src="{{  URL::asset('public/backend/plugins/iCheck/icheck.min.js') }}"></script>
        <script src="{{  URL::asset('public/backend/js/common.js') }}"></script>
    </head>
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
        <div class="wrapper">
            @include('backend.elements.header')

            <!-- Left side column. contains the logo and sidebar -->
            @include('backend.elements.sidebar')

            <div class="content-wrapper">
                @yield('content')
                <div class="control-sidebar-bg"></div>
            </div>

            @include('backend.elements.footer')
            @include('backend.elements.controlsidebar')
        </div>
        <!-- AdminLTE App -->
        <script src="{{  URL::asset('public/backend/dist/js/app.js') }}"></script>
        <!-- AdminLTE for demo purposes -->

    </body>
</html>