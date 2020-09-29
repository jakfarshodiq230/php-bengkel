<div class="row">
    <div class="col-md-12">
         <h3 class="page-header"><strong>Data Sparepart</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=sparepart&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Sparepart </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Sparepart</th>
                                <th class="text-center">jenis Sparepart</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $sql = $koneksi -> query ("select * from sparepart");
                                $no=1;
                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>

                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data ['kd_sparepart'] ?></td>
                                <td class="text-center"><?php echo $data ['jenis_sparepart'] ?></td>
                                
                                
                                <td class="text-center"> 
                                    <a href="?page=sparepart&aksi=edit&kd_sparepart=<?php echo $data['kd_sparepart']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=sparepart&aksi=hapus&kd_sparepart=<?php echo $data['kd_sparepart']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                </td> 
                                          
                            </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                     </div>
                            
                </div>
            </div>

        </div>
</div>