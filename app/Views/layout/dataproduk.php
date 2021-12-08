<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $Judul ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?= $this->renderSection('content'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="my-input">Nama Produk</label>
                            <input id="my-input" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Harga</label>
                            <input id="my-input" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="FotoKTP" class="form-label">Foto Produk</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="fotoktp" accept=".png .jpg .jpeg" required>
                                <label class="custom-file-label" for="fotoktp">Pilih Foto</label>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>