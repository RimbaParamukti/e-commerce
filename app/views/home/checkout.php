<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo BASEURL; ?>/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Checkout</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="our-checkout-area ptb--120 bg__white">
            <form action="<?php echo BASEURL;?>/HOME/transaksi1" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <div class="ckeckout-left-sidebar">
                            <!-- Start Checkbox Area -->
                            <div class="checkout-form">
                                <h2 class="section-title-3">Billing details</h2>
                                <div class="checkout-form-inner">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label style="padding-left: 20px;">Nama Lengkap</label>
                                            <div class="kotak">
                                            <input type="hidden" name="id_user" value="<?php echo $data['user']['id_user'] ?>">
                                            <input type="text" value="<?php echo $data['user']['nama_pelanggan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label style="padding-left: 20px;">Nomer Hp</label>
                                            <div class="kotak">
                                            <input type="number" value="<?php echo $data['user']['notelp'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label style="padding-left: 20px;">Provinsi</label>
                                            <div class="kotak">
                                            <input type="text" value="<?php echo $data['user']['provinsi'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label style="padding-left: 20px;">Kota/Kab</label>
                                          <div class="kotak">
                                            <input type="text" name="kota" value="<?php echo $data['user']['kota'] ?>">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label style="padding-left: 20px;">Kode Pos</label>
                                          <div class="kotak">
                                            <input type="text" name="kodepos" value="<?php echo $data['user']['kodepos'] ?>">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                         <div class="form-group col-md-12">
                                            <label style="padding-left: 20px;">Alamat Lengkap</label>
                                            <div class="kotak">
                                            <textarea name="alamat"><?php echo $data['user']['alamat_lengkap'] ?>
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkbox Area -->
                            <!-- Start Payment Box -->
                            <div class="payment-form">
                                <h2 class="section-title-3">payment details</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                                <div class="payment-form-inner">
                                    <div class="single-checkout-box">
                                        <p>Masukan Bukti Transfer</p>
                                        <input type="file" name="bukti_transaksi" class="form-control" id="transfer" accept="image/*" required>
                                    </div>
                                    <div class="single-checkout-box select-option">
                                        <h2 class="section-title-2">Total Pembayaran</h2>
                                        <?php $Totals = 0 ;
                                        foreach ($data['Cart'] as $Cart) {
                                            if ($Cart['harga_diskon'] == 0) {
                                                $Total = $Cart['jumlah']*$Cart['harga'];
                                            } else{
                                                $Total = $Cart['jumlah']*$Cart['harga_diskon'];
                                            }
                                            $Totals = $Totals + $Total;
                                        } ?>
                                        <p class="shipping-calculator-button"><a class="shipping-calculator-button" href="#">IDR <?php echo number_format($Totals+10000) ?></a></p>
                                        <p class="shipping-calculator-button"><a class="shipping-calculator-button" href="#">Harga Sudah termasuk ongkir</a></p>
                                        <br>
                                        <input type="hidden" name="total" value="<?php echo $Totals+10000 ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- End Payment Box -->
                            <!-- Start Payment Way -->
                            <div class="our-payment-sestem">
                                <div class="htc__checkout__btn">
                                    <button type="submit">CONFIRM & BUY NOW</button>
                                </div>
                            </div>
                            <!-- End Payment Way -->
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="checkout-right-sidebar">
                            <div class="our-important-note">
                                <h2 class="section-title-3">Note :</h2>
                                <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                                <ul class="important-note">
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                </ul>
                            </div>
                            <div class="puick-contact-area mt--60">
                                <h2 class="section-title-3">Quick Contract</h2>
                                <a href="phone:+8801722889963">+88 01900 939 500</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
        <!-- End Checkout Area -->