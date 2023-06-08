<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
<?php
include_once("koneksi.php");

        $sql1="SELECT*FROM satuan";
        $rsSatuan = mysqli_query($mysqli, $sql1) or die (mysqli_error());
        $sql = "SELECT*FROM daerah_asal";
        $rsDaerah = mysqli_query($mysqli, $sql) or die (mysqli_error());
        ?>
<div class="content">        
        <h3>Tambah data</h3>
        <form action="addpanen.php" method="POST" name="forml">
            <table border="1" class="table">
                <tr>
                    <td width="20%">Tanggal</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                
                <tr>
                    <td>Daerah Asal</td>
                    <td>
                        <select name="daerahid">
                            <option disabled selected></option>
                            <?php while($data = mysqli_fetch_array($rsDaerah)){?>
                                <option value="<?=$data ['id_asal'];?>"><?=$data ['provinsi'];?></option>

                           <?php }?>

                  
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Panen</td>
                    <td><input type="text" name="Jenis_Panen"></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="Berat"></td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td>
                        <select name="satuan">
                        <option disabled selected></option>
                        <?php while($data1 = mysqli_fetch_array($rsSatuan)){?>
                                <option value="<?=$data1 ['id_satuan'];?>"><?=$data1 ['jenis_satuan'];?></option>

                           <?php }?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>Harga/Kg</td>
                    <td><input type="text" name="Harga"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                if(isset($_POST['Submit'])) {
                    $tanggals= $_POST['tanggal'];
                    $daerahs= $_POST['daerahid'];
                    $jenisp= $_POST['Jenis_Panen'];
                    $berats= $_POST['Berat'];
                    $satuans= $_POST['satuan'];
                    $harga= $_POST['Harga'];

                    

                   
                    $sql= "INSERT INTO hasil_panen(tanggal,id_asal,jenis_panen,berat,id_satuan, harga_kilo) VALUES('$tanggals','$daerahs','$jenisp',$berats,'$satuans',$harga)";
                    $sql2 = mysqli_query($mysqli, $sql);

                    header("location:hasilpanen.php");
                    
                }
                ?>
            </table>
        </form>
            </div>



</body>
</html>