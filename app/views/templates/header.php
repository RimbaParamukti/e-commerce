<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $data['judul']; ?> || MamankScnd</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASEURL; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo BASEURL; ?>/apple-touch-icon.png">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?php echo BASEURL; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <?php if ($data['judul']=='Home') { ?>
            <header id="header" class="htc-header">
        <?php } else{ ?>
            <header id="header" class="htc-header header--3 bg__white">
        <?php } ?>
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="<?php echo BASEURL; ?>">
                                    <img src="<?php echo BASEURL; ?>/images/logo/uniqlo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop"><a href="<?php echo BASEURL; ?>">Home</a>
                                    </li>
                                    <li><a href="<?php echo BASEURL; ?>/Home/about">About</a></li>
                                    <li><a href="<?php echo BASEURL; ?>/Produk/index">Shop</a>
                                    </li>  
                                    <?php if ($data['user'] == false) {?>
                                        <li><a href="<?php echo BASEURL; ?>/User_data/login">wishlist</a></li>
                                    <?php } else{ ?>
                                        <li><a href="<?php echo BASEURL; ?>/wishlist">wishlist</a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                            
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_drop
                                down">
                                    <ul>
                                        <li><a href="<?php echo BASEURL; ?>/Home">Home</a></li>
                                        <li><a href="<?php echo BASEURL; ?>/Home/about">About</a></li>
                                        <li><a href="<?php echo BASEURL; ?>/Home/produk">Shop</a></li>
                                        <li><a href="<?php echo BASEURL; ?>/Home/wishlist">wishlist</a></li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <?php if ($data['user'] == false){ ?>
                                    <li><a href="<?php echo BASEURL; ?>/User_data/login"><span class="ti-user"></span></a></li>
                                <?php } else{ ?>
                                    <li class="user__setting"><span class="ti-user"></span></li>
                                <?php } ?>
                                <?php if ($data['user'] == false){ ?>
                                    <li><a href="<?php echo BASEURL; ?>/User_data/login"><span class="ti-shopping-cart"></span></li>
                                <?php } else{ ?>
                                    <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="user__info">
                <div class="user__info__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.php">
                                <img src="<?php echo BASEURL; ?>/images/sidebar-img/9.jpg" class="rounded-circle" width="100" alt="logo">
                            </a>
                        </div>
                        <h4> <?php echo $data['user']['nama_pelanggan'] ?></h4>
                        <h3> <?php echo $data['user']['notelp'] ?> </h3>
                        <h3> <?php echo $data['user']['username'] ?> </h3>
                        <ul class="off__edit__logout">
                            <li><a href="<?php echo BASEURL; ?>/User_data/">Edit Your Profile</a></li>
                            <li><a href="<?php echo BASEURL; ?>/Home/transaksi"> All Transaction</a></li>
                        </ul>
                    </div>
                    <div class="offset__sosial__share">
                        <h3 class="offset__title"><a href="<?php echo BASEURL; ?>/User_data/logout">Logut Your Account?</a></h3>
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">                            
                            <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart" id="body__overlay">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <?php $i = 0;
                        $totals = 0;
                        foreach ($data['Cart'] as $Cart) { ?>
                            <div class="shp__single__product del_crt<?php echo$Cart["id_cart"] ?>" >
                                <div class="shp__pro__thumb">
                                    <a href="#">
                                        <img src="<?php echo BASEURL; ?>/images/product/<?php echo $data['fotocart'][$i]?>" alt="product images">
                                    </a>
                                </div>
                                <div class="shp__pro__details">
                                    <h2><a href="product-details.html"><?php echo $Cart['nama_produk']; ?></a></h2>
                                    <span class="quantity"><?php echo $Cart['jumlah']; ?></span>
                                    <span class="shp__price">
                                        <?php if ($Cart['harga_diskon'] == 0) {
                                            $Total = $Cart['jumlah']*$Cart['harga'];
                                        } else{
                                            $Total = $Cart['jumlah']*$Cart['harga_diskon'];
                                        }
                                        echo "IDR".number_format($Total); ?></span>
                                </div>
                                <div class="remove__btn" id="remove__btn" data-id="<?php echo$Cart['id_cart']; ?>">
                                    <a href="#" title="Remove this item" class="HapusCart" data-harga="<?php echo $Total ?>" data-url="<?php echo BASEURL; ?>" data-id="<?php echo $Cart['id_cart']; ?>"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                            <?php $i++;
                            $totals = $Total + $totals; } ?>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">IDR <?php echo number_format($totals) ?><input type="hidden" name="total" id="total" value="<?php echo $totals ?>"></li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="<?php echo BASEURL; ?>/Cart">View Cart</a></li>
                        <li class="shp__checkout"><a href="<?php echo BASEURL; ?>/Home/checkout">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->