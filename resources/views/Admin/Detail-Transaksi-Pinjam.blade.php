
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
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
            <h1 class="m-0 text-dark">Peminjaman Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('transaksipinjam')}}">Lihat Daftar</a></li>
              <li class="breadcrumb-item active">Daftar Peminjaman</li>
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
            
        </div>
        
        <div class="card-body">
<pre>
  Email Mahasiswa       : {{$dtTransaksi -> email}}</th>
  Nama Barang           : {{$dtTransaksi -> namabarang}}</th>
  Jumlah                : {{$dtTransaksi -> jumlah}}</th>
  Nama Dosen            : {{$dtTransaksi -> namadosen}}</th>
  Ruang Kuliah          : {{$dtTransaksi -> ruangkuliah}}</th>
  Mata Kuliah           : {{$dtTransaksi -> matakuliah}}</th>
  Waktu Pinjam          : {{$dtTransaksi -> waktupinjam}}</th>
  Waktu Kembali         : {{$dtTransaksi -> waktukembali}}</th>
  Keterangan            : {{$dtTransaksi -> keterangan}}</th>
  Status Pengembalian   : {{$dtTransaksi -> statuspengembalian}}</th>
  Petugas               : {{$dtTransaksi -> petugas}}</th>
</pre>
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
