<?php

class Penumpang_model {
    private $table = 'penumpang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addPenumpang($data)
    {
        $query = "INSERT INTO {$this->table} VALUES(NULL, :username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telefone)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_penumpang', $data['nama_penumpang']);
        $this->db->bind('alamat_penumpang', $data['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('telefone', $data['telefone']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPenumpangByKey($key, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE :key = :value";
        $this->db->query($query);
        $this->db->bind('key', $key);
        $this->db->bind('value', $value);

        return $this->db->resultSet();
    }

    public function getPenumpangByUsername($username)
    {
        $query = "SELECT * FROM {$this->table} WHERE username=:username";
        $this->db->query($query);
        $this->db->bind('username', $username);

        return $this->db->single();
    }

    public function getPenumpangByUsernameAndPassword($data)
    {
        $query = "SELECT * FROM {$this->table} WHERE username=:username AND password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        return $this->db->single();
    }
}