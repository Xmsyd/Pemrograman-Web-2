<?php

// Membuat class BMIpasien
class BMIpasien{
    
    // membuat properti dalam class BMIpasien
    public $nama,
            $umur,
            $jk,
            $berat,
            $tinggi;

    // membuat method ke 1        
    public function hasilBMI(){
        
        $tinggiCM = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggiCM * $tinggiCM);
        return $bmi;

    }

    //membuat methode ke 2
    public function statusBMI(){

        $bmi = $this->hasilBMI();
        if ($bmi < 18.5){
            return "kurus";
        }elseif ($bmi >= 18.5 && $bmi <= 24.9){
            return "Normal";
        }elseif($bmi >= 25.0 && $bmi < 30.0){
            return "Kelebihan Berat Badan";
        }else{
            return "Obesitas";
        }

    }

}




?>