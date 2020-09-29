<div class="row">
    <div class="col-md-12">
         <h3 class="page-header"><strong>Data Jasa Servis</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=jenis_servis&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Jasa Servis </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Jenis Servis</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $sql = $koneksi -> query ("select * from jenis_servis");
                                $no=1;
                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>

                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data ['nama_servis'] ?></td>
                                <td class="text-center"><?php echo $data ['harga'] ?></td>
                                
                                <td class="text-center"> 
                                    <a href="?page=jenis_servis&aksi=edit&kd_jenis_servis=<?php echo $data['kd_jenis_servis']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=jenis_servis&aksi=hapus&kd_jenis_servis=<?php echo $data['kd_jenis_servis']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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