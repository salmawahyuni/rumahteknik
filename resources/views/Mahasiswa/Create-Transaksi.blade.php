
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Daftar Peminjaman</title>
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
            <h1 class="m-0 text-dark">Buat Peminjaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('transaksi')}}">Lihat Data</a></li>
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
        
        
        <div class="card-body">
            <form action="{{route('simpan-transaksi')}}" method="post">
            {{csrf_field()}}
              <div class="form-group">
                <label>Email Mahasiswa</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email Mahasiswa">
              </div>
              <div class="form-group">
                <label>Nama Barang</label>
                  <select class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang">
                    <option>LCD Epson</option>
                    <option>Terminal</option>
                    <option>Sambungan HDMI</option>
                    <option>Speaker</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="integer" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah">
              </div>
              <div class="form-group">
                <label>Nama Dosen Pengajar</label>
                <input type="text" id="namadosen" name="namadosen" class="form-control" placeholder="Nama Dosen">
              </div>
              <div class="form-group">
                <label>Ruang Kuliah</label>
                  <select class="form-control" id="ruangkuliah" name="ruangkuliah" placeholder="Ruang Kuliah">
                    <option>RK 1.06</option>
                    <option>Studio PWK</option>
                    <option>Studio Informatika</option>
                    <option>Studio Desain</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Mata Kuliah</label>
                <input type="text" id="matakuliah" name="matakuliah" class="form-control" placeholder="Matakuliah">
              </div>
              <div class="form-group">
                <label>Waktu Pinjam</label>
                <input type="datetime-local" id="waktupinjam" name="waktupinjam" class="form-control">
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Data</button>
              </div>
            </form>
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
