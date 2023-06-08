<?php
include "koneksi.php";
$keyword = $_GET['keyword'];
$query = "SELECT * FROM nama_tabel WHERE kolom LIKE '%{$keyword}%'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
    // Tampilkan data hasil pencarian di sini, misalnya:
    echo $row['kolom1'] . ' - ' . $row['kolom2'];
    echo '<br>';
  }
  