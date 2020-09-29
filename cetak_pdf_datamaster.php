<?php

ob_start();
 //Koneksi ke database dan tampilkan datanya
$koneksi = new mysqli ("localhost","root","","klinik");

include('./mpdf60/mpdf.php');
 

?>
<style>
td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head td {
    font-weight: bold;
    font-size: 14px;
    background: #0;
}
 
table .main tbody tr td {
    font-size: 14px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
    background: #fff;
}
.style5 {font-size: 20px;}
.style7 {font-size: 24px;}
.style4 {
    font-size: 12px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
}
<?php 
$ang=$_GET['master'];
    if($ang=="dokter"){
?>
</style>
 <p align="center"  class="style4">DATA DOKTER KLINIK CEMPEDAK</p>
 <p align="center"  class="style4">Jl. Cempedak No. 24 Wonorejo Marpoyan Damai Pekanbaru Riau 28128</p>
<table class='main' repeat_header="1" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr class="head">
    <td width="35" height="80" align='center'><span class="style5">No.</span></td>
    <td align='center' width="267"><span class="style5">Nama Dokter</span></td>
    <td align='center' width="296"><span class="style5">Jenis Kelamin</span></td>
    <td align='center' width="200"><span class="style5">Tanggal Lahir</span></td>
    <td align='center' width="267"><span class="style5">Sepesialis</span></td>
    <td align='center' width="329"><span class="style5">Alamat</span></td>
    <td align='center' width="267"><span class="style5">No HP</span></td>
    
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya
 $nomor=1;
$sql = $koneksi -> query ("SELECT * FROM dokter");
while($data = $sql -> fetch_assoc())
 {
                                                                                   
?>
<tbody>
<tr  style="font-size: 12px">
    <td><span class="style7"><?php echo $nomor++; ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['nama_dokter'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['Jenis_kelamin'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['tanggal_lahir'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['sepesialis'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['alamat'] ?></td>
    <td class=""><span class="style7"><?php echo $data ['no_hp'] ?></td>
</tr>

<?php } ?>
</tbody>
</table>

<?php }elseif($ang=="perawat"){?>
</style>
 <p align="center"  class="style4">DATA PERAWAT KLINIK CEMPEDAK</p>
 <p align="center"  class="style4">Jl. Cempedak No. 24 Wonorejo Marpoyan Damai Pekanbaru Riau 28128</p>
<table class='main' repeat_header="1" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr class="head">
    <td width="35" height="80" align='center'><span class="style5">No.</span></td>
    <td align='center' width="267"><span class="style5">Nama Dokter</span></td>
    <td align='center' width="296"><span class="style5">Jenis Kelamin</span></td>
    <td align='center' width="200"><span class="style5">Tanggal Lahir</span></td>
    <td align='center' width="267"><span class="style5">Sepesialis</span></td>
    <td align='center' width="329"><span class="style5">Alamat</span></td>
    <td align='center' width="267"><span class="style5">No HP</span></td>
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya
 $nomor=1;
$sql = $koneksi -> query ("SELECT * FROM perawat");
while($data = $sql -> fetch_assoc())
 {
                                                                                   
?>
<tbody>
<tr  style="font-size: 12px">
    <td><span class="style7"><?php echo $nomor++; ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['nama_perawat'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['Jenis_kelamin'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['tanggal_lahir'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['sepesialis'] ?></td>
    <td class="text-center"><span class="style7"><?php echo $data ['alamat'] ?></td>
    <td class=""><span class="style7"><?php echo $data ['no_hp'] ?></td>
</tr>

<?php } ?>
</tbody>
</table>
 <?php }elseif($ang=="diagnosa"){?>
</style>
 <p align="center"  class="style4">DATA DIAGNOSA KLINIK CEMPEDAK</p>
 <p align="center"  class="style4">Jl. Cempedak No. 24 Wonorejo Marpoyan Damai Pekanbaru Riau 28128</p>
<table class='main' repeat_header="1" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr class="head">
    <td width="15" height="40" align='center'><span class="style5">No.</span></td>
    <td align='center' width="60" style="font-size: 12px">Kode Diagnosa</span></td>
    <td align='center' width="60" style="font-size: 12px">Nama Diagnosa</span></td>
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya
 $nomor=1;
$sql = $koneksi -> query ("SELECT * FROM diagnosa");
while($data = $sql -> fetch_assoc())
 {
                                                                                   
?>
<tbody>
<tr  style="font-size: 12px">
    <td style="font-size: 12px"><?php echo $nomor++; ?></td>
    <td class="text-center" style="font-size: 12px"><?php echo $data ['kode_diagnosa'] ?></td>
    <td class="text-center" style="font-size: 12px"><?php echo $data ['nama_diagnosa'] ?></td>
</tr>

<?php } ?>
</tbody>
</table>
<?php } ?>


<?php
$content = ob_get_clean(); 
 
try {
    $mpdf=new mPDF('utf-8', "A4", 9 ,'Times new Roman', 5, 5, 20, 5, 5, 4, 'L');
    $mpdf->SetTitle("Data Master");
    
    $mpdf->WriteHTML($content);
    $mpdf->SetLineWidth(1);
    $mpdf->SetFont('Arial','i',10);
    $mpdf->Output("Data Master.pdf","i");
} catch(Exception $e) {
    echo $e;
    exit;
}
?>