
        <?php
        include "header.php";
        $id_hasil=$_GET['idhasil'];
        $sql4="SELECT a.*,b.provinsi,c.jenis_satuan FROM hasil_panen a 
                left join daerah_asal b on b.id_asal = a.id_asal
                left join satuan c on c.id_satuan = a.id_satuan
            where a.id_hasil=$id_hasil";
        $row = mysqli_query($mysqli, $sql4);

        // $hpanen = $row->fetch_row();
        $hpanen = mysqli_fetch_array($row) ;

        $sql1="SELECT * FROM satuan";
        $rsSatuan = mysqli_query($mysqli, $sql1) or die (mysqli_error());
        $sql = "SELECT*FROM daerah_asal";
        $rsDaerah = mysqli_query($mysqli, $sql) or die (mysqli_error());
        ?>
        
        <h3>Ubah Data Hasil Panen </h3>
        <form action="simpanpanen.php" method="POST" name="forml">
            <input type="hidden" name="idhasil" id="idhasil" value="<?=$id_hasil;?>">
            <table border="1" class="table">

                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal" value="<?=$hpanen[1];?>"></td>
                </tr>
                <tr>
                    <td>Daerah Asal</td>
                    <td>
                        <select id="daerahid" name="daerahid">
                            <option disabled selected></option>
                            <?php while($data = mysqli_fetch_array($rsDaerah)){?>
                                <option value="<?=$data ['id_asal'];?>"><?=$data ['provinsi'];?></option>
                           <?php }?>
                           <option value="<?=$hpanen['id_asal']?>" selected hidden><?=$hpanen['provinsi']?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Panen</td>
                    <td><input type="text" name="Jenis_Panen"value="<?=$hpanen[3];?>"></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="Berat" value="<?=$hpanen[4];?>"></td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td>
                        <select name="satuan" value="5">
                        <option disabled selected></option>
                        <?php while($data1 = mysqli_fetch_array($rsSatuan)){?>
                                <option value="<?=$data1 ['id_satuan'];?>"><?=$data1 ['jenis_satuan'];?></option>

                           <?php }?>
                           <option value="<?=$hpanen['id_satuan']?>" selected hidden><?=$hpanen['jenis_satuan']?></option>
                        </select>

                   </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?=$hpanen['harga_kilo'];?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="Submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
<?php include "footer.php" ; ?>
