<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminMS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin/about" class="nav-link {{ Request::is('admin/about*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  About
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin/visi" class="nav-link {{ Request::is('admin/visi*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                  Visi Misi
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin/service" class="nav-link {{ Request::is('admin/service*') ? 'active' : '' }} ">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Services
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin/banner" class="nav-link {{ Request::is('admin/banner*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Banner
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin/saran" class="nav-link {{ Request::is('admin/saran*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Saran
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Admin
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>