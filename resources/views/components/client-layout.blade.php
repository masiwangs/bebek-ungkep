
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Toko Resmi' }} - Bebek Ungkep Yuk Sri</title>

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
        .bg-danger { 
            background-color: #dd1a32
        }
        .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
        .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { margin:10px; }
        .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
        .MultiCarousel .leftLst { left:0; }
        .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; }
    </style>
    <style>
        h3 {
        padding: 30px 0 8px;
        position: relative;
        }

        h3::before {
        content: "";
        position: absolute;
        left: 8%;
        bottom: 4px;
        width: 150px;
        height: 14px;
        transform: skew(-12deg) translateX(-50%);
        background: #ffc107;
        z-index: -1;
        }
    </style>
    @notifyCss
    @livewireStyles
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top" style="background-color: #cf182d">
                    <div class="container">
                        <div class="logo">
                            <a href="{{ route('client.index') }}" class="fs-4 fw-bold text-light">
                                <img src="/images/logo/logo.png" style="height: 2.5rem" srcset="">
                            </a>
                        </div>
                        <div class="header-top-right">
                            <a href="javascript:;" id="nav-sm-btn" class="d-block d-xl-none">
                                <i class="bi bi-justify fs-3 text-light"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav id="nav-sm" class="d-none">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class=" mb-2">
                                    <a href="{{ route('client.index') }}" class='menu-link text-dark'>
                                        <span>Halaman depan</span>
                                    </a>
                                </div>
                                <div class=" mb-2">
                                    <a href="{{ route('client.order') }}" class='menu-link text-dark'>
                                        <span>Pesanan</span>
                                    </a>
                                </div>
                                <div class=" mb-2">
                                    <a href="{{ route('client.transaction') }}" class='menu-link text-dark'>
                                        <span>Transaksi</span>
                                    </a>
                                </div>
                                <div class="dropdown mb-2">
                                    <span class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      Profil <i class="bi bi-chevron-compact-down"></i>
                                    </span>
                                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton1">
                                        <li class="dropdown-item">
                                            <a href="{{ route('client.profile') }}" class='submenu-link text-dark'>Akun Anda</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ route('client.login') }}" class='submenu-link text-dark'>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class='menu-link '>
                                        <span><i class="bi bi-question-circle-fill text-dark"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="main-navbar bg-danger">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="{{ route('client.index') }}" class='menu-link '>
                                    <i class="bi bi-house-fill"></i>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('client.order') }}" class='menu-link '>
                                    <span>Pesanan</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('client.transaction') }}" class='menu-link '>
                                    <span>Transaksi</span>
                                </a>
                            </li>
                            
                            @if(auth()->check())
                            <li class="menu-item ms-auto has-sub">
                                <a href="#" class='menu-link '>
                                    <i class="bi bi-person-fill"></i>
                                    <span>Profil</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="{{ route('client.profile') }}" class='submenu-link'>Akun Anda</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="{{ route('client.logout') }}" class='submenu-link'>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="menu-item ms-auto">
                                <a href="{{ route('client.login') }}" class='menu-link '>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('client.register') }}" class='menu-link '>
                                    <span>Register</span>
                                </a>
                            </li>
                            @endif
                            <li class="menu-item">
                                <a href="#" class='menu-link '>
                                    <span><i class="bi bi-question-circle-fill"></i></span>
                                </a>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/horizontal-layout.js"></script>
    <script>
        $(document).ready(function() {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function() {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function() {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function() {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({
                        'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers
                    });
                    $(this).find(itemClass).each(function() {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                } else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>
    <script>
        $('#nav-sm-btn').click(function() {
            $('#nav-sm').toggleClass('d-none')
        })
    </script>
    {{ $script ?? null }}
</body>

</html>