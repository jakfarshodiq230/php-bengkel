<?php
$koneksi = new mysqli ("localhost","root","","nusantara_motor");
    $kode=$_GET['kode'];
    $del=mysqli_query($koneksi,"delete from tblsementara where kode='$kode'");
    if($del){
        echo "<script>window.location='?page=penjualan&act=tambah';</script>";
    }else{
        echo "<script>alert('Hapus Data Berhasil');
            window.location='?page=penjualan&act=tambah';</script>";
    }
?>