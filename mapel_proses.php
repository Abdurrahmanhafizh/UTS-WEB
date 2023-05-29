<?php
require_once "inc/Koneksi.php";
require_once "app/MAPEL.php";

$mapel = new App\Mapel();

if (isset($_POST['btn_simpan'])) {
    $mapel->simpan();
    header("location:home.php?hal=mapel_tampil");
}

if (isset($_POST['btn_update'])) {
    $mapel->update();
    header("location:home.php?hal=mapel_tampil");
}