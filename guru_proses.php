<?php
require_once "inc/Koneksi.php";
require_once "app/GURU.php";
$guru = new App\Guru();

if (isset($_POST['btn_simpan'])) {
    $guru->simpan();
    header("location:home.php?hal=guru_tampil");
}

if (isset($_POST['btn_update'])) {
    $guru->update();
    header("location:home.php?hal=guru_tampil");
}