<?php if ($data['admin'] == false) {
    echo "<script>
        document.location.href = '".BASEURL."/Admin/login'
    </script>";
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminity : Widget</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?php echo BASEURL; ?>/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="<?php echo BASEURL; ?>/admin/index"><i class="ti-home"></i> Dashboard </a></li>
                    <li class="label">Kelola Produk</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>Produk <span class="badge badge-primary">2</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo BASEURL; ?>/Admin_Produk/tambahproduct">Tambah Produk</a></li>
                            <li><a href="<?php echo BASEURL; ?>/Admin_Produk/index">Daftar Produk</a></li>
                        </ul>
                    </li>
                    <li class="label">Kelola Galeri</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-image"></i>Produk Galeri <span class="badge badge-primary">2</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo BASEURL; ?>/admin_galeri/tambahgaleri">Tambah Galeri</a></li>
                            <li><a href="<?php echo BASEURL; ?>/admin_galeri/index">Daftar Galeri</a></li>
                        </ul>
                    </li>
                    <li class="label">Kelola Kategori</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-view-list"></i>Kategori <span class="badge badge-primary">2</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo BASEURL; ?>/Admin_Kategori/tambahkategori">Tambah Kategori</a></li>
                            <li><a href="<?php echo BASEURL; ?>/Admin_Kategori/index">Daftar Kategori</a></li>
                        </ul>
                    </li>
                    <li class="label">Kelola Transaksi</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-truck"></i>Transaksi <span class="badge badge-primary">1</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo BASEURL; ?>/Admin_transaksi/index">Daftar Transaksi</a></li>
                        </ul>
                    </li>

                    <li class="label">Else</li>
                    <li><a href="<?php echo BASEURL; ?>/Admin/user"><i class="ti-user"></i> User </a></li>
                    <li><a href="<?php echo BASEURL; ?>/User_data/logout"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Adminity</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
        </div>
    </div>