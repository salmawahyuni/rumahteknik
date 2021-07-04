<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- SEARCH FORM -->
  <div class="form-inline ml-3">
  <form action="{{ route('caribarang')}}" method="GET">
  {{ @csrf_field() }}
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
      </form>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>