<?php

	$kode_diagnosa = @$_GET ['kode_diagnosa'];

	$koneksi -> query("DELETE FROM diagnosa WHERE kode_diagnosa = '$kode_diagnosa'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=diagnosa";
     </script>