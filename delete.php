<?php
include "koneksi.php";
$dataId = $_GET['idhasil'];
$query = "DELETE FROM hasil_panen WHERE id_hasil = $dataId";
//die($query);
$sql=mysqli_query($mysqli, $query);

header("location:hasilpanen.php");
