<!-- -------------------------------------------------------------- -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- -------------------------------------------------------------- -->
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header">
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
      </a>
      <!-- -------------------------------------------------------------- -->
      <!-- Logo -->
      <!-- -------------------------------------------------------------- -->
      <a class="navbar-brand" href="index.html">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="./views/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="./views/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          <!-- dark Logo text -->
          <img src="./views/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo text -->
          <img src="./views/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
        </span>
      </a>
      <!-- -------------------------------------------------------------- -->
      <!-- End Logo -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Toggle which is visible on mobile only -->
      <!-- -------------------------------------------------------------- -->
      <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="more-horizontal" class="feather-sm"></i></a>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Logo -->
    <!-- -------------------------------------------------------------- -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <!-- -------------------------------------------------------------- -->
      <!-- toggle and nav items -->
      <!-- -------------------------------------------------------------- -->
      <ul class="navbar-nav me-auto">
        <!-- This is  -->
        <li class="nav-item">
          <a class="
                    nav-link
                    sidebartoggler
                    d-none d-md-block
                    waves-effect waves-dark
                  " href="javascript:void(0)"><i data-feather="menu" class="feather-sm"></i></a>
        </li>
      </ul>
      <!-- -------------------------------------------------------------- -->
      <!-- Right side toggle and nav items -->
      <!-- -------------------------------------------------------------- -->
      <ul class="navbar-nav justify-content-end">
        <!-- -------------------------------------------------------------- -->
        <!-- Profile -->
        <!-- -------------------------------------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="./views/assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
          </a>
          <div class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  ">
            <div class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-primary
                      text-white
                      mb-2
                    ">
              <div class="">
                <img src="./views/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="60" />
              </div>
              <div class="ms-2">
                <h4 class="mb-0 text-white">Steave Jobs</h4>
                <p class="mb-0">varun@gmail.com</p>
              </div>
            </div>
            <a class="dropdown-item" href="#"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
              Salir</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- -------------------------------------------------------------- -->
<!-- End Topbar header -->
<!-- -------------------------------------------------------------- -->