<?php
$koneksi = new mysqli('localhost', 'root', '', 'aplikasi_php');

if($koneksi->connect_error){
    die("Koneksi Gagal :".$koneksi->connect_error);
}
?>