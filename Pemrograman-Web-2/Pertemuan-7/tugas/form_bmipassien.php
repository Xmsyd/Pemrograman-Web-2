<?php
// panggil class bmi
require_once 'class_bmipasien.php';
// jika submit maka nilai nya akan di simpan kedalam variabel ini
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $berat = $_POST['bb'];
    $tinggi = $_POST['tb'];


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengisian BMI</title>
    <!-- memanggil css online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- menambahkan sedikit css -->
    <style>
        body {
	        background-image: url(https://wallpaperaccess.com/full/136934.jpg);
	        background-size: cover;
	        background-repeat: no-repeat;
}

        form {
            background-color: rgba(255, 255, 255, 0.60);
            backdrop-filter: blur(5px);
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 10px;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-2">
            <form method="POST" action="list_bmipasien.php">
                <h1 class="mt-5"> Form BMI </h1>
                <div class="form-group row mt-5">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card-o"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" placeholder="Nama Anda" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-anchor"></i>
                                </div>
                            </div>
                            <input id="bb" name="bb" placeholder="00" type="number" class="form-control" required="required">
                            <div class="input-group-append">
                                <div class="input-group-text">KG</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-child"></i>
                                </div>
                            </div>
                            <input id="tb" name="tb" placeholder="000" type="number" class="form-control" required="required">
                            <div class="input-group-append">
                                <div class="input-group-text">CM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-4 col-form-label">Umur</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-hourglass-half"></i>
                                </div>
                            </div>
                            <input id="umur" name="umur" type="text" class="form-control" required="required">
                            <div class="input-group-append">
                                <div class="input-group-text">Thn</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required" checked="checked">
                            <label for="jk_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required">
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>