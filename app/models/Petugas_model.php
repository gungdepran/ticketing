<?php

class Petugas_model {
    private $table = 'petugas';
    private $levelTable = 'level';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // insert petugas data to db
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

    // query all petugas data
    public function getAllPetugas()
    {
        $query = "SELECT * FROM {$this->table} WHERE id_level=:level ORDER BY nama_petugas ASC";
        $this->db->query($query);
        $this->db->bind('level', '2');

        return $this->db->resultSet();
    }

    // query petugas and level data based on username and password
    public function getPetugasByUsernameAndPassword($data)
    {
        $query = "SELECT p.id_petugas, p.username, p.nama_petugas, l.id_level, l.nama_level FROM {$this->table} AS p LEFT JOIN {$this->levelTable} AS l ON p.id_level = l.id_level WHERE p.username = :username AND p.password = :password";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        return $this->db->single();
    }
}