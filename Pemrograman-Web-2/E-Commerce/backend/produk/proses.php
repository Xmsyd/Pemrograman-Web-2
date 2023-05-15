<?php 
require_once '../../frontend/fungsi/koneksi.php';

// 1. Tangkap Request ke halaman form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_ju = $_POST['harga_ju'];
$harga_be = $_POST['harga_be'];
$stok = $_POST['stok'];
$minStok = $_POST['minStok'];
$deskripsi = $_POST['deskripsi'];
$kategori_produk = ['kategori_produk'];


// 1.1
$_proses = $_POST['prosesProduk'];

// 2. menyimpan data kedalam array
    $ar_data[]=$kode; //?1
    $ar_data[]=$nama; //?2
    $ar_data[]=$harga_ju; //?3
    $ar_data[]=$harga_be; //?4
    $ar_data[]=$stok; //?5
    $ar_data[]=$minStok; //?6
    $ar_data[]=$deskripsi; //?7
    $ar_data[]=$kategori_produk; //?8

// 3. Memproses data tersebut
if($_proses == "simpan"){
    // data baru
    $sql = "INSERT INTO produk (kode,nama,harga_ju,harga_be,stok,minStok,deskripsi,kategori_produk) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "edit"){
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE produk SET kode=?,nama=?,harga_ju,harga_be,stok,minStok,deskripsi,kategori_produk WHERE id=?";
   }
   if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
   }



// 4. Kembali ke page awal
header('../location:index.php');

?>