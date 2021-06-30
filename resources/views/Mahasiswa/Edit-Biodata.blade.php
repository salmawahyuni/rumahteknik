
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
            <h1 class="m-0 text-dark">Edit Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
            <form action="{{route('update-biodata', $dtMahasiswa->id)}}" method="post">
            {{csrf_field()}}
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" id="namamhs" name="namamhs" class="form-control" placeholder="Nama Mahasiwa" value="{{$dtMahasiswa->namamhs}}">
              </div>
              <div class="form-group">
                <label>NPM</label>
                <input type="text" id="npm" name="npm" class="form-control" placeholder="NPM" value="{{$dtMahasiswa->npm}}">
              </div>
              <div class="form-group">
                <label>Program Studi</label>
                  <select class="form-control" id="prodi" name="prodi" placeholder="Program Studi" value="{{$dtMahasiswa->prodi}}">
                    <option>S1 Informatika</option>
                    <option>S1 Arsitek</option>
                    <option>S1 Teknik Sipil</option>
                    <option>S1 Perencanaan Wilayah dan Kota</option>
                  </select>
              </div>
              <div class="form-group">
                <label>No. HP</label>
                <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No. HP" value="{{$dtMahasiswa->nohp}}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$dtMahasiswa->email}}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
