
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
                                    <li class="active">Table-Row-Select</li>
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
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Bootstrap Data Table </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id Transaksi</th>   
                                                    <th>Tanggal pemesanan</th>
                                                    <th>Total</th>
                                                    <th>Resi</th>
                                                    <th>Status</th>
                                                    <th>Detai</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($data['transaksi'] as $transaksi) { ?>
                                                    <tr>
                                                    <td><?php echo $transaksi['id_transaksi']; ?></td>
                                                    <td><?php $date = date_create($transaksi['tanggal']); 
                                                    echo date_format($date,"d F Y") ; ?></td>
                                                    <td>IDR <?php echo number_format($transaksi['total']); ?></td>
                                                    <td><?php echo $transaksi['resi'] ?></td>
                                                    <?php if ($transaksi['status'] == 0) { ?>
                                                        <td>Transaksi Gagal</td>
                                                    <?php } elseif ($transaksi['status'] == 1) { ?>
                                                        <td>Konfirmasi Pembayaran</td>
                                                    <?php }  elseif ($transaksi['status'] == 2) { ?>
                                                        <td>Silahkan Masukan Resi</td>
                                                    <?php } elseif ($transaksi['status'] == 3) { ?>
                                                        <td>Barang Sedang Dikirim</td>
                                                    <?php } ?>
                                                    <td><span><a href="<?php echo BASEURL; ?>/Admin_transaksi/detail/<?php echo $transaksi['id_transaksi'] ?>"><i class="ti-tag color-default"></i></a></span></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
