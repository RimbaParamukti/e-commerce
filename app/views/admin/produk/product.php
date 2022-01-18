
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
                                                    <th>Nama</th>   
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Harga Diskon</th>
                                                    <th>Ukuran</th>
                                                    <th>Stok</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($data['produk'] as $produk) { ?>
                                                    <tr>
                                                    <td><?php echo $produk['nama_produk']; ?></td>
                                                    <td><?php echo $produk['deskripsi']; ?></td>
                                                    <td>IDR <?php echo number_format($produk['harga']); ?></td>
                                                    <td>IDR <?php echo number_format($produk['harga_diskon']); ?></td>
                                                    <td><?php echo $produk['ukuran']; ?></td>
                                                    <td><?php echo $produk['stok']; ?></td>
                                                    <td><?php echo $produk['nama_kategori']; ?></td>
                                                    <td>
                                                        <span><a href="<?php echo BASEURL; ?>/Admin_produk/edit_produk/<?php echo $produk['id_produk'] ?>"><i class="ti-pencil-alt color-default"></i></a></span>
                                                        <span>
                                                        <a href="<?php echo BASEURL; ?>/Admin_produk/hapusDataproduk/<?php echo $produk['id_produk'] ?>" 
                                                        onclick="return confirm('yakin Menghapus galeri?')"><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
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
