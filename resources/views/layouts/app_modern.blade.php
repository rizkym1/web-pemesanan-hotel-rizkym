<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="shortcut icon" type="image/png" href="/modern/src/assets/images/logos/favicon.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <h3 class="mt-3">HotelKu</h3>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Admin</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.resepsionis.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Resepsionis</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.kamar.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Tipe Kamar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.fasilitas-umum.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Fasilitas Umum</span>
              </a>
            </li>
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.kamar.create') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Tambah Kamar</span>
              </a>
            </li> --}}
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="/modern/src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <div class="container-fluid">
        <div class="row">
          <!-- Info Box 1 -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box d-flex align-items-center">
              <!-- Icon -->
              <span class="info-box-icon bg-info elevation-1 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                <i class="fa-solid fa-users fa-2x"></i>
              </span>
              <!-- Content -->
              <div class="info-box-content ms-3">
                <span class="info-box-text" style="font-size: 16px;">Total Tamu</span><!-- Adding margin-top to give space between the text and number -->
                <span class="info-box-number" style="font-size: 20px; font-weight: bold; display: block; margin-top: 10px;">150</span>
              </div>
            </div>
          </div>
          <!-- Info Box 2 -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box d-flex align-items-center">
              <!-- Icon -->
              <span class="info-box-icon bg-danger elevation-1 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                <i class="fa-solid fa-bed fa-2x"></i>
              </span>
              <!-- Content -->
              <div class="info-box-content ms-3">
                <span class="info-box-text" style="font-size: 16px;">Total Tipe Kamar</span><!-- Adding margin-top to give space between the text and number -->
                <span class="info-box-number" style="font-size: 20px; font-weight: bold; display: block; margin-top: 10px;">150</span>
              </div>
            </div>
          </div>
         

          <!-- Info Box 3 -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box d-flex align-items-center">
              <!-- Icon -->
              <span class="info-box-icon bg-success elevation-1 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                <i class="fas fa-users fa-2x"></i>
              </span>
              <!-- Content -->
              <div class="info-box-content ms-3">
                <span class="info-box-text" style="font-size: 16px;">Total Admin</span><!-- Adding margin-top to give space between the text and number -->
                <span class="info-box-number" style="font-size: 20px; font-weight: bold; display: block; margin-top: 10px;">150</span>
              </div>
            </div>
          </div>

          <!-- Info Box 4 -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box d-flex align-items-center">
              <!-- Icon -->
              <span class="info-box-icon bg-warning elevation-1 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                <i class="fas fa-users fa-2x"></i>
              </span>
              <!-- Content -->
              <div class="info-box-content ms-3">
                <span class="info-box-text" style="font-size: 16px;">Total Resepsionis</span><!-- Adding margin-top to give space between the text and number -->
                <span class="info-box-number" style="font-size: 20px; font-weight: bold; display: block; margin-top: 10px;">150</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('flash::message')
      @yield('content')
    </div>
  </div>

  <script src="/modern/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/modern/src/assets/js/sidebarmenu.js"></script>
  <script src="/modern/src/assets/js/app.min.js"></script>
  <script src="/modern/src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
