CREATE TABLE tb_guru (
    guru_id INT(11) NOT NULL AUTO_INCREMENT,
    guru_nip VARCHAR(100) NOT NULL,
    guru_nama VARCHAR(100) NOT NULL,
    guru_jk VARCHAR(25),
    guru_tamatan VARCHAR(100),
    PRIMARY KEY(guru_id)
);

CREATE TABLE tb_mapel (
    mapel_id INT(11) NOT NULL AUTO_INCREMENT,
    mapel_id_guru INT(11),
    mapel_kode VARCHAR(100) NOT NULL,
    mapel_nama VARCHAR(100) NOT NULL,
    PRIMARY KEY(mapel_id),
    FOREIGN KEY(mapel_id_guru) REFERENCES tb_guru (guru_id)
);

CREATE TABLE tb_kelas (
    kelas_id INT(11) NOT NULL AUTO_INCREMENT,
    kelas_id_mapel INT(11),
    kelas_nama VARCHAR(100) NOT NULL,
    kelas_jumlah VARCHAR(50),
    PRIMARY KEY(kelas_id),
    FOREIGN KEY(kelas_id_mapel) REFERENCES tb_mapel (mapel_id)
);