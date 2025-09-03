<?php 

$servername = "localhost";
$name = "root";
$password ="";
$database = "smkn";

$conn = new mysqli ($servername,$name,$password,$database);

if ($conn->connect_error) {
    die ("koneksi gagal :" . $conn->connect_error);
}
?>