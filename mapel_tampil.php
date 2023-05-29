<?php

$mapel = new App\Mapel;
$rows = $mapel->tampil();

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
<div class="judul-mapel-tampil">Data Mata pelajaran</div>
    <form action="home.php?hal=mapel_input" method="post">
        <input type="submit" value="Tambah" name="btn-tambah-mapel" class="btn-tambah-mapel">
    </form>
    <div class="table-mapel">
        <table>
            <tr>
                <th width="1%">No</th>
                <th width="3%">Kode Pelajaran</th>
                <th width="5%">Nama Mapel</th>
                <th width="7%">Id Guru</th>
                <th width="3%">Opsi</th>
            </tr>
    <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo "$no";$no++ ?></td>
                <td><?php echo $row['mapel_kode']; ?></td>
                <td><?php echo $row['mapel_nama']; ?></td>
                <td> <?php echo $row['mapel_id_guru']; ?></td>
                <td>
                <a href="home.php?hal=mapel_edit&id=<?php echo $row['mapel_id']; ?>" class="btn-edit-mapel">Edit</a>
                <a href="home.php?hal=mapel_hapus&id=<?php echo $row['mapel_id']; ?>" class="btn-hapus-mapel">Hapus</a>
                </td>
            </tr>
    <?php } ?>
        </table>
    </div>
</body>
</html>