<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route ('dashboard')}}" class="brand-link">
      <img src="{{asset('image/logo-umbjm.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RT FT UMBJM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-ellipsis-h nav-icon"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{route('barang')}}" class="nav-link">
                <i class="fas fa-boxes nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{route ('transaksipinjam')}}" class="nav-link">
                <i class="fas fa-list-ol nav-icon"></i>
                  <p>Daftar Peminjaman</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{route ('biodatamhs')}}" class="nav-link">
                <i class="fas fa-user-graduate nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level == "mahasiswa")
              <li class="nav-item">
                <a href="{{route ('infobarang')}}" class="nav-link">
                <i class="fas fa-boxes nav-icon"></i>
                  <p>Informasi Barang</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level == "mahasiswa")
              <li class="nav-item">
                <a href="{{route ('transaksi')}}" class="nav-link">
                <i class="fas fa-list-ol nav-icon"></i>
                  <p>Formulir Peminjaman</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level == "mahasiswa")
              <li class="nav-item">
                <a href="{{route('biodata')}}" class="nav-link">
                <i class="fas fa-user-graduate nav-icon"></i>
                  <p>Biodata Mahasiswa</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>