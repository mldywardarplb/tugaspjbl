<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

<header>
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">JavaCokeey</a>

<nav class="navbar">
    <a href="index.php?page=coba">Home</a>
    <a href="index.php?page=login">Log in</a>
    <a href="index.php?page=register">Register</a>

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
                case 'login':
                    include "page/login1.php";
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
</body>
</html>