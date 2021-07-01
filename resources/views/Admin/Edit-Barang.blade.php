
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Data Barang</title>
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
            <h1 class="m-0 text-dark">Halaman Edit Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('barang')}}">Lihat Data</a></li>
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
            
        </div>
        
        <div class="card-body">
        <form action="{{route('update-barang', $dtBarang->id)}}" method="post">
        {{csrf_field()}}
              <div class="form-group">
                <label>Kode Barag</label>
                <input type="text" id="kodebarang" name="kodebarang" class="form-control" placeholder="Kode Barang" value="{{$dtBarang->kodebarang}}">
              </div>
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" id="namabarang" name="namabarang" class="form-control" placeholder="Nama Barang" value="{{$dtBarang->namabarang}}">
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="integer" id="stok" name="stok" class="form-control" placeholder="Stok" value="{{$dtBarang->stok}}">
              </div>
              <div class="form-group">
                <label>Kondisi</label>
                  <select class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi" value="{{$dtBarang->kondisi}}">
                    <option>Baik</option>
                    <option>Rusak</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="text" id="harga" name="harga" class="form-control" placeholder="ex : Rp. 20.000 " value="{{$dtBarang->harga}}">
              </div>
              <div class="form-group">
                <label>Spesifikasi</label>
                <textarea id="spesifikasi" name="spesifikasi" class="form-control">{{$dtBarang->spesifikasi}}</textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
              </div>
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
