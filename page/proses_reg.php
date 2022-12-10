<?php

$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST ['password'];
$level = "user";

include "koneksi.php";
    $pengacak = "p3ng4c4k";
    $passmd = md5($pengacak . md5($password1));
    $query = "INSERT INTO tb_register VALUES(null,'$email', '$username', '$passmd', '$level')";
    $hasil = mysqli_query($koneksi, $query);
    print_r(mysqli_error($koneksi));

    if ($hasil) { 
        echo "<script>alert('user baru, berhasil ditambhakan!');window.location='login.php';</script>";
    }else{
        echo "<script>alert('proses daftar gagal!');window.location=register.php';</script>";
    }
?>