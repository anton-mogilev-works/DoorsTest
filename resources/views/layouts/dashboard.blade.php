<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link href="/css/fontawesome.min.css" rel="stylesheet">
    <link href="/css/solid.css" rel="stylesheet">
    <link href="/css/brands.min.css" rel="stylesheet">
    <link href="/css/bootstrap5.min.css" rel="stylesheet">
    <link href="/css/master.css" rel="stylesheet">
    {{-- <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="/dashboard"><i class="fas fa-home"></i> Админка</a>
                </li>
                <li>
                    <a href="/dashboard/doors"><i class="fas fa-file-alt"></i> Двери</a>
                </li>
                <li>
                    <a href="/dashboard/dyeings"><i class="fas fa-file-alt"></i> Покраска</a>
                </li>
                <li>
                    <a href="/dashboard/skins"><i class="fas fa-table"></i> Плёнки</a>
                </li>
                <li>
                    <a href="/dashboard/knobs"><i class="fas fa-chart-bar"></i> Дверные ручки</a>
                </li>
                <li>
                    <a href="/dashboard/accessories"><i class="fas fa-icons"></i> Аксессуары</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                {{-- <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button> --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- 
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
--}}
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap5.bundle.min.js"></script>
    <script src="/js/Chart.min.js"></script>
    <script src="/js/dashboard-charts.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
