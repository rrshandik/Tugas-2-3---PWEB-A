<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


$base_url = "/MVC_Ramadhan%20Surya%20H_222410102070";
