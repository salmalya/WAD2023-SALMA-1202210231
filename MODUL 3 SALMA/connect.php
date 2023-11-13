<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "modul3_wad";
$dbpass = "";
// 

$connect = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

 if(!$connect){
     die("Koneksi Gagal: [pesan kesalahan koeksi]" . mysqli_connect_error());
 }
// 
?>