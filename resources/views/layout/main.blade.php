<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>AICS RECORDING MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
    @include('layout.sidebar')
    @include('layout.header')

        @yield('content')
        @include('sweetalert::alert')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>">
        @yield('scripts')
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.pie.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"></script>
    <!-- End custom js for this page -->
  </body>
</html>
