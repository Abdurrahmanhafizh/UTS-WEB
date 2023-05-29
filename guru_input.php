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
<div class="judul-guru-input">Input Data Guru</div>
<form action="guru_proses.php" method="post">
    <div class="input-data-guru">
    <p>Nip</p>
    <input type="text" class="nip-input-guru" name="guru_nip">
    <p>Nama</p>
    <input type="text" class="nama-input-guru" name="guru_nama">
    <p>Jenis Kelamin</p>
    <input type="text" class="jk-input-guru" name="guru_jk">
    <p>Tamatan</p>
    <input type="text" class="tamatan-input-guru" name="guru_tamatan">
    <input type="submit" value="Simpan" name="btn_simpan" class="btn-simpan-guru">
    </div>
</form>
</body>
</html>