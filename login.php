<?php
ob_start();
session_start();
$koneksi = new mysqli("localhost", "root", "", "db_bengkel_dewi");
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

</head>

<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <li class="text-center">
          <img src="assets/img/yamaha nusantara motor.png" class="user-image img-responsive" />
          <h4>Sistem Informasi Penjualan Sparepart dan Jasa Service Motor</h4>
          <h4>NUSANTARA MOTOR </h4>
        </li>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>
              <li class="text-center"> Masukkan Username dan Password
            </strong></li>
          </div>
          <div class="panel-body">

            <form role="form" method="POST">
              <br />
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>

              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass" />
              </div>

              <input type="submit" name="login" value="Login" class="btn btn-primary btn-primary btn-block">

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>

</body>

</html>

<?php

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $sql = $koneksi->query("SELECT * FROM pengguna WHERE username ='$username' AND password ='$pass'");

  $data = $sql->fetch_assoc();

  $ketemu = $sql->num_rows;

  if ($ketemu >= 1) {
    session_start();

    if ($data['level'] == "admin") {

      $_SESSION['admin'] = $username;
      $_SESSION['username'] = $data['kode_pengguna'];

      header("location:index.php");
    }
  } else {
?>
    <script type="text/javascript">
      alert("Login Gagal, Username dan Password Anda SALAH")
    </script>

<?php
  }
}
?>