<?php
    $host = 'localhost';
    $dbname = 'dbbook';
    $username = 'root';
    $password = '';


    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        // echo 'Alhamdulillah Suskses Koneksi DB';
    } catch(PDOException  $e) {
        echo "Waduh Kenapa ini ???? : " . $e->getMessage();
    }
?>