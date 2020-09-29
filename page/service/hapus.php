<?php

	$kode_service = @$_GET ['kd_service'];

	$koneksi -> query("DELETE FROM service WHERE kd_service = '$kode_service'");

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=data_servis";
     </script>