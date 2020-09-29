<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong> Tambah Admin</strong></h3>
    <div class="col-md-6">
                    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Pengguna </div>
                <div class="panel-body">
                    <div class="row">
                   
                        <form method="post" role="form" action="">


                            <div class="col-lg-12">
                                <div class="form-group">
                                <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" name="nama" required>
                                </div>
                          
                                <div class="form-group">
                                <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level" required>
                                            <option value="-" selected>- Pilih Level - </option>
                                            <option value="admin">Admin</option>
                                </select>
                                    
                                </div>
                            
                                <div class="form-group">
                                <label>Password</label>
                                    <input type="Password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div>
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary " style="margin-top: 5px;">   
                                     <a href ="?page=pengguna" class = "btn btn-success" style="margin-top: 5px;">Kembali </a>
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

    $nama = @$_POST ['nama'];
    $username = @$_POST ['username'];
    $password = @$_POST ['password'];
    $level = @$_POST ['level'];

    $simpan = $_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO pengguna (nama_pengguna, username, password, level) VALUES ('$nama','$username','$password','$level')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=pengguna";
                </script>

                <?php
        }
    }

    ?> 