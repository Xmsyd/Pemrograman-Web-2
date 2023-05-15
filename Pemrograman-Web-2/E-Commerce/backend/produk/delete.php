<?php 
    require_once '../../frontend/fungsi/koneksi.php';

    // mendapatkan nilai dari paremeter id pada url
    $delete = $_GET['id'];

    // perintah sql
    $sql ="DELETE FROM produk WHERE id = ?";
    
    // menyiapkan statmen 
    $stmt = $conn->prepare($sql);

    // mengeksekusi statmen
    $stmt->execute([$delete]);
?>