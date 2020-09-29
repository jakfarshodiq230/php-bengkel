<?php

    $kode_service = @$_GET ['kd_service'];
    $sql = $koneksi -> query ("SELECT * FROM service,jenis_servis WHERE service.`jenis_servis`= jenis_servis.`kd_jenis_servis`AND service.kd_service ='$kode_service'");
    $tampil = $sql -> fetch_assoc();
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
                                        <label>Nama</label>
                                        <input class="form-control" placeholder="Nama" name="nama"  value="<?php echo $tampil['nama']?>" required>
                                    </div>
                                    <div class="form-group">
                                            <label>Jenis Servis</label>
                                            <select class="form-control" name="jenis_servis" required>
                                                <option>- jenis_servis- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM jenis_servis ORDER BY nama_servis ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    if($tampil['jenis_servis']==$data['kd_jenis_servis']){                                                   

                                                        echo "<option value='$data[kd_jenis_servis]' selected>$data[nama_servis]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kd_jenis_servis]'>$data[nama_servis]</option>";   
                                                            }
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Tanggal Service</label>
                                        <input class="form-control" type="date" placeholder="Tanggal Service" name="tanggal_servis" value="<?php echo $tampil['tanggal_servis']?>"required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe Motor</label>
                                        <input class="form-control" placeholder="Tipe Motor" name="tipe_motor" value="<?php echo $tampil['tipe_motor']?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" placeholder="Alamat" name="alamat" 
                                        value="<?php echo $tampil['alamat']?>"required>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="no_hp" value="<?php echo $tampil['no_hp']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" placeholder="Harga" name="harga" value="<?php echo $tampil['harga']?>"required>
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
        $nama = @$_POST ['nama'];
        $jenis_servis = @$_POST ['jenis_servis'];
        $tanggal_servis = @$_POST ['tanggal_servis'];
        $tipe_motor = @$_POST ['tipe_motor'];   
        $no_hp = @$_POST ['no_hp'];
        
        $alamat = @$_POST ['alamat'];
        $harga = @$_POST ['harga'];
        
        $simpan = @$_POST['simpan'];

        if ($simpan) {

        $sql = $koneksi -> query ("UPDATE `service` SET `nama`='$nama',`jenis_servis`='$jenis_servis',`tanggal_servis`='$tanggal_servis',`tipe_motor`='$tipe_motor',`alamat`='$alamat',`no_hp`='$no_hp',`harga`='$harga' WHERE kd_service='$kode_service'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                   window.location.href="?page=data_servis";
                </script>

                <?php
        }
    }

    ?>    