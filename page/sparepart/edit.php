<?php

	$kode_sparepart = @$_GET ['kd_sparepart'];
    $sql = $koneksi -> query ("SELECT * FROM sparepart WHERE kd_sparepart ='$kode_sparepart'");
    $tampil = $sql -> fetch_assoc();
?>


<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Sparepart</strong></h3>
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
                                        <label>Nama Sparepart</label>
                                        <input class="form-control" placeholder="Nama Pasien" name="nama" value="<?php echo $tampil['jenis_sparepart'];?>">
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

    $jenis_sparepart = @$_POST ['nama'];
   //$jenis_sparepart = $_POST ['js'];
     $simpan = @$_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE sparepart SET jenis_sparepart='$jenis_sparepart' where kd_sparepart ='$kode_sparepart'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=sparepart";
                </script>

                <?php
        }
    }

    ?>
