<?php

namespace App;
use Inc\Koneksi as Koneksi;
class Guru extends Koneksi {

    public function tampil()
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
        $nip_guru = $_POST['guru_nip'];
        $nama_guru = $_POST['guru_nama'];
        $jk_guru = $_POST['guru_jk'];
        $tamatan_guru = $_POST['guru_tamatan'];

        $sql = "INSERT INTO tb_guru (guru_nip, guru_nama, guru_jk, guru_tamatan) VALUES (:guru_nip, :guru_nama, :guru_jk, :guru_tamatan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":guru_nip", $nip_guru);
        $stmt->bindParam(":guru_nama", $nama_guru);
        $stmt->bindParam(":guru_jk", $jk_guru);
        $stmt->bindParam(":guru_tamatan", $tamatan_guru);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_guru WHERE guru_id=:guru_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":guru_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $guru_nip = $_POST['guru_nip'];
        $guru_nama = $_POST['guru_nama'];
        $guru_jk = $_POST['guru_jk'];
        $guru_tamatan = $_POST['guru_tamatan'];
        $guru_id = $_POST['guru_id'];

        $sql = "UPDATE tb_guru SET guru_nip=:guru_nip, guru_nama=:guru_nama, guru_jk=:guru_jk, guru_tamatan=:guru_tamatan  WHERE guru_id=:guru_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":guru_nip", $guru_nip);
        $stmt->bindParam(":guru_nama", $guru_nama);
        $stmt->bindParam(":guru_jk", $guru_jk);
        $stmt->bindParam(":guru_tamatan", $guru_tamatan);
        $stmt->bindParam(":guru_id", $guru_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_guru WHERE guru_id=:guru_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":guru_id", $id);
        $stmt->execute();

    }

}