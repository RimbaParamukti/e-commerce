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
                                  <span class="breadcrumb-item active">Biodata</span>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8" style="background-color: #f1f1f1; padding-top: 20px; padding-bottom: 20px">
                        <div class="ckeckout-left-sidebar">
                            <!-- Start Checkbox Area -->
                            <div class="checkout-form">
                                <h2 class="section-title-3">Biodata</h2>
                                <div class="checkout-form-inner">
                                    <form action="<?php echo BASEURL;?>/user_data/editDataUser" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label style="padding-left: 20px;">Nama Lengkap</label>
                                              <div class="kotak">
                                                <input type="hidden" name="id_user" value="<?php echo $data['user']['id_user'] ?>">
                                                <input type="text" name="nama" value="<?php echo $data['user']['nama_pelanggan'] ?>">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label style="padding-left: 20px;">Nomer Hp</label>
                                              <div class="kotak">
                                                <input type="number" name="notelp" value="<?php echo $data['user']['notelp'] ?>">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label style="padding-left: 20px;">Provinsi</label>
                                              <div class="kotak">
                                                <input type="text" name="provinsi" value="<?php echo $data['user']['provinsi'] ?>">
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
                                              <label style="padding-left: 20px;">Kecamatan</label>
                                              <div class="kotak">
                                                <input type="text" name="kecamatan" value="<?php echo $data['user']['kecamatan'] ?>">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label style="padding-left: 20px;">Kelurahan</label>
                                              <div class="kotak">
                                                <input type="text" name="kelurahan" value="<?php echo $data['user']['kelurahan'] ?>">
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
                                                <textarea name="Alamat"><?php echo $data['user']['alamat_lengkap'] ?>
                                                </textarea>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="htc__biodata__btn mt--30">
                                            <button type="submit">Input Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Checkbox Area -->
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="checkout-right-sidebar">
                            <div class="our-important-note" style="background-color: #f0f0f0; padding: 20px; margin-bottom: 20px">
                                <h2 class="section-title-3">Note :</h2>
                                <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                            </div>
                            <form action="<?php echo BASEURL;?>/user_data/ResetPassword" method="POST">
                            <div class="checkout-form" style="background-color: #f0f0f0; padding: 20px">
                                <h2 class="section-title-3">Ubah Password</h2>
                                <div class="checkout-form-inner">
                                  <input type="hidden" name="id_user" value="<?php echo $data['user']['id_user'] ?>">
                                    <div class="single-biodata-box">
                                        <input type="text" value="<?php echo $data['user']['username'] ?>" placeholder="User Name*" readonly>
                                    </div>
                                    <div class="single-biodata-box">
                                        <input type="Password" placeholder="Password Lama*" name="pwlama">
                                    </div>
                                    <div class="single-biodata-box">
                                        <input type="Password" placeholder="Password Baru*" name="pwbaru">
                                    </div>
                                    <div class="single-biodata-box">
                                        <input type="Password" placeholder="Masukan kembali Password Baru*" name="repwbaru">
                                    </div>
                                    <div class="htc__biodata__btn mt--29">
                                        <button type="submit">Reset password</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout Area -->