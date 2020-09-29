<?php

	$kode_sparepart = @$_GET ['kd_sparepart'];

	$koneksi -> query("delete from sparepart where kd_sparepart = '$kode_sparepart'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=sparepart";
     </script>