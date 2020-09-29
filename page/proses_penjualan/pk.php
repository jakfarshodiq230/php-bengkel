<?php
$koneksi = new mysqli ("localhost","root","","nusantara_motor");
$op=isset($_GET['op'])?$_GET['op']:null;
if($op=='ambilbarang'){
    $data=mysqli_query($koneksi,"SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart");
    echo"<option>Kode Barang</option>";
    while($r=mysqli_fetch_array($data)){
        echo "<option value='$r[id_sparepart]'>$r[id_sparepart]</option>";
    }
}elseif($op=='ambildata'){
    $kode=$_GET['kode'];
    $dt=mysqli_query($koneksi,"SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart AND jenis_sparepart.id_sparepart='$kode'");
    $d=mysqli_fetch_array($dt);
    echo $d['nama']."|".$d['hrg_jual']."|".$d['stok'];
}elseif($op=='barang'){
    $brg=mysqli_query($koneksi,"select * from tblsementara");
?>
    <thead>
            <tr>
                <td>Kode Barang</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Jumlah Beli</td>
                <td>Subtotal</td>
                <td>Tools</td>
            </tr>
        </thead>
    <?php
    $total=mysqli_fetch_array(mysqli_query($koneksi,"select sum(subtotal) as total from tblsementara"));
    while($r=mysqli_fetch_array($brg)){
    ?>
        <tr>
                <td style="vertical-align: middle;"><?php echo $r['kode'] ?></td>
                <td style="vertical-align: middle;"><?php echo$r['nama']?></td>
                <td style="vertical-align: middle;"><?php echo 'Rp. ',number_format($r['harga'],0,',','.')?></td>
                <td style="vertical-align: middle;"> <fieldset disabled="disabled"><input type='text' name='jum' value='<?php echo $r['jumlah']?>' class='span2' ></fieldset></td>
                <td style="vertical-align: middle;"><?php echo 'Rp. ',number_format($r['subtotal'],0,',','.')?></td>
                <td style="vertical-align: middle;"><a href='?page=penjualan&aksi=hapus&kode=<?php echo $r['kode']?>'><button type="button" class="btn btn-primary"><i class="fa fa-trash-o"></i>  Hapus</button></a></td>
            </tr>
    <?php } ?>
    <tr>
        <td colspan='4'><b>Total</b></td>
        <td colspan='2'><b><?php echo 'Rp. ',number_format($total['total'],0,',','.')?></b></td>
    </tr>
<?php
}elseif($op=='tambah'){
    $kode=$_GET['kode'];
    $nama=$_GET['nama'];
    $harga=$_GET['harga'];
    $jumlah=$_GET['jumlah'];
    $subtotal=$harga*$jumlah;
    
    $tambah=mysqli_query($koneksi,"INSERT into tblsementara (kode,nama,harga,jumlah,subtotal)
                        values ('$kode','$nama','$harga','$jumlah','$subtotal')");
    
    if($tambah){
        echo "sukses";
    }else{
        echo "ERROR";
    }

}elseif($op=='proses'){
    $nota=$_GET['nota'];
    $tanggal=$_GET['tanggal'];
    $to=mysqli_fetch_array(mysqli_query($koneksi,"select sum(subtotal) as total from tblsementara"));
    $tot=$to['total'];
    $simpan=mysqli_query($koneksi,"insert into penjualan(nonota,tanggal,total)
                        values ('$nota','$tanggal','$tot')");
    if($simpan){
        $query=mysqli_query($koneksi,"select * from tblsementara");
        while($r=mysqli_fetch_row($query)){
            mysqli_query($koneksi,"insert into detailpenjualan(nonota,kode,harga,jumlah,subtotal)
                        values('$nota','$r[0]','$r[2]','$r[3]','$r[4]')");
            // mysqli_query($koneksi,"update tblbarang set stok=stok-'$r[3]'
            //             where kode='$r[0]'");
        }
        //hapus seluruh isi tabel sementara
        mysqli_query($koneksi,"truncate table tblsementara");

        echo "sukses";
    }else{
        echo "ERROR";
    }
}
?>