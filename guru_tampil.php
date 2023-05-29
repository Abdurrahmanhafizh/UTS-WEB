<?php

$guru = new App\Guru;
$rows = $guru->tampil();

$no=1;
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
<div class="judul-guru-tampil">Data Guru</div>
    <form action="home.php?hal=guru_input" method="post">
        <input type="submit" value="Tambah" name="btn-tambah-guru" class="btn-tambah-guru">
    </form>
    <div class="table-guru">
        <table>
            <tr>
                <th width="1%">No</th>
                <th width="1%">Nip</th>
                <th width="5%">Nama</th>
                <th width="2%">Jenis Kelamin</th>
                <th width="3%">Tamatan</th>
                <th width="3%">Opsi</th>
            </tr>
    <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo "$no";$no++ ?></td>
                <td><?php echo $row['guru_nip']; ?></td>
                <td><?php echo $row['guru_nama']; ?></td>
                <td><?php echo $row['guru_jk']; ?></td>
                <td><?php echo $row['guru_tamatan']; ?></td>
                <td>
                    <a href="home.php?hal=guru_edit&id=<?php echo $row['guru_id']; ?>" class="btn-edit-guru">Edit</a>
                    <a href="home.php?hal=guru_hapus&id=<?php echo $row['guru_id']; ?>" class="btn-hapus-guru">Hapus</a>
                </td>
            </tr>
    <?php } ?>
        </table>
    </div>
</body>
</html>