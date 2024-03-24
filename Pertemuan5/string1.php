<?php
$loremIpsum = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas magnam explicabo eum culpa possimus delectus corporis. Reiciendis harum atque ipsum exercitationem! Doloribus corporis deleniti reiciendis quos et ea sit. Libero.";
echo "<p>$loremIpsum</p>";
// menghitung jumlah karakter
echo "Panjang karakter:  " . strlen($loremIpsum). "<br>";
// menghitung jumlah kata
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>";
// buat jadi kapital semua
echo "<p>" . strtoupper($loremIpsum). "</p>";
// buat jadi huruf kecil semua
echo "<p>" . strtolower($loremIpsum). "</p>";
?>