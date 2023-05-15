<?php 
require_once '../fungsi/koneksi.php';

// 1. Tangkap Request ke halaman form
$input_id = $_POST['input-id'];
$input_tanggal = $_POST['input-tanggal'];
$input_nama = $_POST['input-nama'];
$input_alamat = $_POST['input-alamat'];
$input_nohp = $_POST['input-nomorhp'];
$input_email = $_POST['input-email'];
$input_jumlahpesanan = $_POST['input-jumlahpesanan'];
$input_deskripsi = $_POST['input-deskripsi'];

// 1.1
$_proses = $_POST['proses'];

// 1.2 Tangkap produk id
// $produk_id = $_GET['id'];

// 2. menyimpan data kedalam array
    $ar_data[]=$input_id; // 0.1
    $ar_data[]=$input_tanggal; //?1
    $ar_data[]=$input_nama; //?2
    $ar_data[]=$input_alamat; //?3
    $ar_data[]=$input_nohp; //?4
    $ar_data[]=$input_email; //?5
    $ar_data[]=$input_jumlahpesanan; //?6
    $ar_data[]=$input_deskripsi; //?7

// 3. Memproses data tersebut
if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi_text,) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,nama=?,alamat_pemesan=?,no_hp=?,
    email=?,jumlah_pesanan=?,deskripsi_text=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
   }



// 4. Kembali ke page awal
header('../location:index.php');

?>