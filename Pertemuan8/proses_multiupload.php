<?php
// $targetDirectory = "documents/";
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]){
    $totalFIles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFIles; $i++){
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtentions = array("jpg", "jpeg", "png", "gif");

        if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){
            echo "File $fileName berhasil diunggah<br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }

        // if(in_array($fileType, $allowedExtentions)){
        //     if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){
        //         echo "File $fileName berhasil diunggah <br>";
        //     } else {
        //         echo "File yang diupload tidak sesuai format";
        //     }
        // }
    }
} else {
    echo "Tidak ada file yang unggah";
}
?>