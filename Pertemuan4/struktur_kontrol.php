<?php
echo "<h3> Percobaan 4.1 </h3> <br> Nilai numerik : 92 ->";
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90){
    echo "Nilai huruf B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf C";
} elseif ($nilaiNumerik <70){
    echo "Nilai huruf D";
}

echo "<hr>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<h3> Percobaan 4.2 </h3>";
echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km";

echo "<hr>";
echo "<h3>Percobaan 4.3</h3>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i=1; $i <= $jumlahLahan ; $i++) { 
  $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";

echo "<hr>";
echo "<h3>Percobaan 4.4</h3>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adlah $totalSkor";

echo "<hr>";
echo "<h3>Percobaan 4.5</h3>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai $nilai (Lulus) <br>";
}

echo "<hr>";
echo "<h3>Soal Cerita 4.6</h3>";
$nilaii = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
rsort($nilaii);
$nilaiSiswa = array_slice($nilaii, 2, -2);
$panjangArray = count($nilaiSiswa);
$totalNilai = array_sum($nilaiSiswa);
$rata = $totalNilai / $panjangArray;
echo "Jumlah total nilai adalah $totalNilai. Rata rata nilai adalah $rata";

echo "<hr>";
echo "<h3>Soal Cerita 4.7</h3>";
$hargaProduk = 120000;
if ($hargaProduk > 100000){
    $diskon = $hargaProduk * 0.2;
    $totBayar = $hargaProduk - $diskon;
}
echo "Harga produk: $hargaProduk <br>";
echo "Total yang harus dibayar: $totBayar";

echo "<hr>";
echo "<h3>Soal Cerita 4.8</h3>";
$skor = 650;
echo "Total skor pemain: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ";
if ($skor > 500){
    echo "YA";
} elseif ($skor < 500){
    echo "TIDAK";
}
$skor = 450;
echo "<br> Total skor pemain: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ";
if ($skor > 500){
    echo "YA";
} elseif ($skor < 500){
    echo "TIDAK";
}
?>