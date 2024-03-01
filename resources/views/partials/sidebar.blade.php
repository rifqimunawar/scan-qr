
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">


          <li class="nav-item">
              <a class="nav-link" href="{{ route('dataAdmin') }}">
                  <i class="fas fa-user"></i>
                  <span>Data Admin</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('scan.qr') }}">
                  <i class="fas fa-user"></i>
                  <span>Scan QR</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('tiketcreate') }}">
                  <i class="fas fa-user"></i>
                  <span>Daftar</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('event.index') }}">
                  <i class="fas fa-user"></i>
                  <span>Event</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->