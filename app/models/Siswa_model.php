<?php

class Siswa_model
{
    private $table = "daftar_siswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
}
?>