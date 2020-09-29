<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data service</strong></h3>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            Pilih Kategori  
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="?page=service">


                                <div class="col-lg-6">
                                    <input type="hidden" name="page" value="ps">

                                        <div class="form-group">
                                            <label>Service</label>
                                            <select class="form-control" name="kategori">

                                    <?php 

                                        $sql = $koneksi -> query ("SELECT * FROM service");    
                                    ?>
                                        <option>Semua</option>

                                    <?php
                                        while($data = $sql -> fetch_assoc()){

                                        echo "<option value='$data[kode_service]'>$data[nama_service] </option>";    
                                    }
                                    ?>
                                            </select>
                                        </div>
    
               


                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></a>

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

