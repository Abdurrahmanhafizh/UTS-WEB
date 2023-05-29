<?php

$id = $_GET['id'];
$guru = new App\Guru();
$row = $guru->edit($id);
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
    <div class="judul-guru-edit">Edit Data Guru</div>
    <form action="guru_proses.php" method="post">
    <div class="edit-data-guru">
    <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']; ?>">
        <p>Nip</p>
        <input type="text" name="guru_nip" class="nip-edit-guru" value="<?php echo $row['guru_nip']; ?>">
        <p>Nama</p>
        <input type="text" name="guru_nama" class="nama-edit-guru" value="<?php echo $row['guru_nama']; ?>">
        <p>Jenis Kelamin</p>
        <input type="text" name="guru_jk" class="jk-edit-guru" value="<?php echo $row['guru_jk']; ?>">
        <p>Tamatan</p>
        <input type="text" name="guru_tamatan" class="tamatan-edit-guru" value="<?php echo $row['guru_tamatan']; ?>">
    <input type="submit" value="Edit" name="btn_update" class="btn-update-guru">
    </div>
    </form>
</body>
</html>