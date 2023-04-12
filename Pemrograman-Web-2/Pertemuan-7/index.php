<?php 

class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahkecepatan(){

    }

    public function kurangikecepatan(){

    }
}


class produk{
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;
            const PHI = 3.14;


    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;

    }
            
    public function Harga(){
        return self::PHI;
        // if "this" = return this->Harga
    }        
}

// $produk1 = new Produk();
// $produk1->nama = "KAOS";
// $produk1->jenis = "BAJU";
// $produk1->tambahproperti = "ini properti baru";

// var_dump($produk1);

$produk2 = new Produk("BAJU HITAM POLOS", "SEBUAH KAOS", 15000);
echo "Produk : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga :"  .  $produk2->Harga();




$produk3 = new Produk("HOODIE SPIDERMAN", "JAKET", 300000);
echo "<br>";
echo "<br>";
echo "Produk 3 :   $produk3->nama, $produk3->jenis";
echo "<br>";
echo "Harga :"  .  $produk3->harga();


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
</head>
<body>    
<br>
<a href="tugas/form_bmipassien.php" class="btn btn-outline-primary ml-1">tugas</a>
</body>
</html>