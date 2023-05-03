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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid col-12">
            <div class="col-2">

                <div class="d-flex align-items-center" href="#">
                    <img src="logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    <h4 class="d-inline-block align-text-top">DOMAINSHOP</h4>
                </div>

            </div>

            <div class="col-6">
                <form class="d-flex mx-auto my-2 my-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success justify-content-end" type="submit">Search</button>
                    <button class="btn btn-outline-primary justify-content-end" type="button">
                        <i class="bi bi-cart-fill me-1"></i>
                        Cart
                    </button>
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
            <div class="list-item mt-4">
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="description ml-3">Home</span>
                </a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <h1>hall</h1>
    </div>
    </div>
</body>

</html>