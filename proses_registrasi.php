<?php

require 'koneksi.php';

$nik = $_POST['nik'];
$password = md5($_POST['password']);

if (empty($nik) || empty($password)) {
    header("location: register.php");
} else {
    mysqli_query($koneksi, "INSERT INTO masyarakat(nik, password) VALUES ('$nik', '$password')");
    header("location: index.php");
}
