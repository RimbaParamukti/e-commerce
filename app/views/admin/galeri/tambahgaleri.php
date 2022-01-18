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
                                    <h4>Upload Gambar</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="menu-upload-form">
                                        <form action="<?php echo BASEURL; ?>/admin_galeri/tambahDataGaleri" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Produk</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="id_produk">
                                                        <?php foreach ($data['produk'] as $produk) {?>
                                                        <option value="<?php echo$produk['id_produk'] ?>">
                                                            <?php echo $produk['nama_produk']; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <label class="col-sm-3 control-label">
                                                    Upload Photo(150 X 150)
                                                </label>
                                                <div class="col-sm-5">
                                                    <input type="file" name="pic" accept="image/*" class="form-control">
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