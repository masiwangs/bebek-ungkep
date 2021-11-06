
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

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
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html">Bebek Ungkep</a>
                        </div>
                        <div class="header-top-right">
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="{{ route('admin.index') }}" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-box-seam"></i>
                                    <span>Produk</span>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.index') }}" class='submenu-link'>Overview</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('admin.product.create') }}" class='submenu-link'>Upload Baru</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  ">
                                <a href="{{ route('admin.user.index') }}" class='menu-link'>
                                    <i class="bi bi-people-fill"></i>
                                    <span>Pelanggan</span>
                                </a>
                            </li>
                            <li class="menu-item  ">
                                <a href="{{ route('admin.transaction.index') }}" class='menu-link'>
                                    <i class="bi bi-cash-coin"></i>
                                    <span>Transaksi/keuangan</span>
                                </a>
                            </li>
                            {{-- <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Produk</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="component-alert.html" class='submenu-link'>Overview</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="component-badge.html" class='submenu-link'>Badge</a>
                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-breadcrumb.html" class='submenu-link'>Breadcrumb</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-button.html" class='submenu-link'>Button</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-card.html" class='submenu-link'>Card</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-carousel.html" class='submenu-link'>Carousel</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-dropdown.html" class='submenu-link'>Dropdown</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-list-group.html" class='submenu-link'>List Group</a>


                                            </li>

                                        </ul>



                                        <ul class="submenu-group">

                                            <li class="submenu-item  ">
                                                <a href="component-modal.html" class='submenu-link'>Modal</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-navs.html" class='submenu-link'>Navs</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-pagination.html" class='submenu-link'>Pagination</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-progress.html" class='submenu-link'>Progress</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-spinner.html" class='submenu-link'>Spinner</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="component-tooltip.html" class='submenu-link'>Tooltip</a>


                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Extra Components</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="extra-component-avatar.html"
                                                            class="subsubmenu-link">Avatar</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="extra-component-sweetalert.html"
                                                            class="subsubmenu-link">Sweet Alert</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="extra-component-toastify.html"
                                                            class="subsubmenu-link">Toastify</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="extra-component-rating.html"
                                                            class="subsubmenu-link">Rating</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="extra-component-divider.html"
                                                            class="subsubmenu-link">Divider</a>
                                                    </li>

                                                </ul>

                                            </li>


                                    </div>
                                </div>
                            </li>
                            <li class="menu-item active has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Layouts</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  ">
                                                <a href="layout-default.html" class='submenu-link'>Default Layout</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="layout-vertical-1-column.html" class='submenu-link'>1
                                                    Column</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="layout-vertical-navbar.html" class='submenu-link'>Vertical
                                                    Navbar</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="layout-rtl.html" class='submenu-link'>RTL Layout</a>


                                            </li>



                                            <li class="submenu-item active ">
                                                <a href="layout-horizontal.html" class='submenu-link'>Horizontal
                                                    Menu</a>


                                            </li>


                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Forms</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Form Elements</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-input.html"
                                                            class="subsubmenu-link">Input</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-input-group.html"
                                                            class="subsubmenu-link">Input Group</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-select.html"
                                                            class="subsubmenu-link">Select</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-radio.html"
                                                            class="subsubmenu-link">Radio</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-checkbox.html"
                                                            class="subsubmenu-link">Checkbox</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-element-textarea.html"
                                                            class="subsubmenu-link">Textarea</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="form-layout.html" class='submenu-link'>Form Layout</a>


                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Form Editor</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-editor-quill.html"
                                                            class="subsubmenu-link">Quill</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-editor-ckeditor.html"
                                                            class="subsubmenu-link">CKEditor</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-editor-summernote.html"
                                                            class="subsubmenu-link">Summernote</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="form-editor-tinymce.html"
                                                            class="subsubmenu-link">TinyMCE</a>
                                                    </li>

                                                </ul>

                                            </li>


                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-table"></i>
                                    <span>Table</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  ">
                                                <a href="table.html" class='submenu-link'>Table</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="table-datatable.html" class='submenu-link'>Datatable</a>


                                            </li>


                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-plus-square-fill"></i>
                                    <span>Extras</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Widgets</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-widgets-chatbox.html"
                                                            class="subsubmenu-link">Chatbox</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-widgets-pricing.html"
                                                            class="subsubmenu-link">Pricing</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-widgets-todolist.html" class="subsubmenu-link">To-do
                                                            List</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Icons</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-icons-bootstrap-icons.html"
                                                            class="subsubmenu-link">Bootstrap Icons </a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-icons-fontawesome.html"
                                                            class="subsubmenu-link">Fontawesome</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-icons-dripicons.html"
                                                            class="subsubmenu-link">Dripicons</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Charts</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-chart-chartjs.html"
                                                            class="subsubmenu-link">ChartJS</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-chart-apexcharts.html"
                                                            class="subsubmenu-link">Apexcharts</a>
                                                    </li>

                                                </ul>

                                            </li>


                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-file-earmark-fill"></i>
                                    <span>Pages</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Authentication</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="auth-login.html" class="subsubmenu-link">Login</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="auth-register.html"
                                                            class="subsubmenu-link">Register</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="auth-forgot-password.html"
                                                            class="subsubmenu-link">Forgot Password</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Errors</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="error-403.html" class="subsubmenu-link">403</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="error-404.html" class="subsubmenu-link">404</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="error-500.html" class="subsubmenu-link">500</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="ui-file-uploader.html" class='submenu-link'>File Uploader</a>


                                            </li>



                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Maps</a>


                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-map-google-map.html" class="subsubmenu-link">Google
                                                            Map</a>
                                                    </li>

                                                    <li class="subsubmenu-item ">
                                                        <a href="ui-map-jsvectormap.html" class="subsubmenu-link">JS
                                                            Vector Map</a>
                                                    </li>

                                                </ul>

                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="application-email.html" class='submenu-link'>Email
                                                    Application</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="application-chat.html" class='submenu-link'>Chat
                                                    Application</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="application-gallery.html" class='submenu-link'>Photo
                                                    Gallery</a>


                                            </li>



                                            <li class="submenu-item  ">
                                                <a href="application-checkout.html" class='submenu-link'>Checkout
                                                    Page</a>


                                            </li>

                                        </ul>


                                    </div>
                                </div>
                            </li> --}}
                            <li class="menu-item ms-auto has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-person-fill"></i>
                                    <span>Admin</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="https://zuramai.github.io/mazer/docs" class='submenu-link'>Akun Anda</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="https://github.com/zuramai/mazer#donate" class='submenu-link'>Logout</a>
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
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    {{-- <script src="/assets/js/pages/dashboard.js"></script> --}}
    <script src="/assets/js/pages/horizontal-layout.js"></script>
    {{ $script ?? null }}
</body>

</html>