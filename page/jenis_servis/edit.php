<?php

    $kode_jenis_servis = @$_GET ['kd_jenis_servis'];
    $sql = $koneksi -> query ("SELECT * FROM `jenis_servis` WHERE `kd_jenis_servis`='$kode_jenis_servis'");
    $tampil = $sql -> fetch_assoc();
?>


<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Jasa Servis</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Jasa servis</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                                    <div class="form-group">
                                        <label>Nama Jenis Servis</label>
                                        <input class="form-control" placeholder="Nama jenis_servis" name="nama" value="<?php echo $tampil['nama_servis']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" placeholder="Nama jenis_servis" name="harga" value="<?php echo $tampil['harga']?>">
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
    $nama_jenis_servis = @$_POST ['nama'];
    $harga = @$_POST ['harga'];
    $simpan = @$_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE `jenis_servis` SET `nama_servis`='$nama_jenis_servis',`harga`='$harga' WHERE `kd_jenis_servis`='$kode_jenis_servis'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=jenis_servis";
                </script>

                <?php
        }
    }

    ?>
