<?php
include('koneksi.php');
$data=mysqli_query($koneksi,'select * from tb_resep');
echo '<pre>';
print_r($data);
echo '</pre>';
?>
<div class="halaman">

<link rel="stylesheet" href="../css/style.css">

<section class="home" id="home">

<div class="content">
    <h3>Javanese traditional Food Reciepe</h3>
    <span> Java Culinary </span>
    <p>Javanese Food have good taste, so let's cook javanese food!</p>
    <a href="#menu" class="btn">Menu</a>
</div>
</section>
<section class="menu" id="menu">

    <h1 class="heading"> Our Menu</h1>

    <div class="box-container">

    <?php
    while($resep =mysqli_fetch_array($data)) {
        ?>
        
        <div class="box">
            <img src="imagecrud/<?= $resep['gambar']?>" alt="" class="picture">
            <h3>
                <?= $resep['judul']?>
            </h3>
            <a href="resep.php?id_resep=<?=$resep['id']?>" class="botton">read more</a>
        </div>
        <?php
    }
    ?>
    </div>
    </div>
</section>
</div>