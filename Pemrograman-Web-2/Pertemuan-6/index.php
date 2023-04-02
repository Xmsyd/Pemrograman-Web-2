<?php
#menghubungkan back end dengan require one
require_once 'dbkoneksi.php';

#memasukan Query Mysql dengan variabel $sql
$sql = "SELECT * FROM pelanggan ";
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background: #330066;
        }

        table {
            border: solid white 3px;
            border-color: #330066;
            border-radius: 3px;
        }

        thead {
            color: #FF9100;
            background-color: #512DA8;
        }

        tbody {
            color: black;
            background-color: white;
        }

        .btn {
            color: aliceblue;
            border-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm mb-2">
            <!-- link tambah/create -->
            <a href="form.php" class="btn btn-warning mt-1 ml-1">+ Tambah Pelanggan</a>
        </div>
        <!-- tabel daftar database pelanggan -->
        <table border-1 class="table">
            <thead class="text-center">
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Email</th>
                    <th>ID Kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">

                <!-- menanmpilkan data basemysql tabel pelanggan ke dalam html dengan php  -->
                <?php
                // mwmbuat perkondisian while dengan variabel number agar bagian th nomor dapat otomatis bertambah sesuai jumlah data 
                $number = 1;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                ?>

                    <tr>
                        <!-- =? berfungsi untuk mengganti elemen php sekaligus berfungsi menggantikan command echo -->
                        <td> <?= $number ?> </td>
                        <td> <?= $row['kode']  ?> </td>
                        <td> <?= $row['nama'] ?> </td>
                        <td> <?= $row['jk'] ?> </td>
                        <td> <?= $row['tmp_lahir'] ?> , <?= $row['tgl_lahir'] ?> </td>
                        <td> <?= $row['email'] ?> </td>
                        <td> <?= $row['kartu_id'] ?> </td>
                        <td>
                            <!-- menghubungkan setiap link agar terhubung dengan file php yang dituju dengan di tambah id -->
                            <a href="view.php?id=<?= $row['id']     ?>" class="btn btn-warning">VIEW</a>
                            <a href="edit.php?id=<?= $row['id']     ?>" class="btn btn-info">EDIT</a>
                            <a href="delete.php?id=<?= $row['id']    ?>" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>

                <?php
                    // digunakan untuk menutup perkondisian while  
                    $number++;
                endwhile;
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>