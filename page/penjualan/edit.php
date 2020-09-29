<?php

    $kode_diagnosa = @$_GET ['kode_diagnosa'];
    $sql = $koneksi -> query ("SELECT * FROM diagnosa WHERE kode_diagnosa ='$kode_diagnosa'");
    $tampil = $sql -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Diagnosa</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Diagnosa</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">
                                <div class="form-group">
                                <label>Nama Diagnosa</label>
                                    <input class="form-control" placeholder="Nama Diagnosa" name="nama_diagnosa" value="<?php echo $tampil['nama_diagnosa'];?>"/>
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

    $nama_diagnosa = $_POST ['nama_diagnosa'];

    $simpan = $_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE diagnosa SET nama_diagnosa ='$nama_diagnosa' WHERE kode_diagnosa ='$kode_diagnosa'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=diagnosa"; 
                </script>

                <?php
        }
    }

    ?>  
