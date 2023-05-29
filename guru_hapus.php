<?php
$id = $_GET['id'];
$guru = new App\Guru();
$rows = $guru->delete($id);

?>
<style>
    .hapus{
    width: 73%;
    height: 50px;
    background-color: #006A66;
    color: #f1c40f;
    text-align: center;
    border-radius: 10px;
    padding-top: 20px;
    float: left;
    margin-top: -540px;
    margin-left: 300px;
    font-weight: bold;
    font-size:25px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
</style>

<div class="hapus">Data Berhasil Dihapus !</div>