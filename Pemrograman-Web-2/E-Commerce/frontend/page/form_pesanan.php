<?php 
require_once '../fungsi/koneksi.php';
?>

<?php 
if (!(isset($_GET['id']))) {
    echo "lol";
    if (empty($_GET['id'])) {
        header("location:index.php");
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Boostrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/mycss.css">

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light header">
        <div class="container-fluid col-12">
            <div class="col-2">
                <div class="d-flex align-items-center logo" href="#">
                    <img src="..\assets\img\Logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top" style="background-color: white; border-radius: 30px;">
                    <h4 class="d-inline-block align-text-top">DOMAINBOOK</h4>
                </div>

            </div>

            <div class="col-6">
                <form class="d-flex mx-auto my-2 my-lg-0">
                    <input id="search" class="form-control search-box" type="search" placeholder="Search" aria-label="Search">
                    <div class="header-button1">
                        <button class="icon-header btn btn-light justify-content-end me-2" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    </button>
                    <div class="header-button2">
                        <button class="btn  btn-outline-secondary justify-content-end" type="button">
                            <i class="fa fa-shopping-cart me-1"></i>
                        </button>
                    </div>
                </form>

            </div>

            <div class="d-flex div-tombol">
                <a class="tombol btn btn-outline-secondary me-2 align-self-center mb-1" href="../../backend/index.php">Back End</a>
            </div>
        </div>
    </nav>

    <div class="mycontainer">
        <div class="sidebar">

            <!-- Sidebar Header -->

            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <i class="fa fa-user-circle-o icon" aria-hidden="true"></i>
                        <span class="description-header">User</span>
                    </a>
                </div>
            </div>

            <!-- Main Sidebar  -->

            <div class="main">
                <div class="list-item-active mt-4">
                    <p href="#">
                        <i class="fa fa-home icon-active" aria-hidden="true"></i>
                        <span class="description ml-3">Home</span>
                    </p>
                </div>
                <div class="list-item mt-1">
                    <a href="#">
                        <i class="fa fa-book icon" aria-hidden="true"></i>
                        <span class="description ml-3">Produk</span>
                    </a>
                </div>
                <div class="list-item mt-1">
                    <a href="#">
                        <i class="fa fa-users icon" aria-hidden="true"></i>
                        <span class="description ml-3">Pelanggan</span>
                    </a>
                </div>
                <div class="list-item mt-1">
                    <a href="#">
                        <i class="fa fa-cart-plus icon" aria-hidden="true"></i>
                        <span class="description ml-3">Pesanan</span>
                    </a>
                </div>
                <div class="list-item mt-1">
                    <a href="#">
                        <i class="fa fa-home icon" aria-hidden="true"></i>
                        <span class="description ml-3">Contact</span>
                    </a>
                </div>

                <!-- Banner -->
                <div id="carouselExampleSlidesOnly" class="carousel slide col-sm-10" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/img/jjk0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/jjk1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/jjk2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- Form Pesanan Disini -->
        <div class="container col-12 col-md-8 col-lg-6 col-xl-">
            <form method="POST" action="controller.php">

                <input type="hidden" name="produk_id" value="<?= $id['id'] ?>">


                <div class="mb-3 mt-3 row">
                    <label for="input-tanggal" class="col-sm-2 col-form-label"><b>Tanggal</b></label>
                    <div class="col-sm-10">
                        <input type="DATE" class="form-control" id="input-tanggal" name="input-tanggal">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-nama" name="input-nama">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-alamat" class="col-sm-2 col-form-label"><b>Alamat</b></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="input-alamat" name="input-alamat"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-nomorhp" class="col-sm-2 col-form-label"><b>No.HP</b></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="input-nomorhp" name="input-nomorhp">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-email" class="col-sm-2 col-form-label"><b>Email</b></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="input-email" name="input-email">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-jumlahpesanan" class="col-sm-2 col-form-label"><b>Jumlah Pesanan</b></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="input-jumlahpesanan" name="input-jumlahpesanan">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="input-deskripsi" class="col-sm-2 col-form-label"><b>Deskripsi</b></label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="input-deskripsi" name="input-deskripsi"></textarea>
                    </div>
                </div>

                <div class="mb-3 row mt4">
                    <div class="col">
                        <input type="submit" name="proses" value="simpan" class="btn btn-primary"></input>
                        <a href="../index.php" class="btn btn-warning">Gak jadi deh</a>
                    </div>

                </div>

            </form>
            <!-- Akhir Form -->
        </div>
    </div>

</body>

</html>