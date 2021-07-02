
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Informasi Barang</title>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Informasi Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Informasi Barang</li>
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
            <a href="{{route('create-barang')}}" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
            </div>
        </div>
        
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Kode Barang</center></th>
                    <th><center>Nama Barang</center></th>
                    <th><center>Stok</center></th>
                    <th><center>Kondisi</center></th>
                    <th><center>Harga</center></th>
                    <th><center>Spesifikasi</center></th>
                    <th><center>Aksi</center></th>
                </tr>
                @foreach ($dtBarang as $item)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> kodebarang}}</td>
                    <td>{{$item -> namabarang}}</td>
                    <td>{{$item -> stok}}</td>
                    <td>{{$item -> kondisi}}</td>
                    <td>{{$item -> harga}}</td>
                    <td>{{$item -> spesifikasi}}</td>
                    <td>
                        <a href="{{route ('edit-barang', $item->id)}}">Edit</a>
                        |
                        <a href="{{route ('delete-barang', $item->id)}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>

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
