<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<aside>
<div class="logo-home">
    <img class="img-home" src="assets/img/logo.png" alt="">
    <h5 class="h5-home">Pesantren Amrullah <br> Akbar Rajasyah</h5>
    <h6 class="h6-home">TK,SD,MTS,MAS,Tahfidz</h6>
</div>
    <ul>
        <li class="li"><a href="home.php">Home</a></li>
        <li class="li"><a href="home.php?hal=guru_tampil">Data Guru</a></li>
        <li class="li"><a href="home.php?hal=mapel_tampil">Data Mapel</a></li>
        <li class="li"><a href="home.php?hal=kelas_tampil">Data Kelas</a></li>
        <li class="li"><a href="home.php?hal=about">About</a></li>
        <li class="logout"><a class="a-logout" href="index.php">Log Out</a></li>
    </ul>
</aside>
<section>
    <?php 
                    require_once "vendor/autoload.php";
                    require_once "inc/koneksi.php";
        if (isset($_GET['hal'])){
            require $_GET['hal'].".php";
        } else {
            require "main.php";
        }
    ?>
</section>
<div class="footer-home">
Copyright &copy; Muhammad Abdurrahman Hafizh 2023
</div>
</body>
</html>