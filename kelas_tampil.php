<?php
$kelas = new App\Kelas;
$rows = $kelas->tampil();

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
<div class="judul-kelas-tampil">Data Kelas</div>
    <form action="home.php?hal=kelas_input" method="post">
        <input type="submit" value="Tambah" name="btn-tambah-kelas" class="btn-tambah-kelas">
    </form>
    <div class="table-kelas">
        <table>
            <tr>
                <th width="1%">No</th>
                <th width="9%">Nama Kelas</th>
                <th width="3%">Jumlah Santri</th>
                <th width="3%">Id Mapel</th>
                <th width="3%">Opsi</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo "$no";$no++ ?></td>
                <td><?php echo $row['kelas_nama']; ?></td>
                <td><?php echo $row['kelas_jumlah']; ?></td>
                <td><?php echo $row['kelas_id_mapel']; ?></td>
                <td>
                <a href="home.php?hal=kelas_edit&id=<?php echo $row['kelas_id']; ?>" class="btn-edit-kelas">Edit</a>
                <a href="home.php?hal=kelas_hapus&id=<?php echo $row['kelas_id']; ?>" class="btn-hapus-kelas">Hapus</a>
                </td>
            </tr>
    <?php } ?>

        </table>
    </div>
</body>
</html>