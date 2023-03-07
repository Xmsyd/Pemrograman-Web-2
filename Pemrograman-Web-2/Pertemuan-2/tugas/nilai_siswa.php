
<?php

// menentukan variabel
    
    $_nama_mh = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];

    // mencari rata-rata dan nilai total
    $_nilaiT = ( $_tugas + $_uts + $_uas) / 3;

    // menentukan grade nilai
    // Grade E $$$
    if ($_nilaiT <= 35){
        $_grade = 'E';
    }

    // Grade D ###
    elseif ($_nilaiT >35 && $_nilaiT<=55){
        $_grade = 'D';
    }

    // Grade C &&&
    elseif ($_nilaiT >55 && $_nilaiT <=69){
        $_grade = 'C';
    }

    // Grade B ***
    elseif ($_nilaiT >69 && $_nilaiT <=84){
        $_grade = 'B';
    
    }

    // Grade A !!!
    elseif ($_nilaiT >84 && $_nilaiT <=100){
        $_grade = 'A';
    }

    // Grade I %%%
    else {
        $_grade = 'I';
    }
 
    // Menentuka Keterangan Predikat Dengan Menggunakan Metode Switch
    
    switch ($_grade){
        case 'E':
            $_predikat = 'Sangat Kurang';
            break;

        case 'D':
            $_predikat = 'Kurang';
            break;
        
        case 'C':
            $_predikat = 'Cukup';
            break;
        
        case 'B':
            $_predikat = 'Baik';
            break;

        case 'A':
            $_predikat = 'Sangat Baik';
            break;
        
        case 'I':
            $_predikat = 'Tidak Ada';
            break;

        default :
            echo 'Format Nilai Salah';
            break;

    }


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai_siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Nilai UTS</th>
                <th scope="col">Nilai UAS</th>
                <th scope="col">Nilai Tugas</th>
                <th scope="col">Total Nilai</th>
                <th scope="col">Grade Nilai</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $_nama_mh ?></td>
            <td scope="col"><?= $_matkul ?></td>
            <td scope="col"><?= $_uts ?></td>
            <td scope="col"><?= $_uas ?></td>
            <td scope="col"><?= $_tugas ?></td>
            <td scope="col"><?= number_format($_nilaiT,1,',',) ?></td>
            <td scope="col"><?= $_grade ?></td>
            <td scope="col"><?= $_predikat ?></td>
        </tr>
    </tbody>
</table>
<div class="text-center mt-5">
            <a class="btn btn-warning px-4 py-2 text-light" href="form_nilai.php" role="button">Back</a>
        </div>  
</body>
</html>