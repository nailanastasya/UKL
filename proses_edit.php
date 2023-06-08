<?php
include_once "koneksi.php";
if(isset($_POST['Submit'])) {
     $id_hasil= $_POST['idhasil'];
     $tanggals= $_POST['tanggal'];
     $daerahs= $_POST['daerahid'];
     $jenisp= $_POST['Jenis_Panen'];
     $berats= $_POST['Berat'];
     $satuans= $_POST['satuan'];

     $sql= "UPDATE hasil_panen SET tanggal='$tanggals', id_asal=$daerahs, 
    jenis_panen='$jenisp', berat=$berats, id_satuan='$satuans' 
    WHERE id_hasil= $id_hasil";
     $sql2 = mysqli_query($mysqli, $sql);

    header("location:hasilpanen.php");

}
?>
