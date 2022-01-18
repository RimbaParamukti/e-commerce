<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Transaksi</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Transaksi</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Id Transaksi</th>
                                            <th class="product-name">Tanggal Pesan</th>
                                            <th class="product-price">Total</th>
                                            <th class="product-quantity">Resi</th>
                                            <th class="product-subtotal">Status</th>
                                            <th class="product-remove">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['transaksi'] as $transaksi) { ?>
                                            <tr>
                                            <td class="product-subtotal"><?php echo $transaksi['id_transaksi']; ?></td>
                                            <td class="product-subtotal"><?php $date = date_create($transaksi['tanggal']); 
                                                echo date_format($date,"d F Y") ; ?>
                                            </td>
                                            <td class="product-price"><span class="amount">IDR<?php echo number_format($transaksi['total']) ?></span></td>
                                            <td class="product-subtotal">
                                                <?php if (empty($transaksi['resi'])) {
                                                    echo "-";
                                                } else{
                                                    echo $transaksi['resi'];
                                                } ?>
                                            </td>
                                            <?php if ($transaksi['status'] == 0) { ?>
                                                <td class="product-subtotal">Transaksi Gagal</td>
                                            <?php } elseif ($transaksi['status'] == 1) { ?>
                                                <td class="product-subtotal">Konfirmasi Pembayaran</td>
                                            <?php }  elseif ($transaksi['status'] == 2) { ?>
                                                <td class="product-subtotal">Silahkan Masukan Resi</td>
                                            <?php } elseif ($transaksi['status'] == 3) { ?>
                                                <td class="product-subtotal">Barang Sedang Dikirim</td>
                                            <?php } ?>
                                            <td class="product-remove"><a href="<?php echo BASEURL; ?>/Home/detailtransaksi/<?php echo $transaksi['id_transaksi'] ?>">!</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                </div>
                                <div class="col-md-5 col-sm-12 ">
                                    <div class="cart_totals">
                                        <h2>Keterangan</h2>
                                        <table>
                                            <tbody>
                                                <tr class="shipping">
                                                    <th></th>
                                                    <td>
                                                        <p><a class="shipping-calculator-button" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></p>
                                                    </td>
                                                </tr>               
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="<?php echo BASEURL; ?>/Home/checkout">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->