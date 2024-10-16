<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "db_mahasiswa";
    private $conn; 

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            // echo "Koneksi berhasil!<br>";
        } catch (PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function getConn() {
        return $this->conn; // Tambahkan method untuk mengembalikan koneksi
    }

    public function tampilkanData() {
        
    }
}
?>
