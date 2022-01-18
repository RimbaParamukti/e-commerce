
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
                                        <table id="row-select" class="display table table-striped table-hover mb-5">
                                            <thead>
                                                <tr>
                                                    <th style="width: 200px">ID</th>
                                                    <th>Kategori</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($data['kat'] as $kat) { ?>
                                                <tr>
                                                    <td><?php echo $kat['id_kategori']; ?></td>
                                                    <td><?php echo $kat['nama_kategori']; ?></td>
                                                    <td>
                                                        <span><a href="<?php echo BASEURL; ?>/Admin_Kategori/edit_kategori/<?php echo $kat['id_kategori'] ?>"><i class="ti-pencil-alt color-default"></i></a></span>
                                                        <span>
                                                        <a href="<?php echo BASEURL; ?>/Admin_Kategori/hapusDataKategori/<?php echo $kat['id_kategori'] ?>" 
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
