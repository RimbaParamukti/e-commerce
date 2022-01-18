<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/12.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Wishlist</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Wishlist</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- wishlist-area start -->
        <div class="wishlist-area ptb--120 bg__white" id="table">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table id="table">
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="nobr">Remove</span></th>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name"><span class="nobr">Product Name</span></th>
                                                <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0;
                                            foreach ($data['Wishlist'] as $Wishlist) { ?>
                                                <tr>
                                                <td class="product-remove"><a href="<?php echo BASEURL; ?>/Wishlist/hapuswishlist/<?php echo $Wishlist['id_wishlist'] ?>/<?php echo $Wishlist['id_produk'] ?>/Wishlist">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="<?php echo BASEURL; ?>/images/product/<?php echo $data['foto'][$i]?>" alt="" /></a></td>
                                                <td class="product-price"><span class="amount"><?php echo $Wishlist['nama_produk']; ?></span></td>
                                                <td class="product-price"><span class="amount">IDR 
                                                    <?php if ($Wishlist['harga_diskon'] == 0) {
                                                        echo number_format($Wishlist['harga']);
                                                    } else{
                                                        echo number_format($Wishlist['harga_diskon']);
                                                    }
                                                    ?></span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock"><?php echo $Wishlist['stok'] ?></span></td>
                                                <td class="product-add-to-cart"><a href="#table"> Add to Cart</a></td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="wishlist-share">
                                                        <h4 class="wishlist-share-title">Share on:</h4>
                                                        <div class="social-icon">
                                                            <ul>
                                                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist-area end -->