<?php 
// Memanggil Fungsi Koneksi yang terhubung ke database dbook
require_once 'fungsi/koneksi.php';

// Menanggil Class Produk Untuk menampilkan produk
require_once 'fungsi/Produk.php';

// Memanggil bagian Header untuk ditampilkan di page index 
require_once 'page_puzzle/header.php';

// Memanggil puzzle page bagian home/inti untuk ditampilkan di index
include_once 'page_puzzle/home.php';

// Memanggil Footer untuk melengkapi puzzle page index yang belum lengkap
include_once 'page_puzzle/footer.php';


?>