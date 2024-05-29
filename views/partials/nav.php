<body>

    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="container-scroller">
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/">BUDGET
                    <!-- <img src="assets/images/logo1.svg" alt="logo" /> -->
                    <span class="font-12 d-block font-weight-light">TAYTAY PALAWAN</span>
                </a>
                <a class="navbar-brand brand-logo-mini" href="/"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        </div>
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                    </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                        <img src="/assets/images/faces/face1.jpg" alt="image" />
                        </div>
                        <div class="nav-profile-text">
                        <p class="text-black font-weight-semibold m-0"> Unknown Hacker </p>
                        <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
                </div>
            </div>
            </nav>
            <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="mdi mdi-account-outline menu-icon"></i>
                    <span class="menu-title">User Settings</span>
                    <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item">
                                <a class="nav-link" href="/user">User Config</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                        <span class="menu-title">Account Settings</span>
                    <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item">
                                <a class="nav-link" href="/book">Book of Accounts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account">Account Classification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/config">Configuration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fund">Fund Type</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/payee">Payee</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                        <span class="menu-title">Others</span>
                    <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item">
                                <a class="nav-link" href="/appro">Appropriations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/supplemental">Supplemental</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/adjustment">Adjustments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/releases">Releases</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/obligation">Obligation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pr">Purchased Request</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                    <i class="mdi mdi-clipboard-text menu-icon"></i>
                    <span class="menu-title">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link d-flex">
                    <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                    <div class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-bs-toggle="dropdown"> English </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-bl me-3"></i> French </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-cn me-3"></i> Chinese </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-de me-3"></i> German </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-ru me-3"></i>Russian </a>
                        </div>
                    </div>
                    <a class="text-white" href="/"><i class="mdi mdi-home-circle"></i></a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
        </div>