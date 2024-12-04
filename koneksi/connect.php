<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "blog_kelasreguler";

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error){
    die("koneksi gagal:". $koneksi->connect_error);
}