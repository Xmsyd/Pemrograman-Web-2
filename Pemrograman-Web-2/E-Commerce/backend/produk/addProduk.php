<?php
require_once '../../frontend/fungsi/koneksi.php';
?>

<?php
$menu = ['list' => 'listProduk.php', 'form' => 'addProduk.php'];
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" <?= $menu['list'] ?> " class="nav-link">List Produk</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" <?= $menu['form'] ?> " class="nav-link">Tambah Produk</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../frontend/index.php" class="brand-link">
                <img src="../../frontend/assets/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background-color: white;">
                <span class="brand-text font-weight-light">DOMAINBOOK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fas fa-user fa-fw"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">USER</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Domain Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="listProduk.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Produk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../listPesanan.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Pesanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <form method="POST" action="proses.php">
                    <div class="container">
                        <div class="form-group row">
                            <label for="kode" class="col-4 col-form-label">Kode</label>
                            <div class="col-8">
                                <input id="kode" name="kode" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga_ju" class="col-4 col-form-label">Harga Jual</label>
                            <div class="col-8">
                                <input id="harga_ju" name="harga_ju" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga_be" class="col-4 col-form-label">Harga Beli</label>
                            <div class="col-8">
                                <input id="harga_be" name="harga_be" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-4 col-form-label">Stok</label>
                            <div class="col-8">
                                <input id="stok" name="stok" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="minStok" class="col-4 col-form-label">Min Stok</label>
                            <div class="col-8">
                                <input id="minStok" name="minStok" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori_Produk" class="col-sm-10 col-form-label">Kategori Produk</label>

                            <?php
                            $sql = "SELECT * FROM kategori_produk";
                            $rs = $conn->query($sql);
                            ?>
                            <select id="kategori_produk" name="kategori_produk" class="custom-select col-sm-10 float-right">
                                <?php
                                foreach ($rs as $rowkategori) {
                                ?>
                                    <option value="<?= $rowkategori['id'] ?>"><?= $rowkategori['nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <?php
                                if (isset($_GET)) {
                                ?>
                                    <button name="proses" type="submit" class="btn btn-primary" value="edit">edit</button>

                                <?php
                                } else {
                                ?>
                                    <button name="prosesProduk" type="submit" class="btn btn-primary" value="simpan">simpan</button>

                                <?php
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                </form>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; Muhamad Masayid Alfarizqi </a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../template/dist/js/demo.js"></script>
</body>

</html>