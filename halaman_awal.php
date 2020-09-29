<?php
//session_start();

$koneksi = new mysqli("localhost", "root", "", "db_bengkel_dewi");

//cek apakah user sudah login
?>


<div id="page-inner">
    <div class="row">
        <div class="col-md-12">

            <h3 align="">Selamat Datang di Sistem Informasi Nusantara Motor</h3> <br>



            <hr />

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-red set-icon">
                            <i class="fa fa-users fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            //$sql = $koneksi -> query ("SELECT count(*) AS jumlah FROM pasien");
                            //$data = $sql -> fetch_assoc();
                            ?>

                            <p class="main-text"><?php //echo $data ['jumlah'] 
                                                    ?></p>
                            <p class="text-muted">Data Sparepart</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            // $sql = $koneksi -> query ("SELECT count(*) AS jumlah FROM dokter");
                            //$data = $sql -> fetch_assoc();
                            ?>

                            <p class="main-text"><?php //echo $data ['jumlah'] 
                                                    ?></p>
                            <p class="text-muted">Data Motor</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-blue set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            //$sql = $koneksi -> query ("SELECT count(*) AS jumlah FROM perawat");
                            //$data = $sql -> fetch_assoc();
                            ?>

                            <p class="main-text"><?php //echo $data ['jumlah'] 
                                                    ?></p>
                            <p class="text-muted">Data Service</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            // $sql = $koneksi -> query ("SELECT count(*) AS jumlah FROM diagnosa");
                            //$data = $sql -> fetch_assoc();
                            ?>

                            <p class="main-text"><?php //echo $data ['jumlah'] 
                                                    ?></p>
                            <p class="text-muted">Data Harga</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            // $sql = $koneksi -> query ("SELECT count(*) AS jumlah FROM traphy");
                            // $data = $sql -> fetch_assoc();
                            ?>

                            <p class="main-text"><?php //echo $data ['jumlah'] 
                                                    ?></p>
                            <p class="text-muted">Data Jenis Sparepart</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-brown set-icon">
                            <i class="fa fa-user fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM pengguna");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Penjualan</p>
                        </div>
                    </div>
                </div>







            </div>

            <!-- /. ROW  -->
            <hr />

        </div>
    </div>
</div>