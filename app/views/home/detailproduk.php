<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Product Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span id="detailproduk" class="breadcrumb-item active">Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="product__details__container">
                            <!-- Start Small images -->
                            <ul class="nav product__small__images" role="tablist">
                                <?php foreach ($data['galeri'] as $galeri) { ?>
                                    <li role="presentation" class="pot-small-img active">
                                    <a href="#<?php echo $galeri['id_galeri'] ?>" role="tab" data-toggle="tab">
                                        <img src="<?php echo BASEURL; ?>/images/product/<?php echo $galeri['foto'] ?>" alt="small-image">
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- End Small images -->
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <?php foreach ($data['galeri'] as $galeri) {
                                        $foto [] = $galeri["foto"];
                                    }?>
                                    <div role="tabpanel" class="tab-pane active" id="<?php echo $foto[0]?>">
                                        <img src="<?php echo BASEURL; ?>/images/product/<?php echo $foto[0]?> ?>" alt="full-image">
                                    </div>
                                    <?php foreach ($data['galeri'] as $galeri) { ?>
                                    <div role="tabpanel" class="tab-pane" id="<?php echo $galeri['id_galeri'] ?>">
                                        <img src="<?php echo BASEURL; ?>/images/product/<?php echo $galeri['foto'] ?>" alt="full-image">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
                        <div class="htc__product__details__inner">
                            <div class="pro__detl__title">
                                <h2><?php echo $data['produk']['nama_produk'] ?></h2>
                            </div>
                            <div class="pro__details">
                                <p><?php echo $data['produk']['deskripsi']; ?></p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <?php if ($data['produk']['harga_diskon'] == 0) {?>
                                    <li>IDR <?php echo $data['produk']['harga']; ?></li>
                                <?php } else{ ?>
                                <li class="old__prize">IDR <?php echo $data['produk']['harga']; ?></li>
                                <li>IDR <?php echo $data['produk']['harga_diskon']; ?></li>
                            <?php } ?>
                            </ul>
                            <div class="pro__dtl__size">
                                <ul class="pro__choose__size">
                                    <li><h2 class="title__5">Ukuran : </h2></li>
                                    <li><h2 class="title__5"><?php echo $data['produk']['ukuran']; ?></h2></li>
                                </ul>
                                <ul class="pro__choose__size">
                                    <li><h2 class="title__5">Barang Terserdia : </h2></li>
                                    <li><h2 class="title__5"><?php echo $data['produk']['stok']; ?>Pcs</h2></li>
                                </ul>
                                <form id='myform' method='POST' action='<?php echo BASEURL; ?>/cart/buynow'>
                                <ul class="pro__choose__size">
                                    <li><h2 class="title__5">Quantity :</h2></li>
                                    <div class="product-quantity">
                                            <div class="cart">
                                                <input class="cart-box" type="number" name="qtybutton" min="0" value="1" max="<?php echo $data['produk']['stok'] ?>">pcs
                                            </div>
                                        </div>
                                </ul>
                            </div>
                                <input type="hidden" name="id_produk" value="<?php echo $data['produk']['id_produk']; ?>">
                                <input type="hidden" name="user" value="<?php echo  $data['user']['id_user']?>">
                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn"><button type="submit">buy now</button></li>
                                <?php
                                if (!isset($data['user']['id_user'])) { ?>
                                    <li><a href="<?php echo BASEURL; ?>/User_data/Login" data-toggle="tooltip" title="Add To Wishlist"><span class="ti-cart"></span></a></li>
                                <?php }else {
                                     if (!isset($data['Wishlist'][0])) { ?>
                                        <li><a href="<?php echo BASEURL; ?>/Wishlist/tambahwishlist/<?php echo $data['user']['id_user']?>/<?php echo $data['produk']['id_produk']?>/detailproduk" data-toggle="tooltip" title="Add To Wishlist"><span class="bi bi-heart"></span></a></li>
                                    <?php }else{ ?>
                                    <li><a href="<?php echo BASEURL; ?>/Wishlist/hapuswishlist/<?php echo $data['Wishlist'][0]['id_wishlist'] ?>/<?php echo $data['produk']['id_produk']?>/detailproduk" data-toggle="tooltip" title="Remove From Wishlist"><span class="bi bi-heart-fill"></span></a></li>
                                <?php }
                            } ?>
                            </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Start Product tab -->
        <section class="htc__product__details__tab bg__white pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <ul class="nav product__deatils__tab mb--60" role="tablist">
                            <li role="presentation">
                                <a class="active" href="#sheet" role="tab" data-toggle="tab">Data sheet</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product__details__tab__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="sheet" class="product__tab__content active">
                                <div class="pro__feature">
                                        <h2 class="title__6">Data sheet</h2>
                                        <ul class="feature__list">
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        </ul>
                                    </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product tab -->