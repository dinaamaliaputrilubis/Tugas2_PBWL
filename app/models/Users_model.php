<?php

class Users_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        $query = "INSERT INTO tb_users VALUES ('', :user_email, :user_password, :user_nama, :user_alamat, 
        :user_hp, :user_pos, :user_role, :user_aktif, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('user_email', $data['user_email']);
        $this->db->bind('user_password', $data['user_password']);
        $this->db->bind('user_nama', $data['user_nama']);
        $this->db->bind('user_alamat', $data['user_alamat']);
        $this->db->bind('user_hp', $data['user_hp']);
        $this->db->bind('user_role', $data['user_role']);
        $this->db->bind('user_aktif', $data['user_aktif']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM tb_users ORDER BY user_id DESC");
        return $this->db->resultSet();
    }

    public function ubah($id)
    {
        $this->db->query("SELECT * FROM tb_users WHERE user_id = :user_id");
        $this->db->bind('user_id', $id);
        return $this->db->resultSet();
    }

    public function prosesubah($data)
    {
        $query = "UPDATE tb_users SET user_email = :user_email, user_password = :user_password, user_nama = :user_nama,
        user_alamat = :user_alamat, user_hp = :user_hp, user_pos = :user_pos, user_role = :user_role, 
        user_aktif = :user_aktif created_at = :created_at updated_at = :updated_at WHERE gol_id = :gol_id";

        $this->db->query($query);
        $this->db->bind('user_email', $data['user_email']);
        $this->db->bind('user_password', $data['user_password']);
        $this->db->bind('user_nama', $data['user_nama']);
        $this->db->bind('user_alamat', $data['user_alamat']);
        $this->db->bind('user_hp', $data['user_hp']);
        $this->db->bind('user_pos', $data['user_pos']);
        $this->db->bind('user_role', $data['user_role']);
        $this->db->bind('user_aktif', $data['user_aktif']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->bind('user_id', $data['user_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tb_users WHERE user_id = :user_id";

        $this->db->query($query);
        $this->db->bind('user_id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
