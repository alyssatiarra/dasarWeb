<?php 
echo "<h3>Soal 5.1</h3>";
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai){
    if ($nilai> 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(', ', $nilaiLulus);

echo "<hr>";
echo "<h3>Soal 5.2</h3>";
$daftarKaryawan = [
    ['Alice', 7], 
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<hr>";
echo "<h3>Soal 5.3</h3>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<hr>";
echo "<h3>Soal 5.4</h3>";
$nilaiMtk = [
    'Matematika'=>[
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ]
];
$daftarNilaiSiswa = [];
$jumlahNilai = 0;
$banyakNilai = 0;
$rata = 0;
$mataKuliahh = 'Matematika';
echo "Daftar nama mahasiswa dalam $mataKuliahh: <br>";
foreach($nilaiMtk[$mataKuliahh] as $nilai){
    $jumlahNilai += $nilai[1];
    $banyakNilai++;
}
$rata = $jumlahNilai / $banyakNilai;
foreach($nilaiMtk[$mataKuliahh] as $nilai){
    if ($nilai[1] > $rata){
        $daftarNilaiSiswa[] = $nilai[0];
    }
}
echo "Rata-rata nilai: $rata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata: " . implode(', ', $daftarNilaiSiswa)
?>