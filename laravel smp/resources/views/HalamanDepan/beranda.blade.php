<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Mata Pelajaran</h5>

                <p class="card-text">
                  Data Mata Pelajaran SMPN 2 Banyuwangi
                </p>

                <a href="{{route('tampilan')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="m-0">Kelas 7</h5>
              </div>
              <div class="card-body">
                <h5 class="card-title">Kelas 7</h5>

                <p class="card-text">
                  Data Kelas 7 SMPN 2 Banyuwangi
                </p>
                <a href="{{route('data-mahasiswa')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Kelas 8</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kelas 8</h6>

                <p class="card-text">Data Kelas 8 SMPN 2 Banyuwangi</p>
                <a href="{{route('data-mahasiswa')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Kelas 9</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kelas 9</h6>

                <p class="card-text">Data Kelas 9 SMPN 2 Banyuwangi</p>
                <a href="{{route('data-mahasiswa')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
