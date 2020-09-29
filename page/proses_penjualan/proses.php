<?php
$koneksi = new mysqli ("localhost","root","","nusantara_motor");
$data=mysqli_query($koneksi,"SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart");
$op=isset($_GET['op'])?$_GET['op']:null;

if($op=='kode'){
    echo"<option>Kode Barang</option>";
    while($r=mysqli_fetch_array($data)){
        echo "<option value='$r[kode]'>$r[kode]</option>";
    }
}elseif($op=='barang'){
    echo'<table id="barang" class="table table-hover">
    <thead>
            <tr>
                <Td colspan="5"><a href="?page=barang&act=tambah" class="btn btn-primary">Tambah Barang</a></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Harga Beli</td>
                <td>Harga Jual</td>
                <td>Stok</td>
            </tr>
        </thead>';
    while ($b=mysqli_fetch_array($data)){
        echo"<tr>
                <td>$b[kode]</td>
                <td>$b[nama]</td>
                <td>$b[hrg_beli]</td>
                <td>$b[hrg_jual]</td>
                <td>$b[stok]</td>
            </tr>";
        }
    echo "</table>";
}elseif($op=='ambildata'){
    $kode=$_GET['kode'];
    $dt=mysqli_query($koneksi,"SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart AND jenis_sparepart.id_sparepart='$kode'");
    $d=mysqli_fetch_array($dt);
    echo $d['jenis_sparepart']."|".$d['harga'];
}elseif($op=='cek'){
    $kd=$_GET['kd'];
    $sql=mysqli_query($koneksi,"SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart AND jenis_sparepart.id_sparepart='$kode'");
    $cek=mysqli_num_rows($sql);
    echo $cek;
}elseif($op=='update'){
    $kode=$_GET['kode'];
    $nama=htmlspecialchars($_GET['nama']);
    $beli=htmlspecialchars($_GET['beli']);
    $jual=htmlspecialchars($_GET['jual']);
    $stok=htmlspecialchars($_GET['stok']);
    
    $update=mysqli_query($koneksi,"update tblbarang set nama='$nama',
                        hrg_beli='$beli',
                        hrg_jual='$jual',
                        stok='$stok'
                        where kode='$kode'");
    if($update){
        echo "Sukses";
    }else{
        echo "ERROR. . .";
    }
}elseif($op=='delete'){
    $kode=$_GET['kode'];
    $del=mysqli_query($koneksi,"delete from tblbarang where kode='$kode'");
    if($del){
        echo "sukses";
    }else{
        echo "ERROR";
    }
}elseif($op=='simpan'){
    $kode=$_GET['kode'];
    $nama=htmlspecialchars($_GET['nama']);
    $jual=htmlspecialchars($_GET['jual']);
    $beli=htmlspecialchars($_GET['beli']);
    $stok=htmlspecialchars($_GET['stok']);
    
    $tambah=mysqli_query($koneksi,"insert into tblbarang (kode,nama,hrg_beli,hrg_jual,stok)
                        values ('$kode','$nama','$beli','$jual','$stok')");
    if($tambah){
        echo "sukses";
    }else{
        echo "error";
    }
}
?>