
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
              <li class="breadcrumb-item"><a href="{{route('transaksipinjam')}}">Lihat Data</a></li>
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
            <form action="{{route('update-transaksi', $dtTransaksi->id)}}" method="post">
            {{csrf_field()}}
              <div class="form-group">
                <label>Waktu Kembali</label>
                <input type="datetime-local" id="waktukembali" name="waktukembali" class="form-control" value="{{$dtTransaksi->waktukembali}}">
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                  <select class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="{{$dtTransaksi->keterangan}}">
                    <option>Diterima</option>
                    <option>Ditolak</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Status Pengembalian</label>
                  <select class="form-control" id="statuspengembalian" name="statuspengembalian" placeholder="Status Pengembalian" value="{{$dtTransaksi->statuspengembalian}}">
                    <option>Sudah Kembali</option>
                    <option>Belum Kembali</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Nama Petugas</label>
                <input type="text" id="petugas" name="petugas" class="form-control" placeholder="Petugas Penerima" value="{{$dtTransaksi->petugas}}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Validasi</button>
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
