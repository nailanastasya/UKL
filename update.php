<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_hasil']) ){
    header('Location: hasilpanen.php');
}

// //ambil id dari query string
$id = $_GET['id_hasil'];

// // buat query untuk ambil data dari database
 $result = mysqli_query($mysqli, "SELECT * FROM hasil_panen WHERE id=$id");
 $sql = "SELECT * FROM buku WHERE id=$id";
 $query = mysqli_query($mysqli, $sql);
$siswa = mysqli_fetch_assoc($query);

// // jika data yang di-edit tidak ditemukan
 if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
 }
$id = $_GET['id_hasil'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['judul'];
    $pengarang = $user_data['pengarang'];
    $penerbit = $user_data['penerbit'];
    $stok=$user_data['stok'];
}

        $sql1="SELECT*FROM satuan";
        $rsSatuan = mysqli_query($mysqli, $sql1) or die (mysqli_error());
        $sql = "SELECT*FROM daerah_asal";
        $rsDaerah = mysqli_query($mysqli, $sql) or die (mysqli_error());
        ?>



<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form method="POST" action="proses_edit.php">
        <table border="0">
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
                    <td>Harga</td>
                    <td><input type="text" name="Berat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
        </table>
    </form>
    </body>
</html>
<tr> 
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $penerbit;?>"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>