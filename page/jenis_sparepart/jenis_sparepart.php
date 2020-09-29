<?php $koneksi = new mysqli ("localhost","root","","nusantara_motor");  ?>
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Jenis Sparepart</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=jenis_sparepart&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data jenis Sparepart </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th> 
                                <th class="text-center">Jensi Motor</th>  
                                <th class="text-center">Nama Sparepart</th>  
                                <th class="text-center">jenis Sparepart</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $sql = $koneksi -> query ("SELECT * FROM `jenis_sparepart`,`motor`,`sparepart` where motor.kd_motor=jenis_sparepart.kd_motor AND sparepart.kd_sparepart=jenis_sparepart.kd_sparepart");
                                $no=1;
                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['jenis_motor'] ?></td>
                                <td><?php echo  $data ['jenis_sparepart'] ?></td>
                                <td><?php echo  $data ['tipe_sparepart'] ?></td>
                                 <td>Rp.<?php echo  $data ['harga'] ?></td>
                                <td class="text-center"> 
                                    <a href="?page=jenis_sparepart&aksi=edit&id_sparepart=<?php echo $data['id_sparepart']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=jenis_sparepart&aksi=hapus&id_sparepart=<?php echo $data['id_sparepart']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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
