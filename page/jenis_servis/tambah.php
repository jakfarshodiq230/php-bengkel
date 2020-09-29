<?php
 
$carikode = mysqli_query($koneksi, "select max(kd_jenis_servis) from jenis_servis") or die (mysql_error());
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
    <h3 class="page-header"><strong>Input Jasa Servis</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Jasa Servis</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                        
                                    <div class="form-group">
                                        <label>Kode Jenis Servis</label>
                                        <input class="form-control" placeholder="P001" name="reg" value="<?php echo $kode_otomatis?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jenis Servis</label>
                                        <input class="form-control" placeholder="Nama jenis_servis" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" placeholder="harga" name="harga" required>
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

    $kode_jenis_servis = @$_POST ['reg'];
    $nama_servis = @$_POST ['nama'];
    $harga = @$_POST ['harga'];
     $simpan = @$_POST ['simpan'];
    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO `jenis_servis`(`kd_jenis_servis`, `nama_servis`, `harga`) VALUES ('$kode_jenis_servis', '$nama_servis','$harga')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=jenis_servis";
                </script>

                <?php
        }
    }

    ?>  
