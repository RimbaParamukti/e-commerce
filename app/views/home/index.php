<!-- Start Slider Area -->
        <div class="slider__container slider--one">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0)  url(<?php echo BASEURL; ?>/images/bg/10.jpg) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/slider/bg/1.png) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Our Product Area -->
        <section class="htc__product__area ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product__menu">
                                <button data-filter="*"  class="is-checked">All</button>
                                <?php foreach ($data['kategori'] as $kategori) {
                                    ?>
                                    <button data-filter=".<?php echo $kategori['id_kategori'] ?>"><?php echo $kategori['nama_kategori'] ?></button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Product MEnu -->
                    <div class="row product__list">
                        <!-- Start Single Product -->
                        <?php 
                        $i = 0;
                        foreach ($data['produk'] as $produk) {
                        ?>
                        <div id="<?php echo $i ?>" class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 <?php echo $produk['id_kategori'] ?>">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="<?php echo BASEURL; ?>/produk/detailproduk/<?php echo $produk['id_produk'] ?>">
                                            <img src="<?php echo BASEURL; ?>/images/product/<?php echo $data['foto'][$i]?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#<?php echo$produk['id_produk'] ?>" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <?php if ($data['user'] == false) { ?>
                                                <li><a title="Add TO Cart" href="<?php echo BASEURL; ?>/User_data/Login"><span class="ti-shopping-cart"></span></a></li>
                                            <?php } else{ ?>
                                                <li><a title="Add TO Cart" href="<?php echo BASEURL; ?>/Cart/tambahcart/<?php echo $data['user']['id_user']?>/<?php echo $produk['id_produk'] ?>/index"><span class="ti-shopping-cart"></span></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist" id="<?php echo $i ?>">
                                        <?php if ($data['user'] == false) { ?>
                                            <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart tambahwishlist" href="<?php echo BASEURL; ?>/User_data/Login"><span class="ti-shopping-cart"></span></a>
                                    <?php } else{ 
                                            if ($data['Wishlist'][$i] == false) { ?>
                                            <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart tambahwishlist" href="<?php echo BASEURL; ?>/Wishlist/tambahwishlist/<?php echo $data['user']['id_user']?>/<?php echo $produk['id_produk'] ?>/<?php echo $i ?>"><span class="bi bi-heart"></span></a>
                                        <?php } else{ ?>
                                            <a data-toggle="tooltip" title="Remove From Wishlist" class="add-to-cart tambahwishlist" href="<?php echo BASEURL; ?>/Wishlist/hapuswishlist/<?php echo $data['Wishlist'][$i] ?>/<?php echo $produk['id_produk'] ?>/<?php echo $i ?>"><span class="bi bi-heart-fill"></span></a>
                                            <?php }
                                        }?>
                                        <!-- bi bi-heart -->
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?php echo BASEURL; ?>/produk/detailproduk"><?php echo $produk['nama_produk']; ?></a></h2>
                                    <ul class="product__price">
                                        <?php if ($produk['harga_diskon'] == 0) { ?>
                                            <li class="new__price">IDR <?php echo number_format($produk['harga']); ?></li>
                                        <?php } else{ ?>
                                            <li class="old__price">IDR <?php echo number_format($produk['harga'])?></li>
                                            <li class="new__price">IDR <?php echo number_format($produk['harga_diskon']) ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $i++; } ?>
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->


    <!-- QUICKVIEW PRODUCT -->
    <?php 
    $i = 0;
    foreach ($data['produk'] as $produk) {?>
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="<?php echo$produk['id_produk'] ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?php echo BASEURL; ?>/images/product/<?php echo $data['foto'][$i]?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1><?php echo $produk['nama_produk'] ?></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <?php if ($produk['harga_diskon'] == 0) {?>
                                            <span class="new-price">IDR <?php echo $produk['harga']; ?></span>
                                        <?php } else{ ?>
                                            <span class="new-price">IDR <?php echo $produk['harga_diskon']; ?></span>
                                            <span class="old-price">IDR <?php echo $produk['harga']; ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $produk['deskripsi']; ?>
                                </div>
                                <div class="select__size">
                                    <h2>Ukuran</h2>
                                    <ul class="color__list">
                                        <li class="xxl__size"><a title="XXL" href="#"><?php echo $produk['ukuran']; ?></a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Tersedia</h2>
                                    <ul class="color__list">
                                        <li class="xxl__size"><a title="XXL" href="#"><?php echo $produk['stok']; ?>pcs</a></li>
                                    </ul>
                                </div>
                                <div class="addtocart-btn">
                                    <?php if ($data['user'] == false) { ?>
                                        <a href="<?php echo BASEURL; ?>/User_data/Login">  Add to Cart  </a>
                                    <?php } else{ ?>
                                        <a href="<?php echo BASEURL; ?>/Cart/tambahcart/<?php echo $data['user']['id_user']?>/<?php echo $produk['id_produk'] ?>/index">  Add to Cart  </a>
                                    <?php } ?>
                                </div>
                                <div class="wishlist-btn">
                                    <?php if ($data['user'] == false) { ?>
                                        <a href="<?php echo BASEURL; ?>/User_data/Login">Add to Wishlist</a>
                                    <?php } else{ 
                                        if ($data['Wishlist'][$i] == false) { ?>
                                            <a href="<?php echo BASEURL; ?>/Wishlist/tambahwishlist/<?php echo $data['user']['id_user']?>/<?php echo $produk['id_produk'] ?>/<?php echo $i ?>">Tambah Wishlist</a>
                                        <?php } else{ ?>
                                            <a href="<?php echo BASEURL; ?>/Wishlist/hapuswishlist/<?php echo $data['Wishlist'][$i] ?>/<?php echo $produk['id_produk'] ?>/<?php echo $i ?>">Hapus Wishlist</a>
                                        <?php }
                                    }?>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <?php
    $i++;
     } ?>
    <!-- END QUICKVIEW PRODUCT -->
