<?php

$kelas = new App\Kelas();
$rows = $kelas->mapel();
?>
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
<div class="judul-kelas-input">Input Data Kelas</div>
<form action="kelas_proses.php" method="post">
<div class="input-data-kelas">
    <p>Nama Kelas</p>
    <input type="text" class="nama-input-kelas" name="kelas_nama">
    <p>Jumlah Santri</p>
    <input type="text" class="jumlah-input-kelas" name="kelas_jumlah">
    <p>Nama Mata Pelajaran</p>
    <select id="" class="nama-mapel-input-kelas" name="kelas_id_mapel">
    <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['mapel_id']; ?>">
                    <?php echo $row['mapel_nama']; ?>
                        <?php } ?>
                    </option>
    </select>
    <input type="submit" value="Simpan" class="btn-simpan-kelas" name="btn_simpan">
</div>
</form>
</body>
</html>