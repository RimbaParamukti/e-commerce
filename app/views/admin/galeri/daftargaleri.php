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
                                                    <th>Id</th>   
                                                    <th>produk</th>
                                                    <th>foto</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                               <?php foreach ($data['galeri'] as $galeri) {?>
                                                <tr>
                                                   <td><?php echo $galeri['id_galeri']; ?></td>
                                                   <td><?php echo $galeri['nama_produk']; ?></td>
                                                   <td class="col-sm-3 col-lg-2">
                                                    <div class="  round-img">
                                                            <a href=""><img style="width: 30%" src="<?php echo BASEURL; ?>/images/product/<?php echo $galeri['foto'] ?>" alt=""  ></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span><a href="<?php echo BASEURL; ?>/Admin_Galeri/edit/<?php echo $galeri['id_galeri'] ?>"><i class="ti-pencil-alt color-default"></i></a></span>
                                                        <span>
                                                        <a href="<?php echo BASEURL; ?>/Admin_Galeri/hapus/<?php echo $galeri['id_galeri'] ?>" 
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
