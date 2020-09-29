<?php

    $kode_pasien = $_GET ['no_reges'];
    $sql = $koneksi -> query ("SELECT * FROM pasien WHERE no_reges ='$kode_pasien'");
    $tampil = $sql -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Detail Data Pasien <?php echo $tampil['nama_pasien'];?></strong></h3>
    </div>
                <!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
    <div class="row">
        <div class="col-lg-12"> 
            <div class="panel panel-default">
                <div class="panel-heading"> Detail Data Pasien </div> 
                    <div class="panel-body">
                        <div class="row">
                              
                            <form method="post" role="form">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No REG</label>
                                            <input class="form-control"  name="noreg" value="<?php echo $tampil['no_reges'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input class="form-control" placeholder="Nama" name="nama" value="<?php echo $tampil['nama_pasien'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                    <?php if($tampil['jenis_kelamin']=="Laki-laki"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-laki" checked>
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                            
                    <?php } ?>

                    <?php if($tampil['jenis_kelamin']=="Perempuan"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-laki">
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                    <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Daftar</label>
                                            <input class="form-control" type="date" placeholder="Tanggal" name="tgl" value="<?php echo $tampil['tanggal_daftar'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input class="form-control" placeholder="Umur" name="umur" value="<?php echo $tampil['umur'];?>">
                                        </div>                                                  
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">+62</span>
                                            <input type="number" class="form-control" placeholder="No Handphone" name="nohp" value="<?php echo $tampil['no_hp'];?>">
                                        </div>
                                </div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kepala Keluarga</label>
                                            <input class="form-control" placeholder="Nama Kepela Keluarga" name="nama_kepelakeluarga" value="<?php echo $tampil['kepala_keluarga'];?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $tampil['alamat'];?>
                                                
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa</label>
                                            <select class="form-control" name="daerah">
                                                
                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM pasien,diagnosa where diagnosa.kode_diagnosa= pasien.kode_diagnosa and pasien.no_reges ='$kode_pasien'");
                                                $data = $sql->fetch_assoc();
                                            
                                                   if($tampil['kode_pasien']==$data['kode_pasien']){                                                   

                                                        echo "<option value='$data[kode_pasien]' selected>$data[nama_diagnosa]</option>"; 
                                                        }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Traphy</label>
                                            <select class="form-control" name="daerah">

                                                 <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM pasien,traphy where traphy.kode_traphy= pasien.kode_traphy and pasien.no_reges ='$kode_pasien'");
                                                $data = $sql->fetch_assoc();
                                            
                                                   if($tampil['kode_pasien']==$data['kode_pasien']){                                                   

                                                        echo "<option value='$data[kode_pasien]' selected>$data[nama_traphy]</option>"; 
                                                        }
                                                ?>

                                            </select>
                                        </div>                                  
                                           
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" placeholder="Keterangan" name="keterangan" rows="3"><?php echo $tampil['keterangan'];?>
                                                
                                            </textarea>
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