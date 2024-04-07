<?php
$targetDirectory = "uploads/"; 

if (isset($_FILES["files"])) {
    $errors = array();
    $extension = array("jpg", "jpeg", "png", "js");

    foreach ($_FILES["files"]["name"] as $key => $fileName) {
        $file_name = $_FILES["files"]["name"][$key];
        $file_size = $_FILES["files"]["size"][$key];
        $file_tmp = $_FILES["files"]["tmp_name"][$key];
        $file_type = $_FILES["files"]["type"][$key];
        @$file_ext = strtolower(end(explode(".", $file_name)));

        if (!in_array($file_ext, $extension)) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, dan JS.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            $targetFile = $targetDirectory . $file_name;
            if (move_uploaded_file($file_tmp, $targetFile)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $file_name.<br>";
            }
        } else {
            echo implode(" ", $errors);
        }
    }
}
?>