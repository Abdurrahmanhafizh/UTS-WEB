<?php
$mapel = new App\Mapel();
$rows = $mapel->guru();
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
<div class="judul-mapel-input">Input Data Mapel</div>
    <form action="mapel_proses.php" method="post">
        <div class="input-data-mapel">
            <p>Kode Pelajaran</p>
            <input type="text" class="kode-input-mapel" name="mapel_kode">
            <p>Nama Mata Pelajaran</p>
            <input type="text" class="nama-input-mapel" name="mapel_nama">
            <p>Nama Guru</p>
            <select name="mapel_id_guru" class="nama-guru-input-mapel">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['guru_id']; ?>">
                    <?php echo $row['guru_nama']; ?>
                        <?php } ?>
                    </option>
            </select>
            <input type="submit" value="Simpan" class="btn-simpan-mapel" name="btn_simpan">
        </div>
    </form>
</body>
</html>