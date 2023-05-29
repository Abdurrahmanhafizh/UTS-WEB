<?php
namespace App;
use Inc\Koneksi as Koneksi;
class Mapel extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_mapel";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function guru()
    {
        $sql = "SELECT * FROM tb_guru";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function simpan()
    {
        $mapel_id_guru = $_POST['mapel_id_guru'];
        $mapel_kode = $_POST['mapel_kode'];
        $mapel_nama = $_POST['mapel_nama'];

        $sql = "INSERT INTO tb_mapel (mapel_id_guru, mapel_kode, mapel_nama) VALUES (:mapel_id_guru, :mapel_kode, :mapel_nama)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":mapel_id_guru", $mapel_id_guru);
        $stmt->bindParam(":mapel_kode", $mapel_kode);
        $stmt->bindParam(":mapel_nama", $mapel_nama);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_mapel WHERE mapel_id=:mapel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":mapel_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $mapel_id_guru = $_POST['mapel_id_guru'];
        $mapel_kode = $_POST['mapel_kode'];
        $mapel_nama = $_POST['mapel_nama'];
        $mapel_id = $_POST['mapel_id'];

        $sql = "UPDATE tb_mapel SET mapel_id_guru=:mapel_id_guru, mapel_kode=:mapel_kode, mapel_nama=:mapel_nama
        WHERE mapel_id=:mapel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":mapel_id_guru", $mapel_id_guru);
        $stmt->bindParam(":mapel_kode", $mapel_kode);
        $stmt->bindParam(":mapel_nama", $mapel_nama);
        $stmt->bindParam(":mapel_id", $mapel_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_mapel WHERE mapel_id=:mapel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":mapel_id", $id);
        $stmt->execute();

    }

}