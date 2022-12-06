<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/tienda/tienda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 15:28:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Tienda - Digital Products Store eCommerce Bootstrap 5 Template</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets_fontend/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet">

    <!--=== Bootstrap CSS ===-->
    <link href="assets_fontend/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets_fontend/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets_fontend/css/plugins.css" rel="stylesheet">
    <!--=== Helper CSS ===-->
    <link href="assets_fontend/css/helper.min.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets_fontend/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets_fontend/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--== Start Header Section ==-->
<header id="header-area">
    <!-- Start PreHeader Area -->
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-6">
                    <div class="preheader-contact-info d-flex align-items-center justify-content-between justify-content-md-start">
                        <div class="single-contact-info">
                            <span class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <a href="mailto:your@example.com" class="contact-text">
                                <strong>Email:</strong> your@email.here
                            </a>
                        </div>
                        <div class="single-contact-info">
                            <span class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <a href="tel:01816277243" class="contact-text">
                                <strong>Phone:</strong> (+1) 866-540-3229
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-6 mt-xs-10">
                    <div class="site-setting-menu">
                        <ul class="nav justify-content-center justify-content-md-end">
                            <li><a href="index.php?act=myaccount">Tài khoản của tôi</a></li>
                            <li><a href="index.php?act=login">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PreHeader Area -->

    <!-- Start Header Middle Area -->
    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-4 col-md-2 col-xl-3 m-auto text-center text-lg-left">
                    <a href="index.html" class="logo-wrap d-block">
                        <img src="assets_fontend/img/logo.png" alt="Logo" class="img-fluid"/>
                        
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Search Box Area Start -->
                <div class="col-8 col-md-7 col- m-auto ">
                    <div class="search-box-wrap">
                        <form class="search-form d-flex" action="index.php?act=load_sp" method="POST">
                            <input type="text" name="search" placeholder="Gõ và nhấn enter" style="width: 609px; height: 61px;" />
                            <!-- <button class="btn btn-search" name="tim" type="submit">
                                <img src="assets_fontend/img/icons/icon-search.png"
                                                                alt="Search Icon"/> -->
                                <input type="submit" name="tim" value="Tìm kiếm" style="width: 100px; height: 61px; color: white; background-color: #2192FF;">
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Search Box Area End -->

                <!-- Mini Cart Area Start -->
                <div class="col-12 col-md-3 col-xl-2 m-auto text-center text-lg-right mt-xs-15" style="width: 220px">
                <div style="width: 20px; height: 20px; background-color: #F5EBE0; color: black; position: absolute; z-index: 1; margin-left: 90px; border-radius: 50px;">
                <?php 
                    $tong = 0;
                     foreach ($_SESSION['mua_cart'] as $key) {
                        $tong += count($key) / 5;
                     }
                     echo $tong;
                ?>
                </div>
                    <div class="minicart-wrapper" style="display: flex; position: relative;">
                        <a href="index.php?act=dohang"><button class="btn btn-minicart" style="margin-left: -30px; width: 140px; height: 70px;">Giỏ Hàng</button></a>
                        <a href="index.php?act=load_bill"><button class="btn btn-minicart" style="margin-left: 40px; width: 140px; height: 70px;">Đơn hàng</button></a>
                    </div>
                </div>
                <!-- Mini Cart Area End -->
            </div>
        </div>
    </div>
    <!-- End Header Middle Area -->

    <!-- Start Main Menu Area -->
    <div class="navigation-area" id="fixheader">
        <div class="container">
            <div class="row">
                <!-- Categories List Start -->
                <!-- Categories List End -->

                <!-- Main Menu Start -->
                <div class="col-2 col-lg-9 d-none d-lg-block">
                    <div class="main-menu-wrap">
                        <nav class="mainmenu">
                            <ul class="main-navbar clearfix">
                                <li class="dropdown-show"><a href="index.php?act=go_home" class="arrow-toggle">Trang chủ</a>
                                <li><a href="index.php?act=about">Về chúng tôi</a></li>
                                <li class="dropdown-show"><a href="index.php?act=show_product" class="arrow-toggle">Sản phẩm</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="" class="mega-item-title">Danh mục</a>
                                            <ul>
                                                <?php 
                                                    foreach ($danhmuc_all as $key) {
                                                        extract($key);
                                                        $link = "index.php?act=load_sp&id_danhmuc= ".$id_danhmuc;
                                                        echo '
                                                        <li><a href="'.$link.'">'.$name_danhmuc.'</a></li>
                                                        ';
                                                    }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Main Menu End -->
            </div>
        </div>
    </div>
    <!-- End Main Menu Area -->
</header>
<!--== End Header Section ==-->