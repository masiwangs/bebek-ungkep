
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Area' }} - Admin Bebek Ungkep Yuk Sri</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <style>
        html, body {
            font-family: 'Zen Kaku Gothic Antique', sans-serif;
            font-size: .9rem!important
        }
    </style>
    @notifyCss
    @livewireStyles
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top bg-dark">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html" class="fw-bold text-light">ADMIN AREA</a>
                        </div>
                        <div class="header-top-right">
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar bg-warning">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="{{ route('admin.index') }}" class='menu-link text-dark'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item has-sub">
                                <a href="#" class='menu-link text-dark'>
                                    <i class="bi bi-cart4"></i>
                                    <span>Pesanan</span>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.index') }}" class='submenu-link text-dark'>Overview</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.list') }}" class='submenu-link text-dark'>Daftar Pesanan</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.create') }}" class='submenu-link text-dark'>Pesanan Baru</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item has-sub">
                                <a href="#" class='menu-link text-dark'>
                                    <i class="bi bi-box-seam"></i>
                                    <span>Produk</span>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.index') }}" class='submenu-link text-dark'>Overview</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.list') }}" class='submenu-link text-dark'>Daftar Produk</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.create') }}" class='submenu-link text-dark'>Upload Produk Baru</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link text-dark'>
                                    <i class="bi bi-people-fill"></i>
                                    <span>Pelanggan</span>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.user.index') }}" class='submenu-link'>Overview</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.user.list') }}" class='submenu-link'>Daftar Pelanggan</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.user.new') }}" class='submenu-link'>Agen/Reseller Baru</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link text-dark'>
                                    <i class="bi bi-cash-coin"></i>
                                    <span>Transaksi/keuangan</span>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="{{ route('admin.transaction.index') }}" class='submenu-link'>Overview</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('admin.transaction.list') }}" class='submenu-link'>Daftar Transaksi</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('admin.transaction.new') }}" class='submenu-link'>Transaksi Baru</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item ms-auto has-sub">
                                <a href="#" class='menu-link text-dark'>
                                    <i class="bi bi-person-fill"></i>
                                    <span>Admin</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Akun Anda</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

            </header>

            {{ $slot }}

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @livewireScripts
    <x:notify-messages />
    @notifyJs
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="/assets/js/pages/horizontal-layout.js"></script>
    {{ $script ?? null }}
</body>

</html>