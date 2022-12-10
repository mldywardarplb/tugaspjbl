<div class="halaman">
<link rel="stylesheet" href="../css/addrecipe.css? <?php echo time();?>">>


<div class="background">
<form method ='POST' action='proses_addrecipe.php' enctype="multipart/form-data">
<div class="foto">
    <h2 class="subtext">Foto :</h2>
    <input type='file' class="addfoto" name='gambar'></input>
</div> 

<div class="judul">
    <h2 class="subtext1">Judul :</h2>
    <textarea name="judul" class="judul2"></textarea>
</div>

<div class="bahan">
    <h2 class="subtext2">Bahan - Bahan :</h2>
    <textarea name="bahan_bahan" class="judul3"></textarea>
</div>

<div class="tutorial">
    <h2 class="subtext3">Langkah Pembuatan  :</h2>
    <textarea name="cara_pembuatan" class="judul4"></textarea>
</div>
</div>
<div class="upload">
    <button class="button" type="submit" name="submit">upload</button>
</div>
</form>
</div>
