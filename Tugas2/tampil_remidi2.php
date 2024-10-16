<?php
require 'index_remidi2.php';
?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="container mt-3">
  <h2>REMIDI</h2>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>NILAI</th>
        <th>NILAI AKHIR</th>
        <th>MAHASISWA_ID</th>
        <th>MATA KULIAH_ID</th>
        <th>SEMESTER_ID</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include('nilai.php');
      $remidi = new Remidi();
      $query = $remidi->tampilkanData(); // Ambil koneksi database

      $no = 1;
    //   $query = $conn->query("SELECT * FROM nilai");

      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nilai']; ?></td>
            <td><?php echo $row['nilai_akhir']; ?></td>
            <td><?php echo $row['mahasiswa_id']; ?></td>
            <td><?php echo $row['matkul_id']; ?></td>
            <td><?php echo $row['semester_id']; ?></td>
          </tr>
          <!-- <td colspan="6" class="text-center"> -->
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>