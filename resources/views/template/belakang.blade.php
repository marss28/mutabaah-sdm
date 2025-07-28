<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('template-admin/sneat-1.0.0') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="dashboard.blade.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Mutaba'ah SDM" width="80" height="80" style="margin-top: -20px; margin-right: -20px; margin-left: -20px">
                
                  </svg>
              </span>

              <span class="app-brand-text demo menu-text fw-bolder ms-2">mutaba'ah</span>

            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard Admin</div>
              </a>
            </li>

            <li class="menu-item active">
              <a href="{{ route('dashboarduser') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard User</div>
              </a>
            </li>

            <!-- Layouts -->
           
          <li class="menu-header small text-uppercase">
  <span class="menu-header-text">Pages</span>
</li>

<!-- Tugas Harian -->
<li class="menu-item">
  <a href="{{ route('datatugasharian') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-calendar-check"></i>
    <div data-i18n="Daily Tasks">Nama Tugas Harian</div>
  </a>
</li>


<!--  Data Tugas Mingguan -->
<li class="menu-item">
  <a href="{{ route('datatugasmingguan')}}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-calendar-week"></i>
    <div data-i18n="Weekly Tasks">Nama Tugas Mingguan</div>
  </a>
</li>





<!-- Tugas Bulanan -->
<li class="menu-item">
  <a href="{{ route('tugasbulanan') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-calendar-event"></i>
    <div data-i18n="Monthly Tasks">Tugas Bulanan</div>
  </a>
</li>



<!-- Banner Info -->
<li class="menu-item">
  <a href="{{ route('bannerinfo') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-info-circle"></i>
    <div data-i18n="Banner Info">Banner Info</div>
  </a>
</li>


          
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
             <div class="navbar-nav align-items-center">
              <form action="{{ route('tugas.search') }}" method="GET" class="d-flex align-items-center">
               <i class="bx bx-search fs-4 lh-0 me-2"></i>
                 <input
                   type="text"
                   name="keyword"
                   class="form-control border-0 shadow-none"
                   placeholder="Search..."
                   aria-label="Search"
                   />
              </form>
            </div>


              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('template-admin/sneat-1.0.0') }}/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('template-admin/sneat-1.0.0') }}/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                   <li>
               <div class="dropdown-divider"></div>

 <form method="POST" action="{{ route('logout') }}">
  @csrf
  <button type="submit" class="dropdown-item preview-item">
    <i class="bx bx-power-off me-2"></i>
    <span class="align-middle">Log Out</span>
  </button>
</form>

    </li>

                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
            @yield('konten')
            </div>
          </div>
            </div>


            

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: '<h1 style="color:black; font-weight:bold;">Sukses!</h1>',
                html: '<p style="color:black;">{{ session('success') }}</p>',
                icon: 'success',
                confirmButtonText: 'Oke'
            })
        </script>
    @endif


    @if (session('sukses'))
        <script>
            Swal.fire({
                title: "Do you want to save the changes?",
                html: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "Data Berhasil Disimpan", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "Data Gagal Disimpan", "info");
                }
            });
        </script>
    @endif


  </body>
</html>
