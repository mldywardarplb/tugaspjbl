<?php 
include 'koneksi.php';
$path='../imagecrud';
if (isset($_POST['submit'])){
    $gambar=$_FILES['gambar'];
    $namagambar=$gambar['name'];
    $judul=$_POST['judul'];
    $bahan_bahan=$_POST['bahan_bahan'];
    $cara_pembuatan=$_POST['cara_pembuatan'];
    $query=mysqli_query($koneksi,"insert into tb_resep values(null,'$namagambar','$judul','$bahan_bahan','$cara_pembuatan')");
    print_r($query);
    print_r(mysqli_error($koneksi));
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], "$path/$namagambar")){
        echo 'file berhasil dipindah';
    }else{
        echo 'file gagal dipindah';
    }
}
?>