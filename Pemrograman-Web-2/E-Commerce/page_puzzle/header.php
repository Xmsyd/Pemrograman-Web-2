<?php
require_once 'fungsi/Produk.php';
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
    <title>Halaman Utama</title>
    <!-- CSS Boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/mycss.css">
    <!-- My Js -->
    
    <!-- <style>
        /* mengatur tombol login dan sign up */
        .div-tombol {
            display: flex;
            flex-direction: column;
        }

        .tombol {
            margin-top: auto;
        }
    </style> -->
    <style>
    body {
      padding-top: 58px; /* Menambahkan padding agar konten tidak terhalangi oleh header yang tetap */
    }
  </style>

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light header fixed-top">
        <div class="container-fluid col-12">
            <div class="col-2">
                <div class="d-flex align-items-center logo" href="#">
                    <img src="" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
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