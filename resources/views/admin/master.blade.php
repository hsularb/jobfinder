<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Hunting | Dashboard</title>
    <link rel="apple-touch-icon" sizes="57x57" href="upload/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="upload/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="upload/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="upload/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="upload/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="upload/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="upload/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="upload/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="upload/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="upload/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="upload/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="upload/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="upload/favicon/favicon-16x16.png">
    <link rel="manifest" href="upload/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="upload/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include ('admin.css')

    @yield ('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        @include ('admin.main_header')

        @include ('admin.aside')

        

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="display-3">
                    @yield ('header')
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

                    @yield ('breadcrumb-li')

                </ol>
            </section>

            <br>
            <br>

            <!-- Main content -->
            <section class="content fluid-container">

                @yield ('content')


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include ('admin.footer')

        {{-- @include ('admin.control_sidebar') --}}

    </div>
    <!-- ./wrapper -->

    @include ('admin.script')
    @stack ('script')
</body>

</html>
