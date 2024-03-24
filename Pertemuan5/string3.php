<?php
$pesan = "Saya arek malang";
// ubah variabel $pesan menjadi array dg explode
$pesanPerKata = explode(" ", $pesan);
// ubah tiap kata dalam array jadi kebalikan
$pesanPerKata = array_map(fn($pesan) => strrev( ($pesan)), $pesanPerKata);
// gabungkan kembali array jadi string 
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
// echo strrev($pesan). "<br>";
?>