 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">
                input[type=text], select {
                      width: 110px;
                      padding: 10px 15px;
                      margin: 5px 0;
                      display: inline-block;
                      border: 1px solid #ccc;
                      border-radius: 4px;
                      box-sizing: border-box;
                    }
            </style>
            <script>
                //mendeksripsikan variabel yang akan digunakan
                var nota;
                var tanggal;
                var kode;
                var nama;
                var harga;
                var jumlah;
                //var stok;
                $(function(){
                    //meload file pk dengan operator ambil barang dimana nantinya
                    //isinya akan masuk di combo box
                    $("#kode").load("page/penjualan/pk.php","op=ambilbarang");
                    
                    //meload isi tabel
                    $("#barang").load("page/penjualan/pk.php","op=barang");
                    
                    //mengkosongkan input text dengan masing2 id berikut
                    $("#nama").val("");
                    $("#harga").val("");
                    $("#jumlah").val("");
                    //$("#stok").val("");
                                
                    //jika ada perubahan di kode barang
                    $("#kode").change(function(){
                        kode=$("#kode").val();
                        
                        //tampilkan status loading dan animasinya
                        $("#status").html("loading. . .");
                        $("#loading").show();
                        
                        //lakukan pengiriman data
                        $.ajax({
                            url:"page/penjualan/proses.php",
                            data:"op=ambildata&kode="+kode,
                            cache:false,
                            success:function(msg){
                                data=msg.split("|");
                                
                                //masukan isi data ke masing - masing field
                                $("#nama").val(data[0]);
                                $("#harga").val(data[1]);
                                //$("#stok").val(data[3]);
                                $("#jumlah").focus();
                                //hilangkan status animasi dan loading
                                $("#status").html("");
                                $("#loading").hide();
                            }
                        });
                    });
                    
                    //jika tombol tambah di klik
                    $("#tambah").click(function(){
                        kode=$("#kode").val();
                        stok=$("#stok").val();
                        jumlah=$("#jumlah").val();
                        if(kode=="Kode Barang"){
                            alert("Kode Barang Harus diisi");
                            exit();
                        }else if(jumlah > stok){
                            alert("Stok tidak terpenuhi");
                            $("#jumlah").focus();
                            exit();
                        }else if(jumlah < 1){
                            alert("Jumlah beli tidak boleh 0");
                            $("#jumlah").focus();
                            exit();
                        }
                        nama=$("#nama").val();
                        harga=$("#harga").val();
                        
                                                
                        $("#status").html("sedang diproses. . .");
                        $("#loading").show();
                        
                        $.ajax({
                            url:"page/penjualan/pk.php",
                            data:"op=tambah&kode="+kode+"&nama="+nama+"&harga="+harga+"&jumlah="+jumlah,
                            cache:false,
                            success:function(msg){
                                if(msg=="sukses"){
                                    $("#status").html("Berhasil disimpan. . .");
                                }else{
                                    $("#status").html("ERROR. . .");
                                }
                                $("#loading").hide();
                                $("#nama").val("");
                                $("#harga").val("");
                                $("#jumlah").val("");
                                //$("#stok").val("");
                                $("#kode").load("page/penjualan/pk.php","op=ambilbarang");
                                $("#barang").load("page/penjualan/pk.php","op=barang");
                            }
                        });
                    });
                    
                    //jika tombol proses diklik
                    $("#proses").click(function(){
                        nota=$("#nota").val();
                        tanggal=$("#tanggal").val();
                        
                        $.ajax({
                            url:"page/penjualan/pk.php",
                            data:"op=proses&nota="+nota+"&tanggal="+tanggal,
                            cache:false,
                            success:function(msg){
                                if(msg=='sukses'){
                                    $("#status").html('Transaksi Pembelian berhasil');
                                    alert('Transaksi Berhasil');
                                    exit();
                                }else{
                                    $("#status").html('Transaksi Gagal');
                                    alert('Transaksi Gagal');
                                    exit();
                                }
                                $("#kode").load("page/penjualan/pk.php","op=ambilbarang");
                                $("#barang").load("page/penjualan/pk.php","op=barang");
                                $("#loading").hide();
                                $("#nama").val("");
                                $("#harga").val("");
                                $("#jumlah").val("");
                               // $("#stok").val("");
                            }
                        })
                    })
                });
            </script>
                <?php
                    $koneksi = new mysqli ("localhost","root","","klinik");
                    $p=isset($_GET['act'])?$_GET['act']:null;
                    switch($p){
                    default:
                ?>
                    <table class='table table-bordered' style="width:100%;">
                            <tr>
                                <td colspan='4'><a href='?page=penjualan&act=tambah' class='btn btn-primary'><i class="fa fa-plus "> Input Transaksi</i></a></td>
                            </tr>
                                <tr>
                                    <td>No.Nota</td>
                                    <td>Tanggal</td>
                                    <td>Jumlah</td>
                                    <td>Tools</td>
                                </tr>
                                <?php
                                    $query=mysqli_query($koneksi,"select * from penjualan");
                                    while($r=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <td><a href="?page=penjualan&act=detail&nota=<?php echo $r['nonota'] ?>"><?php echo $r['nonota']?></a></td>
                                        <td><?php echo $r['tanggal']?></td>
                                        <td><?php echo 'Rp. ',number_format($r['total'],0,',','.')?></td>
                                        <td><a href='?page=penjualan&act=detail&nota=<?php echo $r['nonota']?>'><button type="button" class="btn btn-primary" id="proses"><i class="fa fa-print "></i>  Cetak </button></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </table>
                    <?php
                        break;
                    case "tambah":
                        $tgl=date('Y-m-d');
                        //untuk autonumber di nota
                        $auto=mysqli_query($koneksi,"select * from penjualan order by nonota desc limit 1");
                        $no=mysqli_fetch_array($auto);
                        $angka=$no['nonota']+1;
                    ?>
                        <div class='navbar-form pull-right'>
                                No. Nota : <input type='text' id='nota' value='<?php echo $angka ?>' readonly >
                                <input type='text' id='tanggal' value='<?php echo $tgl ?>' readonly>   
                            </div>
                            
                            <legend>Transaksi Penjualan</legend>
                            <label>Kode Barang :</label>
                            <select id="kode"></select>
                            <input type="text" id="nama" placeholder="Nama Barang"  readonly>
                            <input type="text" id="harga" placeholder="Harga" class="span2" readonly>
                            <!-- <input type="text" id="stok" placeholder="stok" class="span1" readonly> -->
                            <input type="text" id="jumlah" placeholder="Jumlah Beli" class="span1">
                            <button id="tambah" class="btn btn-primary"><i class="fa fa-plus ">  Tambah</i></button>
                            
                            <span id="status"></span>
                            <table id="barang" class="table table-bordered">
                                    
                            </table>
                            <div class="form-actions">
                            <button type="button" class="btn btn-primary" id="proses"><i class="fa fa-share "></i>  Proses</button>
                            <a href='?page=penjualan'><button type="button" class="btn btn-warning"><i class="fa fa-undo alt "></i>  Kembali</button></a>
                            </div>

                    <?php
                        break;
                    case "detail":
                    ?>



                    <legend>Nota Penjualan</legend>
                    <?php
                        $nota=$_GET['nota'];
                        $query=mysqli_query($koneksi,"select penjualan.nonota,detailpenjualan.kode,tblbarang.nama,
                                           detailpenjualan.harga,detailpenjualan.jumlah,detailpenjualan.subtotal
                                           from detailpenjualan,penjualan,tblbarang
                                           where penjualan.nonota=detailpenjualan.nonota and tblbarang.kode=detailpenjualan.kode
                                           and detailpenjualan.nonota='$nota'");
                        $nomor=mysqli_fetch_array(mysqli_query($koneksi,"select * from penjualan where nonota='$nota'"));
                        ?>
                        <div class='navbar-form pull-right'>
                                Nota : <input type='text' value="<?php echo $nomor['nonota']?>" disabled>
                                <input type='text' value="<?php echo $nomor['tanggal']?>" disabled>
                        </div>
                        <table class='table table-hover'>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>Harga</td>
                                        <td>Jumlah</td>
                                        <td>Subtotal</td>
                                    </tr>
                                </thead>
                                <?php
                                $no=1;
                                    while($r=mysqli_fetch_row($query)){
                                ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $r['2']?></td>
                                        <td><?php echo 'Rp. ',number_format($r['3'],0,',','.')?></td>
                                        <td><?php echo $r['4']?></td>
                                        <td><?php echo 'Rp. ',number_format($r['5'],0,',','.')?></td>
                                    </tr>
                                <?php } ?>
                                    <tr>
                                        <td colspan='4'><h4 align='right'>Total :</h4></td>
                                        <td colspan='5'><h4><?php echo 'Rp. ',number_format($nomor['total'],0,',','.')?></h4></td>
                                    </tr>
                                    </table>
                                <a href='?page=penjualan'><button type="button" class="btn btn-warning"><i class="fa fa-undo alt "></i>  Kembali</button></a>
                    <?php
                        break;    
                    }
                    ?>