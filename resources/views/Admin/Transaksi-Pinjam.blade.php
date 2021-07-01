
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
            <h1 class="m-0 text-dark">Peminjaman Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Email Mahasiswa</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Waktu Pinjam</th>
                    <th>Keterangan</th>
                    <th>Status Pengembalian</th>
                    <th>Petugas</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtTransaksi as $item)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> namabarang}}</td>
                    <td>{{$item -> jumlah}}</td>
                    <td>{{$item -> waktupinjam}}</td>
                    <td>{{$item -> keterangan}}</td>
                    <td>{{$item -> statuspengembalian}}</td>
                    <td>{{$item -> petugas}}</td>
                    <td>
                        <a href="{{route ('detailtransaksi', $item->id)}}">Detail</a>
                        |
                        <a href="{{route ('edit-transaksi', $item->id)}}">Validasi</a>
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
