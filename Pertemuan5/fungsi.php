<?php

// FUNGSI
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan nama saya ".$nama." <br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan("Hamdana", "Hallo");
echo "<hr>";
$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);

// for ($i = 0; $i < 2; $i++){
//     echo perkenalan();
// }

// FUNGSI YANG MENGEMBALIKAN NILAI 
function hitungUmur($th_lahir, $th_sekarang){
    $umur = $th_sekarang - $th_lahir;
    return $umur;
}
function perkenalann ($nama, $salam="Assalamualaikum"){
    echo $salam. ",";
    echo "Perkenalkan, nama saya ".$nama." <br>";
}
// echo "<br> <hr>";
// echo "Umur saya adalah ". hitungUmur(1988, 2023) ."tahun"
echo "<br>";
echo "Saya berusia ". hitungUmur(1988, 2023) ." tahun <br>";
echo "Senang berkenalan dengan anda<br>";
perkenalan("Elok");
?>