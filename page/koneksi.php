<?php
$host ="localhost";
$user ="root";
$pass = "";
$db = "db_javacookey";
$koneksi = mysqli_connect('localhost', 'root', '', 'db_javacookey');
$db_koneksi = mysqli_select_db($koneksi, $db);
?>