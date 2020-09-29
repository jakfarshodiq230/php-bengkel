<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Pengguna</strong></h3>
                    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Pengguna </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th>   
                                <th class="text-center">Nama Pengguna</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $no = 1;
                                $sql = $koneksi -> query ("SELECT * FROM pengguna");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['nama_pengguna'] ?></td>
                                <td><?php echo  $data ['username'] ?></td>
                                <td class="text-center"><?php echo  $data ['level'] ?></td> 
                                 
                                 <td class="text-center">
                                 <a href="?page=pengguna&aksi=hapus&id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                 </td>

                            </tr>

                                    
                                <?php } ?>

                            </tbody>
                        </table>
                     </div>   
                      <a href ="?page=pengguna" class = "btn btn-success" style="margin-top: 20px;">Kembali </a>
                </div>
            </div>

        </div>
</div>