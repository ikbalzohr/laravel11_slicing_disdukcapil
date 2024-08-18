<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
  data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>DISDUKCAPIL</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('sneat')}}/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/css/rtl/theme-semi-dark.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="{{asset('sneat')}}/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{asset('sneat')}}/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  {{-- <script src="{{asset('sneat')}}/assets/vendor/js/template-customizer.js"></script> --}}
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('sneat')}}/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

        <!-- logo and title-->

        <x-app-brand />

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <x-menu-item href="/" class="menu-item active open" icon="bx bx-home">Dashboard</x-menu-item>
          <li class=" menu-header small text-uppercase">
            <span class="menu-header-text">OLAH USER</span>
          </li>
          <x-menu-item href="/" class="menu-item" icon="bx bx-user">Pengguna</x-menu-item>
          <li class=" menu-header small text-uppercase">
            <span class="menu-header-text">DATA INFORMASI</span>
          </li>
          <x-menu-item href="/" class="menu-item" icon="bx bx-send">Pengajuan</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-book-content">Pelayanan Pengajuan</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-male-female">Update Penduduk</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-chart">Rekapitulasi</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-dock-right">Input Kuesioner</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-file">Data Kuesioner</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bxs-megaphone">Pengaduan</x-menu-item>


          <!-- Layouts -->



          <!-- Apps & Pages -->
          <li class=" menu-header small text-uppercase">
            <span class="menu-header-text">DATA WEBSITE</span>
          </li>
          <x-menu-item href="/berita" class="menu-item" icon="bx bx-news">Berita</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-book">Dasar Hukum</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-info-circle">Tentang Kami</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-sitemap">Struktur Organisasi</x-menu-item>
          <x-menu-item href="/" class="menu-item" icon="bx bx-user-pin">Pejabat</x-menu-item>

          <!-- e-commerce-app menu end -->
          <!-- Academy menu start -->
          <li class="menu-item">
            <a href="/" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layer"></i>
              <div class="text-truncate">Bidang</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-academy-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course.html" class="menu-link">
                  <div class="text-truncate" data-i18n="My Course">My Course</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course-details.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Course Details">Course Details</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Academy menu end -->
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <x-navbar />
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Content -->
            {{ $slot }}
            <!-- / Content -->
          </div>

          <!-- Footer -->
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{asset('sneat')}}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{asset('sneat')}}/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{asset('sneat')}}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="{{asset('sneat')}}/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="{{asset('sneat')}}/assets/js/dashboards-crm.js"></script>
</body>

</html>