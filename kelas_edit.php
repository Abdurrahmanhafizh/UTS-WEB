<?php

$id = $_GET['id'];
$kelas = new App\Kelas();
$row = $kelas->edit($id);
?>
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
<div class="judul-kelas-edit">Edit Data Kelas</div>
<form action="kelas_proses.php" method="post">
<div class="edit-data-kelas">
<input type="hidden" name="kelas_id" value="<?php echo $row['kelas_id']; ?>">
    <p>Nama Kelas</p>
    <input type="text" name="kelas_nama" class="nama-edit-kelas" value="<?php echo $row['kelas_nama']; ?>">
    <p>Jumlah Santri</p>
    <input type="text" name="kelas_jumlah" class="jumlah-edit-kelas" value="<?php echo $row['kelas_jumlah']; ?>">
    <p>Nama Mata Pelajaran</p>
    <select name="kelas_id_mapel" class="nama-mapel-edit-kelas">
    <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['mapel_id']; ?>">
                        <?php echo $row['mapel_nama']; ?>
                        <?php } ?>
                    </option>
    </select>
    <input type="submit" value="Simpan" class="btn-update-kelas" name="btn_update">
</div>
</form>
</body>
</html>