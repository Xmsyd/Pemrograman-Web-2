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

    <style>
        /* mengatur tombol login dan sign up */
        .div-tombol {
            display: flex;
            flex-direction: column;
        }

        .tombol {
            margin-top: auto;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light header">
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
                        <button class="btn btn-outline-primary justify-content-end" type="button">
                            <i class="fa fa-shopping-cart me-1"></i>
                        </button>
                    </div>
                </form>

            </div>

            <div class="d-flex div-tombol">
                <button class="tombol btn btn-outline-success me-2 align-self-center mb-1" type="button">Login</button>
                <button class="tombol btn btn-outline-primary align-self-center" type="button">Sign Up</button>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="mycontainer">

        <!-- SIDEBAR -->

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
            </div>
        </div>

        <!-- Main Conten / Konten Utama yang akan ditampilkan -->
        <div class="main-content">
            <!-- Header Content -->
            <div class="header-content">
                <!-- Sebelah Kiri -->
                <div class="col-5">
                    <h2 class="mt-2 ml-3 desc">Good Morning <b>User!</b></h2>
                    <div class="banners"></div>
                </div>

                <!-- Sebelah kanan -->
                <div class="col-5 header-kanan container-filter mt-2">
                    <h2>Search By <b>Book!</b></h2>
                    <div class="radio-button">
                        <!-- opsi 1 -->
                        <label for="week" class="custom-radio">
                            <input type="radio" id="week" name="topbook" value="week">
                            <span class="radio-btn"><i class="fa fa-check"></i>
                                <div class="filter-icon mt-4">
                                    <h3>Top Weekly</h3>
                                </div>
                            </span>
                        </label>
                        <!-- opsi 2 -->
                        <label for="month" class="custom-radio">
                            <input type="radio" id="month" name="topbook" value="month">
                            <span class="radio-btn"><i class="fa fa-check"></i>
                                <div class="filter-icon mt-4">
                                    <h3>Top Monthly</h3>
                                </div>
                            </span>
                        </label>
                        <!-- opsi3 -->
                        <label for="year" class="custom-radio">
                            <input type="radio" id="year" name="topbook" value="year">
                            <span class="radio-btn"><i class="fa fa-check"></i>
                                <div class="filter-icon mt-4">
                                    <h3>Top Yearly</h3>
                                </div>
                            </span>
                        </label>
                    </div>
                    <!-- <div class="filter">
                        <div class="filter1">
                            <h2>Top Weekly</h2>
                            <div class="radio-button">
                                <label class="custom-radio">
                                    <input type="radio" name="radio">
                                    <span class="radio-btn"><i class=""></i></span>
                                </label>    
                            </div> -->
                        <!-- </div>
                        <div class="filter2">
                            <h2>Top Monthly</h2>
                        </div>
                        <div class="filter3">
                            <h2>Top Yearly</h2>
                        </div>
                    </div> -->
                    <div class="tmb-fil mt-4">
                        <button class="tmb-filter">Filter</button>
                    </div>
                </div>
            </div>

            <!-- List Kategory -->
            <div class="category mt-3">
                <ul>
                    <li>
                        <p href="#" class="active">
                        <h3><b>All Category</b></h3>
                        </p>
                    </li>
                    <li><a href="#" class="link">
                            <h3>Komik dan Manga</h3>
                        </a></li>
                    <li><a href="#" class="link">
                            <h3>Seni dan Musik</h3>
                        </a></li>
                    <li><a href="#" class="link">
                            <h3>Pendidikan</h3>
                        </a></li>
                    <li><a href="#" class="link">
                            <h3>Hobi dan Gaya Hidup</h3>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>