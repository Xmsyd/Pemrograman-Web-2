<?php 
require_once '../frontend/fungsi/koneksi.php';

// 1. Tangkap Request ke halaman form
$input_id = $_POST['kategori'];

// 1.1
$_proses = $_POST['proses'];

// 2. menyimpan data kedalam array
    $ar_data[]=$input_nama; //?2

// 3. Memproses data tersebut
if($_proses == "simpan"){
    // data baru
    $sql = "INSERT INTO kategori_produk (nama) VALUES (?)";
   }else if($_proses == "edit"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
   }



// 4. Kembali ke page awal
header('../location:index.php');

?>