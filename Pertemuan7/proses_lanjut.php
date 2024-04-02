<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $selectBuah = $_POST['buah'];

    if (isset ($_POST['warna'])){
        $selectWarna = $_POST['warna'];
    } else {
        $selectWarna = [];
    }

    $selectJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . $selectBuah . "<br>";

    if (!empty($selectWarna)){
        echo "Warna favorite anda: " . implode(", " , $selectWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorite . <br>";
    }
    echo "Jenis kelamin anda: " . $selectJenisKelamin;
}
?>