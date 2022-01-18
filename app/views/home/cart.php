<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Cart</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Cart</span>
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
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        $Totals = 0;
                                            foreach ($data['Cart'] as $Cart) { ?>
                                                <tr class="tabelcart<?php echo$Cart["id_cart"] ?>">
                                                    <td class="product-thumbnail"><a href="#"><img src="<?php echo BASEURL; ?>/images/product/<?php echo $data['fotocart'][$i]?>" alt="" /></a></td>
                                                    <td class="product-name"><a href="#"><?php echo $Cart['nama_produk']; ?></a></td>
                                                    <?php if ($Cart['harga_diskon'] == 0) { ?>
                                                        <td class="product-price"><span class="amount">IDR<?php echo number_format($Cart['harga']); ?></span></td>
                                                    <?php } else{ ?>
                                                        <td class="product-price"><span class="amount">IDR<?php echo number_format($Cart['harga_diskon']); ?></span></td> <?php } ?>
                                                    <td class="product-quantity"><?php echo $Cart['jumlah']; ?></td>
                                                    <td class="product-subtotal"><?php if ($Cart['harga_diskon'] == 0) {
                                                        $Total = $Cart['jumlah']*$Cart['harga'];
                                                    } else{
                                                        $Total = $Cart['jumlah']*$Cart['harga_diskon'];
                                                    }
                                                    echo "IDR".number_format($Total); ?></td>
                                                    <td class="product-remove"><a href="<?php echo BASEURL; ?>/Cart/hapusCart/<?php echo $Cart['id_cart'] ?>">X</a></td>
                                                </tr>
                                            <?php $i++;
                                            $Totals = $Totals + $Total; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <input type="hidden" name="total" id="total" value="<?php echo $Totals ?>">
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <a href="<?php echo BASEURL; ?>/Produk">Continue Shopping</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 ">
                                    <div class="cart_totals">
                                        <h2>Cart Totals</h2>
                                        <table>
                                            <tbody>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td class="total__price1">
                                                        <strong><span class="amount">IDR<?php echo number_format($Totals) ?></span></strong>
                                                    </td>
                                                </tr>                            
                                                <tr class="shipping">
                                                    <th></th>
                                                    <td>
                                                        <p><a class="shipping-calculator-button" href="#">Harga Belum termasuk ongkir</a></p>
                                                    </td>
                                                </tr>               
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <?php if ($Totals == 0) { ?>
                                                <a href="#" onclick=" <?php echo "alert('Silahkan Pilih Barang Terlebih dahulu')"; ?>">Proceed to Checkout</a>
                                                
                                            <?php } else { ?>
                                                <a href="<?php echo BASEURL; ?>/Home/checkout">Proceed to Checkout</a>
                                            <?php } ?>
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