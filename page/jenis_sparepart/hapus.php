<?php

	$kode_traphy = @$_GET ['id_sparepart'];

	$koneksi -> query("DELETE FROM jenis_sparepart WHERE id_sparepart = '$kode_traphy'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=jenis_sparepart";
     </script>