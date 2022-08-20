<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-decoration-none ">
      <img src={{ url('images/Kominfo.png') }} class="img-fluid rounded mx-auto" alt="Responsive image" style="max-width: 50px; height: auto">
      <span class="brand-text font-weight-light" style="color:#0100CC ">Balmon II Mataram &nbsp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('createTmisr') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tidak Memiliki Izin Stasiun Radio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('createTms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tidak Memiliki Sertifikat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('createTspt') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tidak Sesuai Parameter Teknis</p>
                </a>
              </li>
            </ul>
          </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>