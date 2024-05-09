<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('header')

  <!-- Favicons -->
  <link href="{{ asset('adminAssets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('adminAssets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('adminAssets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('adminAssets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.layout.header')

  <!-- ======= Sidebar ======= -->
  @include('admin.layout.sidebar')

  <main id="main" class="main">

    @yield('contents')

  </main>


  <!-- Vendor JS Files -->
  <script src="{{ asset('adminAssets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/chart.js') }}/chart.umd.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('adminAssets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('adminAssets/js/main.js') }}"></script>

  @yield('script')

</body>

</html>