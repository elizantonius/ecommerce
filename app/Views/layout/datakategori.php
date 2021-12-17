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
    <div class="row">
        <div class="col-6">
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Tambah Kategori</h3>

                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Kategori</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Kategori">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div> -->

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>


                            <!-- /.container-fluid -->
            </section>
        </div>
        <div class="col-6">
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Tabel Data Kategori</h3>

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td>Aksesoris</td>
                                        <td><a class="btn btn-warning"><i class="fas fa-edit"></i></a> | <a class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a> </td>
                                    </tr>
                                </table>
                            </div>


                            <!-- /.container-fluid -->
            </section>
        </div>
    </div>


    <!-- /.content -->
</div>