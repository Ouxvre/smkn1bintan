<?php 

$servername = "localhost";
$name = "root";
$password ="";
$database = "smkn1";

$conn = new mysqli ($servername,$name,$password,$database);

if ($conn->connect_error) {
    die ("koneksi gagal :" . $conn->connect_error);
}

date_default_timezone_set("Asia/Jakarta");
?>