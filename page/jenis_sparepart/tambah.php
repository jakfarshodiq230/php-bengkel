<?php
 
$carikode = mysqli_query($koneksi, "SELECT max(id_sparepart) from `jenis_sparepart`") or die (mysql_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "R".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "R0001";
  }
  ?>
<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Input Data Motor</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Motor</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                        
                                    <div class="form-group">
                                        <label>Kode Motor</label>
                                        <input class="form-control" placeholder="P001" name="reg" value="<?php echo $kode_otomatis?>">
                                    </div>
                                    <div class="form-group">
                                            <label>Motor</label>
                                            <select class="form-control" name="motor" required>
                                                <option>- Pilih Motor- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM motor ORDER BY jenis_motor ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kd_motor]'>$data[jenis_motor]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                    <div class="form-group">
                                            <label>Jenis Sparepat</label>
                                            <select class="form-control" name="sparepart" required>
                                                <option>- Pilih Sparepart- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM sparepart ORDER BY jenis_sparepart ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kd_sparepart]'>$data[jenis_sparepart]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Tipe Sparepart</label>
                                        <input class="form-control" placeholder="xxy-xxy-xxyy" name="tipe" required>
                                    </div>
                                        <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" placeholder="Rp.20.000.00" name="harga" required>
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

    $id_sparepart = @$_POST ['reg'];
    $kode_motor = @$_POST ['motor'];
    $kode_sparepart = @$_POST ['sparepart'];
    $tipe = @$_POST ['tipe'];
    $harga = @$_POST ['harga'];
     $simpan = @$_POST ['simpan'];
    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO `jenis_sparepart`(`id_sparepart`, `kd_motor`, `kd_sparepart`, `tipe_sparepart`, `harga`) VALUES ('$id_sparepart', '$kode_motor','$kode_sparepart','$tipe','$harga')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=jenis_sparepart";
                </script>

                <?php
        }
    }

    ?>  
