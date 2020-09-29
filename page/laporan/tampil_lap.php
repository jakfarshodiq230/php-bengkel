<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Data Laporan Master</strong></h3> 
    </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            Pilih Data Master
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="?page=tampil_lap">


                                <div class="col-lg-6">
                                    <input type="hidden" name="page" value="tampil_lap">

                                        <div class="form-group">
                                            
                                            <select class="form-control" name="master">

                                        		<option value="kosong">-Pilih Data-</option>
                                        		<option value="dokter">-Dokter-</option>
                                        		<option value="perawat">-Perawat-</option>
                                        		<option value="diagnosa">-Diagnosa-</option>
                                        		<option value="traphy" >-Traphy-</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></a>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) --><br>

				            
				                            <?php
				                                $no = 1;

				                                $ang=@$_GET['master'];
				                                if($ang=="dokter")
				                                {    
				                            ?>
											        <div class="panel panel-default">
											            <div class="panel-heading"> Data Dokter</div>
											                <div class="panel-body">
											                    <div class="table-responsive">
											                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
											                            <thead>
											                                <tr>
											                                <th>No.</th>
											                                <th class="text-center">Nama Dokter</th>
											                                <th class="text-center">Jenis Kelamin</th>
											                                <th class="text-center">Tanggal Lahir</th>
											                                <th class="text-center">Sepesialis</th>
											                                <th class="text-center">Alamat</th>
											                                <th class="text-center">No HP</th>
											                                </tr>
											                            </thead> 
											                            
											                            <tbody>

											                            <?php
											                                    $sql = $koneksi -> query ("SELECT * FROM dokter");
											                                    while($data = $sql -> fetch_assoc())
											                                    {
											                                       
											                            ?>

											                            <tr>

											                                <td><?php echo $no++; ?></td>
											                                <td class="text-center"><?php echo $data ['nama_dokter'] ?></td>
											                                <td class="text-center"><?php echo $data ['Jenis_kelamin'] ?></td>
											                                <td class="text-center"><?php echo $data ['tanggal_lahir'] ?></td>
											                                <td class="text-center"><?php echo $data ['sepesialis'] ?></td>
											                                <td class="text-center"><?php echo $data ['alamat'] ?></td>
											                                <td class=""><?php echo $data ['no_hp'] ?></td>
											                                          
											                            </tr>
											                                <?php 
											                                
											                                } 

											                                ?>

											                            </tbody>
											                        </table>
											                     </div>

											                    <td colspan="2"><br>
											                       <a href ="cetak_pdf_datamaster.php?page=laporan&master=<?php echo $_GET['master']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
											                    </td>
											                            
											                </div>
											            </div>
				                        <?php }elseif($ang=="perawat")
				                                {  ?>
				                                	<div class="panel panel-default">
											            <div class="panel-heading"> Data Perawat</div>
											                <div class="panel-body">
											                    <div class="table-responsive">
											                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
											                            <thead>
											                                <tr>
											                                <th>No.</th>
											                                <th class="text-center">Nama Perawat</th>
											                                <th class="text-center">Jenis Kelamin</th>
											                                <th class="text-center">Tanggal Lahir</th>
											                                <th class="text-center">Sepesialis</th>
											                                <th class="text-center">Alamat</th>
											                                <th class="text-center">No HP</th>
											                                </tr>
											                            </thead> 
											                            
											                            <tbody>

											                            <?php
											                                    $sql = $koneksi -> query ("SELECT * FROM perawat");
											                                    while($data = $sql -> fetch_assoc())
											                                    {
											                                       
											                            ?>

											                            <tr>

											                                <td><?php echo $no++; ?></td>
											                                <td class="text-center"><?php echo $data ['nama_perawat'] ?></td>
											                                <td class="text-center"><?php echo $data ['Jenis_kelamin'] ?></td>
											                                <td class="text-center"><?php echo $data ['tanggal_lahir'] ?></td>
											                                <td class="text-center"><?php echo $data ['sepesialis'] ?></td>
											                                <td class="text-center"><?php echo $data ['alamat'] ?></td>
											                                <td class=""><?php echo $data ['no_hp'] ?></td>
											                                          
											                            </tr>
											                                <?php 
											                                
											                                } 

											                                ?>

											                            </tbody>
											                        </table>
											                     </div>

											                    <td colspan="2"><br>
											                       <a href ="cetak_pdf_datamaster.php?page=laporan&master=<?php echo $_GET['master']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
											                    </td>
											                            
											                </div>
											            </div>
				                        <?php }elseif($ang=="diagnosa")
				                                {  ?>
				                                	<div class="panel panel-default">
											            <div class="panel-heading"> Data Diagnosa</div>
											                <div class="panel-body">
											                    <div class="table-responsive">
											                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
											                            <thead>
											                                <tr>
											                                <th>No.</th>
											                               		<th class="text-center">Kode Diagnosa</th>
						                                						<th class="text-center">Nama Diagnosa</th>
											                                </tr>
											                            </thead> 
											                            
											                            <tbody>

											                            <?php
											                                    $sql = $koneksi -> query ("SELECT * FROM diagnosa");
											                                    while($data = $sql -> fetch_assoc())
											                                    {
											                                       
											                            ?>

											                            <tr>

											                                <td><?php echo $no++; ?></td>
											                                <td class="text-center"><?php echo $data ['kode_diagnosa'] ?></td>
						                                					<td class="text-center"><?php echo $data ['nama_diagnosa'] ?></td>              
											                            </tr>
											                                <?php 
											                                
											                                } 

											                                ?>

											                            </tbody>
											                        </table>
											                     </div>

											                     <td colspan="2"><br>
											                       <a href ="cetak_pdf_datamaster.php?page=laporan&master=<?php echo $_GET['master']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
											                    </td>
											                            
											                </div>
											            </div>
				                        <?php }elseif($ang=="traphy")
				                                {  ?>
								                      <div class="panel panel-default">
											            <div class="panel-heading"> Data Traphy</div>
											                <div class="panel-body">
											                    <div class="table-responsive">
											                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
											                            <thead>
											                                <tr>
											                                <th>No.</th>
											                               		<th class="text-center">Kode Traphy</th>
						                               							<th class="text-center">Nama Traphy</th>
											                                </tr>
											                            </thead> 
											                            
											                            <tbody>

											                            <?php
											                                    $sql = $koneksi -> query ("SELECT * FROM traphy");
											                                    while($data = $sql -> fetch_assoc())
											                                    {
											                                       
											                            ?>

											                            <tr>

											                                <td><?php echo $no++; ?></td>
											                                <td class="text-center"><?php echo $data ['kode_traphy'] ?></td>
						                                					<td class="text-center"><?php echo $data ['nama_traphy'] ?></td>           
											                            </tr>
											                                <?php 
											                                
											                                } 

											                                ?>

											                            </tbody>
											                        </table>
											                     </div>

											                     <td colspan="2"><br>
											                       <a href ="cetak_pdf_datamaster.php?page=laporan&master=<?php echo $_GET['master']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
											                    </td>
											                            
											                </div>
											            </div>
				                        <?php }elseif($ang=="kosong")
				                                {  ?>
				                                	 <div class="panel panel-default">
											            <div class="panel-heading"> Data</div>
											                <div class="panel-body">
											                    <div class="table-responsive">
											                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
											                            <thead>
											                                <tr>
											                   
											                                </tr>
											                            </thead> 
											                            
											                            <tbody>
											                            <tr>  
											                             	<td class="text-center">Data Kosong</td>           
											                            </tr>
											                                
											                            </tbody>
											                        </table>
											                     </div>

											                     <td colspan="2"><br>
											                       <a href ="cetak_pdf_datamaster.php?page=laporan&master=<?php echo $_GET['master']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
											                    </td>
											                            
											                </div>
											            </div>
											    <?php } ?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> 

            

