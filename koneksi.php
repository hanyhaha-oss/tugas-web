<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "hany";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi) {
    die("Tidak bisa terkoneksike database" . mysqli_connect_error());
}
else {
    echo "koneksi berhasil";
}