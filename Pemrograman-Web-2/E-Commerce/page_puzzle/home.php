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

        <!-- Main Conten / Konten Utama yang akan ditampilkan -->
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"> </div>
                </label>

            </div>
            <!-- Header Content -->
            <div class="header-content">
                <!-- Sebelah Kiri -->
                <div class="col-5">
                    <h2 class="mt-2 ml-3 desc">Good Morning <b>User!</b></h2>
                    <div class="banners">

                    </div>
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
                        <h3><b>Semua Kategory</b></h3>
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

            <!-- Produk Disiniiiii -->
            <div class="container-fluid">
                <div class="row">
                    <div class="list-produk d-flex flex-wrap justify-conten">


                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :


                        ?>
                            <div class="col-md-3 mt-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="assets\img\<?= $row['nama'] ?>.jpg" class="card-img-top" alt="produk1">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="text-center">
                                                <div class="product-name"><?= $row['nama'] ?></div>
                                                <div class="product-price"> RP.<?= $row['harga_jual'] ?> </div>
                                                <i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i><i class="fa fa-star" style="color: gold"></i>
                                                <br>
                                                <a href="page/detail_produk.php?id=<?= $row['id'] ?>" class="btn btn-primary mt-2">Lihat Detail</a>
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
    <script src="js/myjs.js"></script>