<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "formuir";

$conn = new mysqli($hostname,$username,$password,$database);

if ($conn -> connect_error)  {
    die("Database tidak terkoneksi". $conn -> connect_error);
}
?>