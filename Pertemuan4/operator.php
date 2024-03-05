<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "<h2> Penggunaan Operator </h2>";
echo "Hasil penjumalahan dari $a dan $b adalah $hasilTambah <br>";
echo "Hasil pengurangan dari $a dan $b adalah $hasilKurang <br>";
echo "Hasil kali dari $a dan $b adalah $hasilKali <br>";
echo "Hasil bagi dari $a dan $b adalah $hasilBagi <br>";
echo "Sisa bagi dari $a dan $b adalah $sisaBagi <br>";
echo "Hasil pangkat dari $a dan $b adalah $pangkat";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<hr>";
echo "<h2> Operator Pembanding </h2>";
echo "a == b: $hasilSama <br>";
echo "a != b: $hasilTidakSama <br>";
echo "a < b: $hasilLebihKecil <br>";
echo "a > b: $hasilLebihBesar <br>";
echo "a <= b: $hasilLebihKecilSama <br>";
echo "a >= b: $hasilLebihBesarSama";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA =!$a;
$hasilNotB = !$b;

echo "<hr>";
echo "<h2> Hasil Operator Logika </h2>";
echo "Hasil AND dari $a dan $b adalah $hasilAnd <br>";
echo "Hasil OR dari $a dan $b adalah $hasilOr <br>";
echo "Hasil NOT $a adalah $hasilNotA <br>";
echo "Hasil NOT $b adalah $hasilNotB";

echo "<hr>";
echo "<h2> Hasil Operator Penugasan 3.4</h2>";
echo "Penjumlahan (+=) dari $a dan $b adalah ";
$jumlah = $a += $b;
echo "$jumlah<br>";
echo "Pengurangan (-=) dari $a dan $b adalah";
$kurang = $a -= $b;
echo "$kurang<br>";
echo "Perkalian (*=) dari $a dan $b adalah";
$kali = $a *= $b;
echo "$kali<br>";
echo "Pembagian (/=) dari $a dan $b adalah";
$bagi = $a /= $b;
echo "$bagi<br>";
echo "Sisa bagi (%=) dari $a dan $b adalah";
$sisa = $a %= $b;
echo "$sisa";

echo "<hr>";
echo "<h2> Hasil Operator Identik </h2>";
$a = 10;
$hasilIdentik = $a === $b;
echo "Identik $a dan $b adalah $hasilIdentik <br>";
$hasilTidakIdentik = $a !== $b;
echo "Tidak Identik $a dan $b adalah $hasilTidakIdentik <br>";

echo "<hr>";
echo "<h2> Soal 3.6 </h2>";
$kursi = 45;
$ditempati = 28;
$kosong = $kursi - $ditempati;
$persen = ( $kosong * 100 )/ $kursi;
echo "Kursi yang tersedia $kursi buah, dan ditempati sebanyak $ditempati buah. Kursi yang masih tersisa ada $kosong buah. Jadi ada " . number_format($persen, 2) . " kursi kosong yang ada dimalam itu";
?>