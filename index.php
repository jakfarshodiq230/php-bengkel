<?php

session_start();
$koneksi = new mysqli("localhost", "root", "", "db_bengkel_dewi");
if ($_SESSION['admin']) {



?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NUSANTARA MOTOR</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
        <script type="text/javascript" src="assets/cart/Chart.js"></script>

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Nusantara Motor</a>
                </div>

                <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"><?php echo "Tanggal : " . date("d-M-Y"); ?> &nbsp; <a onclick="return confirm('Anda Yakin Ingin Keluar ?')" href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">

                    <ul class="nav" id="main-menu">
                        <div style="color: white;">
                            <li class="text-center">
                                <img src="assets/img/yamaha nusantara motor.png" class="user-image img-responsive" width="128" height="128" />
                                <h5>NUSANTARA</h5>
                                <h5>MOTOR</h5>
                            </li>
                        </div>
                        <li>
                            <a></a>
                        </li>
                        <li>
                            <a href="?page=halaman1"><i class="glyphicon glyphicon-home fa-1x"></i> Home</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users fa-1x"></i>Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=sparepart"><i class="fa fa-edit fa-1x"></i> Data Sparepart</a>
                                </li>
                                <li>
                                    <a href="?page=motor"><i class="fa fa-edit fa-1x"></i> Data Motor</a>
                                </li>
                                <li>
                                    <a href="?page=jenis_sparepart"><i class="fa fa-edit fa-1x"></i> Data Jenis Sparepart</a>
                                </li>
                                <li>
                                    <a href="?page=jenis_servis"><i class="fa fa-edit fa-1x"></i> Data Jenis Servis</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users fa-1x"></i>Kelola Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=service"><i class="fa fa-edit fa-1x"></i> Input Service</a>
                                </li>
                                <li>
                                    <a href="?page=penjualan"><i class="fa fa-edit fa-1x"></i> Input Penjualan</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""><i class="fa fa-print fa-1x"></i> Data Service <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=data_servis">Data Servis</a>
                                </li>
                                <li>
                                    <a href="?page=rekap&angkatan=Semua">Kelola Transaksi</a>
                                </li>
                                <li>
                                    <a href="?page=rekap&angkatan=detail">Data Servis</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=pengguna"><i class="fa fa-user fa-1x"></i> Pengguna</a>
                        </li>
                        <li>
                            <a href="?page=statistika"><i class="fa fa-user fa-1x"></i>Grafik</a>
                        </li>


                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            $page = @$_GET['page'];
                            $aksi = @$_GET['aksi'];

                            if ($page == "halaman1") {
                                if ($aksi == "") {
                                    include "halaman_awal.php";
                                }
                            } elseif ($page == "service") {
                                if ($aksi == "") {
                                    include "page/service/input.php";
                                }
                            }

                            // elseif ($page == "ps") {
                            //     if ($aksi == "") { 
                            //          include "page/service/service.php";
                            //     }
                            // }

                            elseif ($page == "tampil") {
                                if ($aksi == "") {
                                    include "page/service/tampil.php";
                                } elseif ($aksi == "kembali") {
                                    include "page/service/tampil.php";
                                } elseif ($aksi == "detail") {
                                    include "page/service/detail_pm.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/service/cetak.php";
                                } elseif ($aksi == "edit") {
                                    include "page/service/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/service/hapus.php";
                                }
                            } elseif ($page == "sparepart") {
                                if ($aksi == "") {
                                    include "page/sparepart/sparepart.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/sparepart/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/sparepart/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/sparepart/hapus.php";
                                }
                            } elseif ($page == "motor") {
                                if ($aksi == "") {
                                    include "page/motor/motor.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/motor/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/motor/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/motor/hapus.php";
                                }
                            } elseif ($page == "penjualan") {
                                if ($aksi == "") {
                                    include "page/proses_penjualan/transaksi.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/proses_penjualan/hapus.php";
                                }
                            } elseif ($page == "jenis_sparepart") {
                                if ($aksi == "") {
                                    include "page/jenis_sparepart/jenis_sparepart.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/jenis_sparepart/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/jenis_sparepart/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/jenis_sparepart/hapus.php";
                                }
                            } elseif ($page == "jenis_servis") {
                                if ($aksi == "") {
                                    include "page/jenis_servis/jenis_servis.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/jenis_servis/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/jenis_servis/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/jenis_servis/hapus.php";
                                }
                            } elseif ($page == "data_servis") {
                                if ($aksi == "") {
                                    include "page/service/detailservice.php";
                                } elseif ($aksi == "edit") {
                                    include "page/service/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/service/hapus.php";
                                }
                            } elseif ($page == "statistika") {
                                if ($aksi == "") {
                                    include "page/grafik_penjualan/grafik.php";
                                }
                            }

                            // elseif ($page == "tampil_lap") {
                            //     if ($aksi == "") {
                            //         include "page/laporan/tampil_lap.php";
                            //     }
                            // }

                            // elseif ($page == "rekap") {
                            //     if ($aksi == "") {
                            //         include "page/rekap/tampil_rek.php";
                            //     }
                            // }

                            // elseif ($page == "tampil_rek") {
                            //     if ($aksi == "") {
                            //         include "page/rekap/tampil_rek.php";
                            //     }
                            // }

                            elseif ($page == "pengguna") {
                                if ($aksi == "") {
                                    include "page/pengguna/pengguna.php";
                                } elseif ($aksi == "kembali") {
                                    include "halaman_awal.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                } elseif ($aksi == "tampil_pengguna") {
                                    include "page/pengguna/tampil.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }
                            } elseif ($page == "") {

                                include "halaman_awal.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <script src="assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- CUSTOM SCRIPTS -->
            <script src="assets/js/custom.js"></script>


    </body>

    </html>


<?php

} else {

    header("location:login.php");
}

?>