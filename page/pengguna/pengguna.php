<?php
session_start();
 
//cek apakah user sudah login
if(!isset($_SESSION['username'])){  
    die("");//jika belum login jangan lanjut..
}
?>

<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><i class="fa fa-user fa-1x"></i><strong>   Pengguna</strong></h3>
    <div class="col-md-6">
                    <!-- Advanced Tables -->
        <a href ="?page=pengguna&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Admin </a>
        <a href ="?page=pengguna&aksi=tampil_pengguna" class = "btn btn-warning" style="margin-bottom: 5px;">Lihat Data Admin </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Pengguna </div>
                <div class="panel-body">
                    <div class="row">

                        <?php                               
                              // $sql = $koneksi -> query ("select * from tb_user WHERE username='$_SESSION['admin']'");
                         $sql = $koneksi -> query ("select * from pengguna WHERE kode_pengguna='".$_SESSION['username']."'");
                         $data = $sql -> fetch_assoc();
                        ?>
                   
                        <form method="post" role="form" action="">


                            <div class="col-lg-12">
                                <div class="form-group">
                                <label>Nama</label>
                                    <input type="text" class="form-control" value="<?php echo $data ['nama_pengguna'] ?>" name="nama">
                                </div>
                            <fieldset disabled="disabled">
                                <div class="form-group">
                                <label>Username</label>
                                    <input type="text" class="form-control" value="<?php echo $data ['username'] ?>">
                                </div>
                                <div class="form-group">
                                <label>Level</label>
                                    <input type="text" class="form-control" value="<?php echo $data ['level'] ?>">
                                </div>
                            </fieldset>
                                <div class="form-group">
                                <label>Ganti Password</label>
                                    <input type="password" class="form-control" placeholder="Password Baru" name="password_baru" required/>
                                </div>
                                <div>
                                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary " style="margin-top: 5px;">   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>

<?php

    if(@$_POST['ubah']){
        //membuat variabel untuk menyimpan data inputan yang di isikan di form
        $nama = @$_POST['nama'];
        $password_baru = @$_POST['password_baru'];
        $id        = @$_SESSION['username']; //ini dari session saat login
                    
            $ubah         = $koneksi-> query ("UPDATE pengguna SET password='$password_baru',nama = '$nama' WHERE kode_pengguna='$id'");
            if($ubah){
                //kondisi jika proses query UPDATE berhasil
                ?>

                    <script type="text/javascript">
                    alert ("Password Berhasil Diubah")
                    window.location.href="?page=pengguna&aksi=kembali";
                    </script>

                <?php

            }else{
                //kondisi jika proses query gagal

                 ?>

                    <script type="text/javascript">
                    alert ("Gagal merubah password")
                    </script>

                <?php
                
            }
        }
?>