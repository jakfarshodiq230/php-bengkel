<?php

    $kode_jenis_sparepart = @$_GET ['id_sparepart'];
    $sql = $koneksi -> query ("SELECT * FROM `jenis_sparepart` WHERE id_sparepart ='$kode_jenis_sparepart'");
    $tampil = $sql -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Jenis Sparepart</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Jenis Sparepart</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>Nama Jenis Sparepart</label>
                                    <input class="form-control" placeholder="Nama jenis_sparepart" name="jenis_sparepart" value="<?php echo $tampil['tipe_sparepart'];?>"/>
                                </div>
                                <div class="form-group">
                                <label>Harga</label>
                                    <input class="form-control" placeholder="Nama jenis_sparepart" name="harga" value="<?php echo $tampil['harga'];?>"/>
                                </div>


                                <div class="form-group">
                                            <label>Motor</label>
                                            <select class="form-control" name="motor">
                                                
                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM motor ORDER BY jenis_motor ASC");
                                                 while ($data = $sql->fetch_assoc()){
                                            
                                                   if($tampil['kd_motor']==$data['kd_motor']){                                                   

                                                        echo "<option value='$data[kd_motor]' selected>$data[jenis_motor]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kd_motor]'>$data[jenis_motor]</option>";   
                                                            }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Motor</label>
                                            <select class="form-control" name="sparepart">
                                                
                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM `sparepart` ORDER BY jenis_sparepart ASC");
                                                 while ($data = $sql->fetch_assoc()){
                                            
                                                   if($tampil['kd_sparepart']==$data['kd_sparepart']){                                                   

                                                        echo "<option value='$data[kd_sparepart]' selected>$data[jenis_sparepart]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kd_sparepart]'>$data[jenis_sparepart]</option>";   
                                                            }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        
                                <div>                                        
                                <input type="submit" name="simpan" value="Edit" class="btn btn-primary" style="margin-top: 15px;">
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

    $nama_sparepart = @$_POST ['jenis_sparepart'];
    $harga = @$_POST ['harga'];
    $kode_sparepart = @$_POST ['sparepart'];
    $kode_motor = @$_POST ['motor'];
    $simpan = @$_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE `jenis_sparepart` SET `kd_motor`='$kode_motor',`kd_sparepart`='$kode_sparepart',`tipe_sparepart`='$nama_sparepart',`harga`='$harga' WHERE `id_sparepart`='$kode_jenis_sparepart'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=jenis_sparepart"; 
                </script>

                <?php
        }
    }

    ?>  
