<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <base href="{{ asset('') }}">
        @yield('css')
        <!-- Bootstrap core CSS-->
        {!! Html::style('admin_asset/vendor/bootstrap/css/bootstrap.min.css') !!}
        <!-- Custom fonts for this template-->
        {!! Html::style('admin_asset/vendor/font-awesome/css/font-awesome.min.css') !!}
        <!-- Page level plugin CSS-->
        {!! Html::style('admin_asset/vendor/datatables/dataTables.bootstrap4.css') !!}
        <!-- Custom styles for this template-->
        {!! Html::style('admin_asset/css/sb-admin.css') !!}
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        @include('admin.layout.header')
        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->
        @include('admin.layout.footer')
        <!-- Bootstrap core JavaScript-->
        {!! Html::script('admin_asset/vendor/jquery/jquery.min.js') !!}
        {!! Html::script('admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
        <!-- Core plugin JavaScript-->
        {!! Html::script('admin_asset/vendor/jquery-easing/jquery.easing.min.js') !!}
        <!-- Page level plugin JavaScript-->
        {!! Html::script('admin_asset/vendor/datatables/jquery.dataTables.js') !!}
        {!! Html::script('admin_asset/vendor/datatables/dataTables.bootstrap4.js') !!}
        <!-- Custom scripts for all pages-->
        {!! Html::script('admin_asset/js/sb-admin.min.js') !!}
        <!-- Custom scripts for this page-->
        {!! Html::script('admin_asset/js/sb-admin-datatables.min.js') !!}
        @yield('script')
    </body>
</html>
