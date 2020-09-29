<?php
 
$carikode = mysqli_query($koneksi, "select max(kd_sparepart) from sparepart") or die (mysql_error());
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
    <h3 class="page-header"><strong>Input Data Sparepart</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Sparepart</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                        
                                    <div class="form-group">
                                        <label>Kode Sparepart</label>
                                        <input class="form-control" placeholder="001" name="reg" value="<?php echo $kode_otomatis ?>">  
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Sparepart</label>
                                        <input class="form-control" placeholder="Nama Sparepart" name="nama" required>
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

    $kode_sparepart = @$_POST ['reg'];
    $nama_sparepart = @$_POST ['nama'];
    
     $simpan = @$_POST ['simpan'];
    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO sparepart (kd_sparepart,jenis_sparepart)  VALUES ('$kode_sparepart', '$nama_sparepart')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=sparepart";
                </script>

                <?php
        }
    }

    ?>  
