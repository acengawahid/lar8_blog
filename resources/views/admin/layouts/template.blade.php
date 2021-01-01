<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Ceng Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/assets/backend/plugins/fontawesome-free/css/all.min.css')}}">
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('/assets/backend/dist/css/adminlte.min.css')}}">
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  {{-- Navbar --}}
  @include('admin.layouts.navbar')
  {{-- Sidebar --}}
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @yield('content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="http://acengawahid.my.id">Ceng Project</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<script src="{{ asset('/assets/backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('/assets/backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('/assets/backend/dist/js/demo.js')}}"></script>
</body>
</html>
