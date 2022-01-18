<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Notice</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header pr">
                                    <h4><?php echo $data['transaksi']['id_transaksi'] ?></h4>
                                </div>
                                <div class="card">
                                    <div class="recent-comment m-t-15">
                                        <div class="row">
                                            <?php $i= 0; $quantity = 0;
                                            foreach ($data['detailtransaksi'] as $detail) { ?>
                                                <div class="col-md-4 m-t-10">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#"><img style="width: 100px; height: 100px;" src="<?php echo BASEURL; ?>/images/product/<?php echo $data['fototransaksi'][$i] ?>" alt="..."></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading color-primary"><?php echo $detail['nama_produk'] ?></h4>
                                                            <h4 class="media-heading">IDR <?php if ($detail['harga_diskon'] == 0) {  echo number_format($detail['harga']);
                                                        } else{ echo number_format($detail['harga_diskon']); } ?>
                                                            <p>ukuran : <?php echo $detail['ukuran'] ?></p>
                                                            <p>Jumlah : <?php echo $detail['jumlah'];
                                                            $quantity = $quantity + $detail['jumlah']; ?>Pcs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php $i++; } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Data Pengiriman</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Nama penerima</label>
                                                    <input type="text" class="form-control border-none input-flat bg-ash" placeholder="<?php echo $data['user']['nama_pelanggan']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Nomer telepon</label>
                                                    <input type="text" class="form-control border-none input-flat bg-ash" placeholder="<?php echo $data['user']['notelp']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <input type="text" class="form-control border-none input-flat bg-ash" placeholder="<?php echo $data['transaksi']['kota']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Kode Pos</label>
                                                    <input type="text" class="form-control border-none input-flat bg-ash" placeholder="213" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control border-none input-flat bg-ash" disabled><?php echo $data['transaksi']['alamat']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Informasi Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile m-t-15">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="custom-tab user-profile-tab">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#1" >Transfer</a></li>
                                                    </ul>
                                                </div>
                                                <div class="user-photo m-b-30">
                                                    <img class="img-responsive" src="<?php echo BASEURL; ?>/images/buktitr/<?php echo $data['transaksi']['bukti_transaksi'] ?>" alt="Bukti transaksi" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="custom-tab user-profile-tab">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" >
                                                            <div class="contact-information">
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Status</span>
                                                            <?php if ($data['transaksi']['status'] == 0) { ?><span class="phone-number">: Gagal</span>
                                                            <?php } elseif ($data['transaksi']['status'] == 1) { ?>
                                                                <span class="phone-number">: Pembayaran</span>
                                                            <?php }  elseif ($data['transaksi']['status'] == 2) { ?>
                                                                <span class="phone-number">: Resi</span>
                                                            <?php } elseif ($data['transaksi']['status'] == 3) { ?>
                                                                <span class="phone-number">: Dikirim</span>
                                                            <?php } ?>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Total Harga</span>
                                                                    <span class="phone-number">: IDR<?php echo number_format($data['transaksi']['total']); ?></span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Total Barang</span>
                                                                    <span class="phone-number">: <?php echo $quantity; ?>pcs</span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Resi</span>
                                                                    <span class="phone-number">: <?php echo $data['transaksi']['resi'] ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-t-22">
                                            <?php 
                                            if ($data['transaksi']['status'] == 1) {?>
                                                <div class="col-lg-12">
                                                <form action="<?php echo BASEURL;?>/Admin_transaksi/konfirmasipembayaran" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $data['transaksi']['id_transaksi'] ?>">
                                                <input type="hidden" name="status" value="2">
                                                <button name="konfirmasi" class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Konfirmasi Pembayaran</button>
                                                <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" name="gagal" type="submit">Gagal</button>
                                                </form>
                                                </div>
                                            <?php } elseif ($data['transaksi']['status'] == 0) { ?>
                                                <div class="col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <strong>Transaksi Gagal!</strong> Pelanggan Memberikan Bukti Transaksi yang Salah
                                                    </div>
                                                </div>
                                            <?php } elseif ($data['transaksi']['status'] == 2) { ?>
                                                <div class="col-md-12">
                                                    <form action="<?php echo BASEURL;?>/Admin_transaksi/konfirmasipembayaran" method="POST">
                                                    <div class="basic-form">
                                                        <div class="form-group">
                                                            <label>Masukan Resi</label>
                                                            <input type="text" name="resi" class="form-control border-none input-flat bg-ash">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id" value="<?php echo $data['transaksi']['id_transaksi'] ?>">
                                                    <button name="konfirmasiresi" class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Konfirmasi Resi</button>
                                                    </form>
                                                </div>
                                            <?php }elseif ($data['transaksi']['status'] == 3) { ?>
                                                <div class="col-lg-12">
                                                    <div class="alert alert-success">
                                                        <strong>Barang Sedang Dikirim!</strong>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>