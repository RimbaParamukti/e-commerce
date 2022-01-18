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
                                  <span class="breadcrumb-item active">Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--10 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <ul class="nav product__data__tab mb--20" role="tablist">
                            <h1>Kode Transaksi : <?php echo $data['transaksi']['id_transaksi']; ?></h1>
                        </ul>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php $i = 0;
                    $quantity = 0;
                    foreach ($data['detailtransaksi'] as $detail) { ?>
                        <div class="col-md-4 col-lg-6 col-sm-9 mb--20">
                            <div class="product__details__container">
                                <!-- Start Small images -->
                                <div class="product__transaksi__images">
                                    <img style="width: 600px; height: 200px" src="<?php echo BASEURL; ?>/images/product/<?php echo $data['fototransaksi'][$i] ?>" alt="small-image">
                                </div>
                                <div class="htc__product__details__inner">
                                    <div class="pro__Trans__title">
                                        <h2><?php echo $detail['nama_produk'] ?></h2>
                                    </div>
                                    <div class="pro__Trans">
                                        <ul class="pro__Trans__size">
                                            <li><h2 class="title__Trans">Harga</h2></li>
                                            <?php if ($detail['harga_diskon'] == 0) { ?>
                                                <li><h2 class="title__Trans"> <?php echo number_format($detail['harga']);
                                                $harga = $detail['harga']; ?></h2></li>
                                            <?php } else{ ?>
                                                <li><h2 class="title__Trans"> <?php echo number_format($detail['harga_diskon']);
                                                $harga = $detail['harga_diskon'] ?></h2></li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="pro__Trans">
                                        <ul class="pro__Trans__size">
                                            <li><h2 class="title__Trans">Ukuran</h2></li>
                                            <li><h2 class="title__Trans"><?php echo $detail['ukuran'] ?></h2></li>
                                        </ul>
                                    </div>
                                    <div class="pro__Trans">
                                        <ul class="pro__Trans__size">
                                            <li><h2 class="title__Trans">Quantity</h2></li>
                                            <li><h2 class="title__Trans"><?php echo $detail['jumlah']; 
                                            $quantity = $quantity + $detail['jumlah']; ?></h2></li>
                                        </ul>
                                    </div>
                                    <div class="pro__Trans">
                                        <ul class="pro__Trans__size">
                                            <li><h2 class="title__Trans">Total</h2></li>
                                            <li><h2 class="title__Trans"> 
                                                <?php $total = $harga * $detail['jumlah'];
                                                echo $total;?></h2></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Small images -->
                            </div>
                        </div>
                    <?php $i++;} ?>
                </div>

            </div>
        </section>
        <!-- End Product Details -->
        <!-- Start Product tab -->
        <section class="htc__product__details__tab bg__white pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <ul class="nav product__data__tab mb--20" role="tablist">
                            <h1>Data Pengiriman</h1>
                        </ul>
                        <div class="form-row">
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Nama Penerima</label>
                                <input type="text" class="form-control" placeholder="<?php echo $data['user']['nama_pelanggan']; ?>" disabled>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="text" class="form-control" placeholder="<?php echo $data['user']['notelp']; ?>" disabled>
                              </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Kota</label>
                                <input type="text" class="form-control" placeholder="<?php echo $data['transaksi']['kota']; ?>" disabled>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">KodePos</label>
                                <input type="text" class="form-control" placeholder="<?php echo $data['transaksi']['kodepos']; ?>" disabled>
                              </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""><?php echo $data['transaksi']['alamat']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <ul class="nav product__data__tab mb--20" role="tablist">
                            <h1>Informasi Product</h1>
                        </ul> 
                        <div class="Info_Trans">
                            <table>
                                <tbody>
                                    <tr class="Infonya">
                                        <th>Status</th>
                                            <td>
                                                <?php if ($data['transaksi']['status'] == 0) { ?>
                                                    <strong><span class="amount">Transaksi Gagal</span></strong>
                                                <?php } elseif ($data['transaksi']['status'] == 1) { ?>
                                                    <strong><span class="amount">Konfirmasi Pembayaran</span></strong>
                                                <?php }  elseif ($data['transaksi']['status'] == 2) { ?>
                                                    <strong><span class="amount">Silahkan Masukan Resi</span></strong>
                                                <?php } elseif ($data['transaksi']['status'] == 3) { ?>
                                                    <strong><span class="amount">Barang Sedang Dikirim</span></strong>
                                                <?php } ?>
                                            </td>
                                    </tr>
                                    <tr class="Infonya">
                                        <th>Total Barang</th>
                                            <td>
                                                <strong><span class="amount"><?php echo $quantity; ?>pcs</span></strong>
                                            </td>
                                    </tr>
                                    <tr class="Infonya">
                                        <th>Total Harga</th>
                                            <td>
                                                <strong><span class="amount">IDR<?php echo number_format($data['transaksi']['total']); ?></span></strong>
                                            </td>
                                    </tr>     
                                    <tr class="Infonya">
                                        <?php if (!empty($data['transaksi']['resi'])) { ?>
                                            <th>Resi</th>
                                            <td>
                                                <strong><span class="amount"><?php echo $data['transaksi']['resi'] ?></span></strong>
                                            </td>
                                        <?php } ?>
                                    </tr>                          
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product tab -->