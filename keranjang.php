<?php
include_once "header.php";
        $id_hasil=$_GET['idhasil'];
        $sql4="SELECT  hasil_panen.id_hasil, hasil_panen.tanggal, daerah_asal.provinsi, daerah_asal.Kabupaten, daerah_asal.kecamatan, daerah_asal.Desa, hasil_panen.jenis_panen, hasil_panen.berat, satuan.jenis_satuan, hasil_panen.harga_kilo
        FROM hasil_panen, daerah_asal, satuan
        WHERE hasil_panen.id_asal = daerah_asal.id_asal and hasil_panen.id_satuan = satuan.id_satuan ";
        $row = mysqli_query($mysqli, $sql4);
        $rs = mysqli_fetch_array($row) ;
        
?>
<div class="wrapper">
    <div class="table">
        <table border="1">
            <tr>
                <th>Jenis</th>
                <th><?=$rs['jenis_panen']?></th>
            </tr>
            <tr>
                <th>Asal Daerah</th>
                <th><?=$rs['provinsi']?></th>
            </tr>
            <tr>
                <th>Stok Berat</th>
                <th><?=$rs['berat']?></th>
            </tr>
            <tr>
                <th>Satuan</th>
                <th><?=$rs['jenis_satuan']?></th>
            </tr>
            <tr>
                <th>Jumlah Belanja</th>
                <th><input type="number"></th>
            </tr>
            <tr>
                <td colspan="2>
                    <button><a href="shop.php">Masukan Keranjang</a></button>
                </td>
</tr>
        </table>
    </div>
</div>
<?php
include "footer.php"
?>
