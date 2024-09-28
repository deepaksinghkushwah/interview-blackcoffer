<?php include('./config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>

  <!-- Meta -->
  <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
  <meta name="author" content="Bootstrap Gallery" />
  <link rel="canonical" href="https://www.bootstrap.gallery/">
  <meta property="og:url" content="https://www.bootstrap.gallery">
  <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
  <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
  <meta property="og:type" content="Website">
  <meta property="og:site_name" content="Bootstrap Gallery">
  <link rel="shortcut icon" href="assets/images/favicon.svg" />

  <!-- *************
			************ CSS Files *************
		************* -->
  <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/main.min.css" />

  <!-- *************
			************ Vendor Css Files *************
		************ -->

  <!-- Scrollbar CSS -->
  <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />

  <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.1.7/b-3.1.2/b-html5-3.1.2/b-print-3.1.2/datatables.min.css" rel="stylesheet">

  

</head>

<body>
  <div class="page-wrapper">

    <!-- Main container start -->
    <div class="main-container">

      <!-- Sidebar wrapper start -->
      <nav id="sidebar" class="sidebar-wrapper">

        <!-- App brand starts -->
        <div class="app-brand px-3 py-3 d-flex align-items-center">
          <a href="index.html">
            <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
          </a>
        </div>
        <!-- App brand ends -->

        <!-- Sidebar profile starts -->
        <div class="sidebar-user-profile">
          <img src="assets/images/user11.jpg" class="profile-thumb rounded-2 p-2 d-lg-flex d-none"
            alt="Bootstrap Gallery" />
          <h5 class="profile-name lh-lg mt-2 text-truncate">Deepak Singh Kushwah</h5>
          <ul class="profile-actions d-flex m-0 p-0">
            <li>
              <a href="javascript:void(0)">
                <i class="bi bi-skype fs-4"></i>
                <span class="count-label"></span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="bi bi-dribbble fs-4"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="bi bi-twitter fs-4"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- Sidebar profile ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
          <ul class="sidebar-menu">
            <li class="active current-page">
              <a href="<?= SITE_URL . '/index.php' ?>">
                <i class="bi bi-bar-chart-line"></i>
                <span class="menu-text">Analytics</span>
              </a>
            </li>
            <li class="active current-page">
              <a href="<?= SITE_URL . '/records.php' ?>">
                <i class="bi bi-database-fill-gear"></i>
                <span class="menu-text">Records</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- Sidebar menu ends -->

      </nav>
      <!-- Sidebar wrapper end -->

      <!-- App container starts -->
      <div class="app-container">
        <!-- App header starts -->
        <div class="app-header d-flex align-items-center">

          <!-- Toggle buttons start -->
          <div class="d-flex">
            <button class="btn btn-primary me-2 toggle-sidebar" id="toggle-sidebar">
              <i class="bi bi-chevron-left fs-5"></i>
            </button>
            <button class="btn btn-primary me-2 pin-sidebar" id="pin-sidebar">
              <i class="bi bi-chevron-left fs-5"></i>
            </button>
          </div>
          <!-- Toggle buttons end -->

          <!-- App brand sm start -->
          <div class="app-brand-sm d-md-none d-sm-block">
            <a href="index.html">
              <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
            </a>
          </div>
          <!-- App brand sm end -->

          <!-- App header actions start -->
          <div class="header-actions">
            <div class="d-lg-block d-none me-2">

              <!-- Search container start -->
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" />
                <button class="btn btn-outline-primary" type="button">
                  <i class="bi bi-search fs-5"></i>
                </button>
              </div>
              <!-- Search container end -->

            </div>
            <div class="dropdown ms-3">
              <a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-grid fs-2 lh-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow">
                <!-- Row start -->
                <div class="d-flex gap-2 m-2">
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="assets/images/brand-behance.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="assets/images/brand-gatsby.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="assets/images/brand-google.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="assets/images/brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="assets/images/brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                </div>
                <!-- Row end -->
              </div>
            </div>
            <div class="dropdown ms-3">
              <a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-bell fs-2 lh-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow">
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <img src="assets/images/user.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                    <div class="m-0">
                      <h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
                      <p class="mb-1">Membership has been ended.</p>
                      <p class="small m-0 text-primary">Today, 07:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <img src="assets/images/user11.jpg" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                    <div class="m-0">
                      <h5 class="mb-1 fw-semibold">Deepak Singh Kushwah</h5>
                      <p class="mb-1">Congratulate, James for new job.</p>
                      <p class="small m-0 text-primary">Today, 08:00pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2">
                    <img src="assets/images/user1.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                    <div class="m-0">
                      <h5 class="mb-1 fw-semibold">Sandra Stone</h5>
                      <p class="mb-2">Lewis added new schedule release.</p>
                      <p class="small m-0 text-primary">Today, 09:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="border-top py-2 px-3 text-end">
                  <a href="javascript:void(0)">View all</a>
                </div>
              </div>
            </div>
            <div class="dropdown ms-3">
              <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
                href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-md-block me-2">Deepak Singh Kushwah</span>
                <img src="assets/images/user11.jpg" class="rounded-circle img-3x" alt="Bootstrap Gallery" />
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow">
                <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                    class="bi bi-person fs-4 me-2"></i>Profile</a>
                <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                    class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                <a class="dropdown-item d-flex align-items-center" href="login.html"><i
                    class="bi bi-escape fs-4 me-2"></i>Logout</a>
              </div>
            </div>
          </div>
          <!-- App header actions end -->

        </div>
        <!-- App header ends -->

        <!-- App hero header starts -->
        <div class="app-hero-header">
          <h5 class="fw-light">Welcome Deepak,</h5>
          <h3 class="fw-light mb-5">
            <span><?php echo $heroTitle ?? 'Home / Analytics'?></span>
          </h3>
        </div>
        <!-- App Hero header ends -->
        <div class="app-body">