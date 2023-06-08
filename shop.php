    <?php
    include "header.php";
    ?>
    <div class="table">
        <div class="table_header">
            <p></p>
            <div>
                <input placeholder="Jenis Panen"/>
                
            </div>
        </div>
        <div class="table_section">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Jenis Panen</th>
                    <th>Berat</th>
                    <th>Satuan</th>
                    <th>Harga/Kg</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
        $query="SELECT  hasil_panen.id_hasil, hasil_panen.tanggal, daerah_asal.provinsi, daerah_asal.Kabupaten, daerah_asal.kecamatan, daerah_asal.Desa, hasil_panen.jenis_panen, hasil_panen.berat, satuan.jenis_satuan, hasil_panen.harga_kilo
        FROM hasil_panen, daerah_asal, satuan
        WHERE hasil_panen.id_asal = daerah_asal.id_asal and hasil_panen.id_satuan = satuan.id_satuan ";
        $query_mysql = mysqli_query($mysqli,$query)or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
         ?>
         <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data ['tanggal']; ?></td>
                <td><?php echo $data ['provinsi']; ?></td>
                <td><?php echo $data ['Kabupaten']; ?></td>
                <td><?php echo $data ['kecamatan']; ?></td>
                <td><?php echo $data ['Desa']; ?></td>
                <td><?php echo $data ['jenis_panen']; ?></td>
                <td><?php echo $data ['berat']; ?></td>
                <td><?php echo $data ['jenis_satuan']; ?></td>
                <td><?php echo $data ['harga_kilo']; ?></td>
                <td>
                    <button><a href="keranjang.php?idhasil=<?=$data['id_hasil']?>"><i class="fa-solid fa-cart-shopping"></i></a></button>
                </td>
         </tr>
         <?php } ?>
                
        </tbody>
            </table>
        </div>
<?php include_once "footer.php";