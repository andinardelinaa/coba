<?php
require 'database.php';

class Mahasiswa extends Database {
    protected $conn;
    public $table_name = "mahasiswa";  // Nama tabel mahasiswa

    public function __construct() {
        // Memanggil constructor dari kelas induk (Database) dan menginisialisasi koneksi
        parent::__construct();
        $this->conn = $this->getConnection();  // Menggunakan koneksi dari parent class
    }

    // Fungsi untuk mendapatkan semua data mahasiswa
    public function getAllMahasiswa() {
        $query = "SELECT * FROM " . $this->table_name;  // Query untuk mengambil semua data mahasiswa
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
