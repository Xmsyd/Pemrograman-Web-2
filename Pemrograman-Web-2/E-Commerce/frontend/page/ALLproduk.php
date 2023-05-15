<?php 
require_once '../fungsi/koneksi.php';
#memasukan Query Mysql dengan variabel $sql
$sql = "SELECT * FROM produk ";
#meniapkan statemen
$stmt = $conn->prepare($sql);
#mengeksekusi statmen agar bisa di jalankan
$stmt->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
                <button class="tombol btn btn-outline-secondary me-2 align-self-center mb-1" type="button">Login</button>
                <button class="tombol btn  btn-outline-secondary align-self-center" type="button">Sign Up</button>
            </div>
        </div>
    </nav>

    <!--Side bar  -->
    <!-- SIDEBAR -->
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
                <div class="list-item mt-4">
                    <a href="../index.php">
                        <i class="fa fa-home icon" aria-hidden="true"></i>
                        <span class="description ml-3">Home</span>
                    </a>
                </div>
                <div class="list-item-active mt-1">
                    <p href="#">
                        <i class="fa fa-book icon-active" aria-hidden="true"></i>
                        <span class="description ml-3">Produk</span>
                    </p>
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

                <!-- Banners -->
                <div id="carouselExampleSlidesOnly" class="carousel slide col-sm-10" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/jjk0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/jjk1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/jjk2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- LIST PRODUK -->

            <!-- Produk Disiniiiii -->
            <div class="container-fluid">
                <div class="row">
                    <div class="list-produk d-flex flex-wrap justify-conten">


                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :


                        ?>
                            <div class="col-md-3 mt-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="..\assets\img\<?= $row['nama'] ?>.jpg" class="card-img-top" alt="produk1">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="text-center">
                                                <div class="product-name"><?= $row['nama'] ?></div>
                                                <div class="product-price"> RP.<?= $row['harga_jual'] ?> </div>
                                                <i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i>
                                                <br>
                                                <a href="detail_produk.php?id=<?= $row['id'] ?>" class="btn btn-primary mt-2">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>





</body>

</html>