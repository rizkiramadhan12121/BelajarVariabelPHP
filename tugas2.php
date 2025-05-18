<?php

$waktu = 650;
echo "Jam masuk sekolah 06.30 (Anda datang jam ) ";

if($waktu == 630){
    echo "Anda Tepat waktu";
} else if($waktu <= 630) {
    echo "Anda Terlalu pagi";
} else{
    echo "Anda Tidak Masuk Sekolah";
};

echo "<br> <br>";

//=====================================================================================================

// $nilai = 40;
// echo "KKM adalah 70, Nilai anda adalah  : ";

// if($nilai >= 71){
//     echo "Anda diatas KKM";
// } else if($nilai == 70) {
//     echo "Anda Pas kkm";
// } else{ 
//     echo "anda harus melakukan remdial";
// };

// echo "<br> <br>";

// //=====================================================================================================

// $baterai = 18;
// echo "Batas baterai yang harus di charge adalah 15%, Baterai anda  : ";

// if($baterai == 15){
//     echo "Baterai Tidak harus di charge";
// } else if($baterai <= 15) {
//     echo "Baterai Anda Harus di Charge";
// } else{
//     echo "Baterai anda full";
// };  
// echo "<br> <br>";
// //=====================================================================================================

// $harga= 20000;
// echo " Harga  ";

// if($harga == 25000){
//     echo " standard";
// } else if($harga <= 25000) {
//     echo "murah";
// } else{
//     echo "Mahal";
// }

// echo "<br> <br>";
//=====================================================================================================
// $tinggi= 140;
// echo " Tinggi badan anda  ";

// if($tinggi  >= 170){
//     echo " tinggi";
// } else if($tinggi <= 150) {
//     echo "pendek";
// } else{
//     echo "Ideal";
// }
?>