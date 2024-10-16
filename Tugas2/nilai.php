<?php
require 'mhs.php';

class Nilai extends Mahasiswa {
    public $table_name = "nilai";  // Nama tabel untuk menyimpan nilai mahasiswa

    // Fungsi untuk mengambil semua data nilai
    public function getAllNilai() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
class Lulus extends Nilai{
    public function __construct(){
        parent:: __construct();
    }
    public function tampilkanData() {
        $query = "SELECT * FROM nilai WHERE nilai_akhir >= 70";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
$lulus = new Lulus();
$data = $lulus ->tampilkanData();

class Remidi extends Nilai{
    public function __construct(){
        parent:: __construct();
    }
    public function tampilkanData() {
        $query = "SELECT * FROM nilai WHERE nilai_akhir < 70";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
$remidi = new Remidi();
$data = $remidi ->tampilkanData();
?>
