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
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('data-mahasiswa')}}">Data Siswa</a></li>
              <li class="breadcrumb-item active">Edit Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h3>Form Edit Data Siswa</h3>
        </div>          

        <div class="card-body">
            
            <form action="{{ url('update-mahasiswa', $mhs->id) }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS" value="{{ $mhs->nis }}">
              </div>
              <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $mhs->nama }}">
              </div>
              <div class="form-group">
                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="{{ $mhs->kelas }}">
              </div>
              <div class="form-group">
                <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Telepon" value="{{ $mhs->telepon }}">
              </div>
              <div class="form-group">
              <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="{{ $mhs->alamat }}"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </div>
            </form>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
    <!-- <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- @include('Template.footer') -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
