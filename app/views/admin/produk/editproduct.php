<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu Upload</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="menu-upload-form">
                                        <form action="<?php echo BASEURL; ?>/Admin_Produk/editDataProduk" method="POST" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Produk</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" name="id_produk" value="<?php echo $data['produk']['id_produk'] ?>">
                                                    <input type="text" class="form-control" placeholder="Nama Product*" name="nama_produk" value="<?php echo $data['produk']['nama_produk'] ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Detail Produk</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Type Detail Produk*" name="deskripsi" required><?php echo $data['produk']['deskripsi'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Harga Produk</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Harga Produk*" name="harga" required value="<?php echo $data['produk']['harga'] ?>" >
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Harga Diskon</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Harga Diskon" name="harga_diskon" value="<?php echo $data['produk']['harga_diskon'] ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Ukuran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Ukuran barang*" name="ukuran" required value="<?php echo $data['produk']['ukuran'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Stock barang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Stock barang(pcs)*" name="stok" required value="<?php echo $data['produk']['stok'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="id_kategori">
                                                    <?php foreach ($data['kat'] as $kat) {?>
                                                        <option value="<?php echo $kat['id_kategori']; ?>">
                                                            <?php echo $kat['nama_kategori']; ?>
                                                            </option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </div>
                <!-- /# main content -->
            </div>
            <!-- /# container-fluid -->
        </div>
        <!-- /# main -->
    </div>
    <!-- /# content wrap -->