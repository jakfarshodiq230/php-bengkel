<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Service</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=service" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Service </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th>   
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Service</th>
                                <th class="text-center">Tanggal Service</th>
                                <th class="text-center">Tipe Motor</th>
                                <th class="text-center">No Handphone</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $no = 1;
                                $sql = $koneksi -> query ("SELECT * FROM service,jenis_servis WHERE service.`jenis_servis`= jenis_servis.`kd_jenis_servis`");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['nama'] ?></td>
                                 <td><?php echo $data ['nama_servis'] ?></td>
                                <td><?php echo $data ['tanggal_servis'] ?></td>
                                <td><?php echo $data ['tipe_motor'] ?></td>
                                <td class="text-center"><?php echo $data ['no_hp'] ?></td>
                                <td><?php echo $data ['alamat'] ?></td>
                                <td><?php echo $data ['harga'] ?></td>

                                
                                <td class="text-center"> 
                                    <a href="?page=data_servis&aksi=edit&kd_service=<?php echo $data['kd_service']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=data_servis&aksi=hapus&kd_service=<?php echo $data['kd_service']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
