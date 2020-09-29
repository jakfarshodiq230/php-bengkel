<?php

    $kode_motor = @$_GET ['kd_motor'];
    $sql = $koneksi -> query ("SELECT * FROM motor WHERE kd_motor='$kd_motor'");
    $tampil = $sql -> fetch_assoc();
?>


<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Motor</strong></h3>
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
                                        <label>Nama Motor</label>
                                        <input class="form-control" placeholder="Nama Motor" name="nama" value="<?php echo $tampil['nama_motor'];?>">
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
    $nama_motor = @$_POST ['nama'];
    $jenis_motor = @$_POST ['jm'];
    $simpan = @$_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE motor SET jenis_motor='$nama_motor',jenis_motor='$jenis_motor' where kd_motor='$kode_motor '");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=motor";
                </script>

                <?php
        }
    }

    ?>
