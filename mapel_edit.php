<?php
$id = $_GET['id'];
$mapel = new App\Mapel();
$row = $mapel->edit($id);
?>
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
<div class="judul-mapel-edit">Edit Data Mapel</div>
<form action="mapel_proses.php" method="post">
    <div class="edit-data-mapel">
    <input type="hidden" name="mapel_id" value="<?php echo $row['mapel_id']; ?>">
        <p>Kode Pelajaran</p>
        <input type="text" class="kode-edit-mapel" name="mapel_kode" value="<?php echo $row['mapel_kode']; ?>">
        <p>Nama Mata Pelajaran</p>
        <input type="text" class="nama-edit-mapel" name="mapel_nama" value="<?php echo $row['mapel_nama']; ?>">
        <p>Nama Guru</p>
        <select name="mapel_id_guru" class="nama-guru-edit-mapel">
        <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['guru_id']; ?>">
                        <?php echo $row['guru_nama']; ?>
                        <?php } ?>
                    </option>
        </select>
        <input type="submit" value="Edit" class="btn-update-mapel" name="btn_update">
    </div>
</form>
</body>
</html>