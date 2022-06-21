<?php

class Pelanggan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        $query = "INSERT INTO tb_pelanggan VALUES ('', :pel_id, :pel_id_gol, :pel_no, :pel_nama, :pel_alamat, 
        :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, :pel_id_user, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('pel_id', $data['pel_id']);
        $this->db->bind('pel_id_gol', $data['pel_id_gol']);
        $this->db->bind('pel_no', $data['pel_no']);
        $this->db->bind('pel_nama', $data['pel_nama']);
        $this->db->bind('pel_alamat', $data['pel_alamat']);
        $this->db->bind('pel_hp', $data['pel_hp']);
        $this->db->bind('pel_ktp', $data['pel_ktp']);
        $this->db->bind('pel_seri', $data['pel_seri']);
        $this->db->bind('pel_meteran', $data['pel_meteran']);
        $this->db->bind('pel_aktif', $data['pel_aktif']);
        $this->db->bind('pel_id_user', $data['pel_id_user']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM tb_pelanggan ORDER BY pel_id DESC");
        return $this->db->resultSet();
    }

    public function ubah($id)
    {
        $this->db->query("SELECT * FROM tb_pelanggan WHERE pel_id = :pel_id");
        $this->db->bind('pel_id', $id);
        return $this->db->resultSet();
    }

    public function prosesubah($data)
    {
        $query = "UPDATE tb_pelanggan SET pel_id = :pel_id, pel_id_gol = :pel_id_gol, pel_no = :pel_no,
        pel_nama = :pel_nama, pel_alamat = :pel_alamat, pel_hp = :pel_hp, pel_ktp = :pel_ktp, 
        pel_seri = :pel_seri, pel_meteran = :pel_meteran, pel_aktif = :pel_aktif, pel_id_user = :pel_id_user, created_at = :created_at updated_at = :updated_at WHERE pel_id = :pel_id";

        $this->db->query($query);
        $this->db->bind('pel_id', $data['pel_id']);
        $this->db->bind('pel_id_gol', $data['pel_id_gol']);
        $this->db->bind('pel_no', $data['pel_no']);
        $this->db->bind('pel_nama', $data['pel_nama']);
        $this->db->bind('pel_alamat', $data['pel_alamat']);
        $this->db->bind('pel_hp', $data['pel_hp']);
        $this->db->bind('pel_ktp', $data['pel_ktp']);
        $this->db->bind('pel_seri', $data['pel_seri']);
        $this->db->bind('pel_meteran', $data['pel_meteran']);
        $this->db->bind('pel_aktif', $data['pel_aktif']);
        $this->db->bind('pel_id_user', $data['pel_id_user']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->bind('pel_id', $data['pel_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tb_pelanggan WHERE pel_id = :pel_id";

        $this->db->query($query);
        $this->db->bind('pel_id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
