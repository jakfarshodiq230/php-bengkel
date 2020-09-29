<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Penjualan</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=penjualan&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Penjualan </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th>   
                                <th class="text-center">Nama Penjualan</th>
                                <th class="text-center">Jenis Sparepart</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $no = 1;
                                $sql = $koneksi -> query ("SELECT * FROM penjualan");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['nama_penjualan'] ?></td>
                                 <td><?php echo $data ['jenis_sparepart'] ?></td>
                                <td><?php echo $data ['tanggal_terjual'] ?></td>
                                <td class="text-center"><?php echo $data ['no_hp'] ?></td>
                                <td><?php echo $data ['alamat'] ?></td>
                                <td><?php echo $data ['harga'] ?></td>

                                
                                <td class="text-center"> 
                                    <a href="?page=penjualan&aksi=edit&kd_penjualan=<?php echo $data['kd_penjualan']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=penjualan&aksi=hapus&kd_penjualan=<?php echo $data['kd_penjualan']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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
