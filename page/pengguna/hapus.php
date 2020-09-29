<?php

	$id = @$_GET ['id'];

	$koneksi -> query("DELETE FROM tb_admin WHERE id = '$id'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=pengguna&aksi=tampil_pengguna";
     </script>