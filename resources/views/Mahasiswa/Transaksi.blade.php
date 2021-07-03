
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Peminjaman Barang</title>
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
            <h1 class="m-0 text-dark">Data Peminjaman Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
            <a href="{{route('create-transaksi')}}" class="btn btn-success">Buat Peminjaman<i class="fas"></i></a>
            </div>
        </div>
        
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Email Mahasiswa</center></th>
                    <th><center>Nama Barang</center></th>
                    <th><center>Jumlah</center></th>
                    <th><center>Nama Dosen</center></th>
                    <th><center>Ruang Kuliah</center></th>
                    <th><center>Mata Kuliah</center></th>
                    <th><center>Waktu Pinjam</center></th>
                    <th><center>Keterangan</center></th>
                    <th><center>Status Pengembalian</center></th>
                    <th><center>Petugas</center></th>
                </tr>
                @foreach ($dtTransaksi as $item)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> barang->namabarang}}</td>
                    <td>{{$item -> jumlah}}</td>
                    <td>{{$item -> namadosen}}</td>
                    <td>{{$item -> ruangkuliah}}</td>
                    <td>{{$item -> matakuliah}}</td>
                    <td>{{$item -> waktupinjam}}</td>
                    <td>{{$item -> keterangan}}</td>
                    <td>{{$item -> statuspengembalian}}</td>
                    <td>{{$item -> petugas}}</td>
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
