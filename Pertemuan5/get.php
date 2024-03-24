<?php
$nama = @$_GET['nama']; //@ agar tidak ada peringatan eror saat key kosong
$usia = @$_GET['usia'];
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?"
?>