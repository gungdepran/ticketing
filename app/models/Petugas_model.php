<?php

class Petugas_model {
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addPetugas($data)
    {
        $query = "INSERT INTO {$this->table} VALUES(NULL, :username, :password, :nama_petugas, :id_level)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('id_level', $data['id_level']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}