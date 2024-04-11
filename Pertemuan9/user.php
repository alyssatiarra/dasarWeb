<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

$conn = mysqli_connect($servername, $username, $password, $database);

// $query = "CREATE TABLE user(
//     id int AUTO_INCREMENT primary key,
//     username varchar(50) not null,
//     password varchar(50) not null)";

// insert data
$queryInsert = "INSERT INTO user (id, username, password) VALUES (1, 'admin', MD5('123'))";

if(mysqli_query($conn, $queryInsert)){
    echo "Data berhasil ditambah";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>