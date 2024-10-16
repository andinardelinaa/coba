<?php
require 'index_mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<body>
<div class="container mt-3">
  <h2>Daftar Mahasiswa</h2>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No. Telepon</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include('database.php');
      $database = new Database();
      $conn = $database->getConn(); // Ambil koneksi database

      $no = 1;
      $query = $conn->query("SELECT * FROM mahasiswa");

      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama_mahasiswa']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['no_telp']; ?></td>
          </tr>
          <!-- <td colspan="6" class="text-center"> -->
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
