<?php

	$kode_motor = @$_GET ['kd_motor'];

	$koneksi -> query("DELETE FROM motor WHERE kd_motor = '$kode_motor'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=motor";
     </script>