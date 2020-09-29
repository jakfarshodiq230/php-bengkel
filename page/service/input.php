
<?php
 
$carikode = mysqli_query($koneksi, "select max(kd_service) from service") or die (mysql_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "D".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "D0001";
  }
  ?>
<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Input Data Service</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Service</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                        
                                    <div class="form-group">
                                        <label>Kode Servis</label>
                                        <input class="form-control" placeholder="Nama" name="kode_servis" value="<?php echo $kode_otomatis ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" placeholder="Nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                            <label>Jenis Servis</label>
                                            <select class="form-control" name="jenis_servis" required>
                                                <option>- jenis_servis- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM jenis_servis ORDER BY nama_servis ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kd_jenis_servis]'>$data[nama_servis]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Tanggal Service</label>
                                        <input class="form-control" type="date" placeholder="Tanggal Service" name="tanggal_servis" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe Motor</label>
                                        <input class="form-control" placeholder="Tipe Motor" name="tipe_motor" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" placeholder="Alamat" name="alamat" required>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="no_hp">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" placeholder="Harga" name="harga" required>
                                    </div>
                                        
                                <div>                                        
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 15px;">
                                </div>
                            </div>
                                <!-- /.col-lg-6 (nested) -->
                            </form>

                        </div>
                            <!-- /.row (nested) -->
                    </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
                      
    <?php
    $kode_servis = @$_POST ['kode_servis'];
    $nama = @$_POST ['nama'];
    $jenis_service = @$_POST ['jenis_servis'];
    $tanggal_service = @$_POST ['tanggal_servis'];
    $tipe_motor = @$_POST ['tipe_motor'];
    $alamat = @$_POST ['alamat'];
    $no_hp = @$_POST ['no_hp'];
    $harga = @$_POST ['harga'];
     $simpan = @$_POST ['simpan'];
    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO `service`(`kd_service`, `nama`, `jenis_servis`, `tanggal_servis`, `tipe_motor`, `alamat`, `no_hp`, `harga`) VALUES('$kode_servis','$nama','$jenis_service','$tanggal_service','$tipe_motor','$alamat','$no_hp','$harga')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=service";
                </script>

                <?php
        }
    }

    ?>  
