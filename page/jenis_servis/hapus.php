<?php

	$kode_jenis_servis = @$_GET ['kd_jenis_servis'];

	$koneksi -> query("DELETE FROM `jenis_servis` WHERE `kd_jenis_servis` = '$kode_jenis_servis'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=jenis_servis";
     </script>