<?php
include 'page/koneksi.php';
if(isset($_GET['id_resep'])){
    $id_resep=$_GET['id_resep'];
    $data=mysqli_query($koneksi,"select * from tb_resep where id ='$id_resep'");
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    while($resep =mysqli_fetch_array($data))
    {
        $gambar=$resep['gambar'];
        $judul=$resep['judul'];
        $bahan=$resep['bahan'];
        $cara_pembuatan=$resep['cara_pembuatan'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>resep <?=$judul?></title>
    <link rel="stylesheet" href="resep.css? <?php echo time();?>">>
</head>
<body>
<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">JavaCokeey</a>

<nav class="navbar">
    <a href="index.php?page=coba">Home</a>
    <a href="index.php?page=addrecipe">Add Recipe</a>
    <a href="index.php?page=login">Log in</a>
    <a href="index.php?page=register">Register</a>

</nav>
</header>

<div class="header">
    <img src="imagecrud/<?=$gambar?>" class="gambar">
    <h2 class="judul"><?=$judul?></h2>
    <a href="https://youtu.be/fBvbL6lSm74" class="btn">Show Video</a>
</div>

<div class="resep-bahan">
    <p class="bahan">Bahan - Bahan </p>
    <p class="isi"><?=$bahan?></p>
</div>

<div class="resep-resep">
    <p class="judul-resep">Langakah Pembuata</p>
    <p class="resep"><?=$cara_pembuatan?></p>
</div>
</div>
<div class="footer">
    <p class="text-footer">JavaCokeey</p>
</div>
</section>
</body>
</html>