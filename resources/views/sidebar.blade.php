{{-- <body class="hold-transition sidebar-mini layout-fixed"> --}}
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FVIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          {{-- <a href="#" class="d-block">{{Str::ucfirst(Session::get('user')['name'])}}</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/user_dashboard" class="nav-link">
              <i class="nav-icon fas fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/personal_form" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Personal Information
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/company_form" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Company Information
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                CIS Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                QF Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                ILRF Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/premiun_retainer" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Premiun Retainer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/inspection" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Inspection
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/spv" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                SPV
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/closing" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Closing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/collateral" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Collateral
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/bank_details" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Bank Details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/plan_upgarde" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Upgrade Plan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/change_password" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/logout" class="nav-link">
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


