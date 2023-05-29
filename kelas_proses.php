<?php
require_once "inc/Koneksi.php";
require_once "app/KELAS.php";

$kelas = new App\Kelas();
if (isset($_POST['btn_simpan'])) {
    $kelas->simpan();
    header("location:home.php?hal=kelas_tampil");
}
if (isset($_POST['btn_update'])) {
    $kelas->update();
    header("location:home.php?hal=kelas_tampil");
}