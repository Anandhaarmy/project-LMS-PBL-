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
            <h1 class="m-0">Upload File</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Upload File</li>
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
            <div class="card-tools">
                <a href="{{route('create-file')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
                @php $no=1; @endphp
                @foreach ($datafile as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> file }}</td>
                    <td>
                        <a href="{{url('edit-file', $item->id)}}"><i class="fas fa-edit"></i> 
                                                        | 
                        </a><a href="{{url('delete-file', $item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach

            </table>
            <div class="card-footer">
               
            </div>
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

@include('sweetalert::alert')
</body>
</html>
