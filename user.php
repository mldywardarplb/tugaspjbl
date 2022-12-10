<?php
session_start();
if ($_SESSION['level']=="admin" || $_SESSION['level']==""){
    echo "<script>alert('Akses Ditolak');window.location='page/login.php';</script>";
}   
include "page/koneksi.php";
$query="SELECT * FROM tb_register WHERE username='$_SESSION[username]'";
$hasil=mysqli_query($koneksi, $query);
$data=mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css? <?php echo time();?>">>
    <title>Document</title>
</head>
<body>

<header>
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">JavaCokeey</a>

<nav class="navbar">
    <a href="user.php?page=coba">Home</a>
    <a href="user.php?page=addrecipe">Add Recipe</a>
    <a href="user.php?page=logout">Log out</a>
    <a> <?php echo $data['username'];?> </a>

</nav>
</header>


<div class="contaier">
    <?php
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            switch($page) {
                case 'coba':
                    include "page/coba.php";
                    break;
                case 'addrecipe':
                    include "page/addrecipe.php";
                    break;
                case 'index':
                    include "page/logout.php";
                    break;
                case 'register':
                    include "page/register.php";
                    break;
                default: 
                    echo "halaman tidak tersedia";
            }
        }else{
            include "page/coba.php";
        }
    ?>
</div>
<div class="footer"></div>
</body>
</html>