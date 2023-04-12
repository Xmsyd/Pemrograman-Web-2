<?php
// memanggil class bmi
require_once 'class_bmipasien.php';
// mengambil nilai dari variabel POST dengan parameter yang sa,a
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $berat = $_POST['bb'];
    $tinggi = $_POST['tb'];

// membuat objek baru dengan nilai yang diambil dari variabel diatas
    $pasien = new BMIpasien();
    $pasien->nama = $nama;
    $pasien->umur = $umur;
    $pasien->jk = $jk;
    $pasien->berat = $berat;
    $pasien->tinggi = $tinggi;

// membuat variabel dengan nilai yang berisi sebuah methode dari class bmi
    $hasil_bmi = $pasien->hasilBMI();
    $status_bmi = $pasien->statusBMI();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-image: url(https://wallpaperaccess.com/full/136934.jpg);
            backdrop-filter: blur(5px);
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 0.60);
            
        }


        h5,
        p {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="row bg">
        <div class="col-8">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Berat (KG)</th>
                        <th scope="col">Tinggi (CM)</th>
                        <th scope="col">BMI</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>No</th>
                        <!-- mencetak variabel -->
                        <th> <?= $nama ?> </th>
                        <th> <?= $jk ?> </th>
                        <th> <?= $umur ?> </th>
                        <th> <?= $berat ?> </th>
                        <th> <?= $tinggi ?> </th>
                        <th> <?= $hasil_bmi ?> </th>
                        <th> <?= $status_bmi ?> </th>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4 mt-02">
            <?php { ?>

                <div class="border mt-02">
                    <h5>Hasil Evaluasi BMI</h5>
                    <p>Nama : <?= $nama ?> (<?= $jk ?>) </p>
                    <p>Berat/Tinggi Badan : <?= $berat ?>/<?= $tinggi ?></p>
                    <p>Umur : <?= $umur ?></p>
                    <p>BMI : <?= $hasil_bmi ?></p>
                    <p>Hasil : <?= $status_bmi ?></p>
                </div>

            <?php

            }

            ?>
        </div>
    </div>
</body>

</html>