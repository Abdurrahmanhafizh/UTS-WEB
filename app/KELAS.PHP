<?php
namespace App;
use Inc\Koneksi as Koneksi;
class Kelas extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kelas";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function mapel()
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
    public function simpan()
    {
        $kelas_id_mapel = $_POST['kelas_id_mapel'];
        $kelas_nama = $_POST['kelas_nama'];
        $kelas_jumlah = $_POST['kelas_jumlah'];

        $sql = "INSERT INTO tb_kelas (kelas_id_mapel, kelas_nama, kelas_jumlah) VALUES (:kelas_id_mapel, :kelas_nama, :kelas_jumlah)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kelas_id_mapel", $kelas_id_mapel);
        $stmt->bindParam(":kelas_nama", $kelas_nama);
        $stmt->bindParam(":kelas_jumlah", $kelas_jumlah);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kelas WHERE kelas_id=:kelas_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kelas_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }
    public function update()
    {
        $kelas_id_mapel = $_POST['kelas_id_mapel'];
        $kelas_nama = $_POST['kelas_nama'];
        $kelas_jumlah = $_POST['kelas_jumlah'];
        $kelas_id = $_POST['kelas_id'];

        $sql = "UPDATE tb_kelas SET kelas_id_mapel=:kelas_id_mapel, kelas_nama=:kelas_nama, kelas_jumlah=:kelas_jumlah
        WHERE kelas_id=:kelas_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kelas_id_mapel", $kelas_id_mapel);
        $stmt->bindParam(":kelas_nama", $kelas_nama);
        $stmt->bindParam(":kelas_jumlah", $kelas_jumlah);
        $stmt->bindParam(":kelas_id", $kelas_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kelas WHERE kelas_id=:kelas_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kelas_id", $id);
        $stmt->execute();

    }

}