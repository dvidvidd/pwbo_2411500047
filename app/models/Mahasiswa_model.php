<?php
 
class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Dono",
    //         "nim" => "2411500088",
    //         "email" => "dono@atmaluhur.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],

    //     [
    //         "nama" => "Erick",
    //         "nim" => "2411500067",
    //         "email" => "erick@atmaluhur.ac.id",
    //         "jurusan" => "Sistem Informasi"
    //     ],
        
    //     [
    //         "nama" => "fram",
    //         "nim" => "2411500027",
    //         "email" => "fram@atmaluhur.ac.id",
    //         "jurusan" => "Sistem Informasi"
    //     ]
    // ];
    private $table = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    public function getAllMahasiswaById($id)    
    {
        $this->db->query('SELECT * FROM mahasiswa WHERE id = :id'); // atau kolom lain: nim, id_mhs, dll.
        $this->db->bind('id', $id); // biarkan PDO yang handle quoting/typing
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
       $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan) 
          VALUES (:nama, :nim, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    }
}

?>