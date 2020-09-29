<?php
            // $koneksi = new mysqli ("localhost","root","","klinik");
			$sql = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='1'");
			
            $row = mysqli_fetch_array($sql); 
            
            $sql1 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='2'");
			
            $row1 = mysqli_fetch_array($sql1);
            
            $sql2 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='3'");
			
            $row2 = mysqli_fetch_array($sql2);
            
            $sql3 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='4'");
			
            $row3 = mysqli_fetch_array($sql3);
            
            $sql4 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='5'");
			
            $row4 = mysqli_fetch_array($sql4);
            
            $sql5 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='6'");
			
            $row5 = mysqli_fetch_array($sql5);
            
            $sql6 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='7'");
			
            $row6 = mysqli_fetch_array($sql6);
            
            $sql7 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='8'");
			
            $row7 = mysqli_fetch_array($sql7);
            
            $sql8 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='9'");
			
            $row8 = mysqli_fetch_array($sql8);
            
            $sql9 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='10'");
			
            $row9 = mysqli_fetch_array($sql9);
            
            $sql10 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='11'");
			
            $row10 = mysqli_fetch_array($sql10);
            
            $sql11 = mysqli_query($koneksi, "SELECT COUNT(tanggal) AS total FROM penjualan, detailpenjualan WHERE penjualan.`nonota` = detailpenjualan.`nonota` AND MONTH(tanggal)='12'");
			
            $row11 = mysqli_fetch_array($sql11);
            
            ?>
<table id="TableSiswa" class="table table-bordered" border="0" align="center" cellpadding="10">
                <tr>
                <th>Bulan</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>Mei</th>
                <th>Jun</th>
                <th>Jul</th>
                <th>Ags</th>
                <th>Sep</th>
                <th>Okt</th>
                <th>Nov</th>
                <th>Des</th>
                </tr>
            
                <tr>
                <td>Penjualan</td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row1['total'];?></td>
                <td><?php echo $row2['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                </tr> 
                <?php
                $sqlku = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='1'");
			
                $rowku = mysqli_fetch_array($sqlku); 
                
                $sqlku1 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='2'");
			
                $rowku1 = mysqli_fetch_array($sqlku1); 
                
                $sqlku2 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='3'");
			
                $rowku2 = mysqli_fetch_array($sqlku2); 
                
                $sqlku3 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='4'");
			
                $rowku3 = mysqli_fetch_array($sqlku3); 
                
                $sqlku4 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='5'");
			
                $rowku4 = mysqli_fetch_array($sqlku4); 
                
                $sqlku5 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='6'");
			
                $rowku5 = mysqli_fetch_array($sqlku5); 
                
                $sqlku6 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='7'");
			
                $rowku6 = mysqli_fetch_array($sqlku6); 
                
                $sqlku7 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='8'");
			
                $rowku7 = mysqli_fetch_array($sqlku7); 
                
                $sqlku8 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='9'");
			
                $rowku8 = mysqli_fetch_array($sqlku8); 
                
                $sqlku9 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='10'");
			
                $rowku9 = mysqli_fetch_array($sqlku9); 
                
                $sqlku10 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='11'");
			
                $rowku10 = mysqli_fetch_array($sqlku10); 
                
                $sqlku11 = mysqli_query($koneksi, "SELECT SUM(harga) AS total1 FROM service WHERE MONTH(tanggal_servis)='12'");
			
                $rowku11 = mysqli_fetch_array($sqlku11); 
                ?>
                
                <tr>
                <td>Servis</td>
                <td><?php echo $rowku['total1'];?></td>
                <td><?php echo $rowku1['total1'];?></td>
                <td><?php echo $rowku2['total1'];?></td>
                <td><?php echo $rowku3['total1'];?></td>
                <td><?php echo $rowku4['total1'];?></td>
                <td><?php echo $rowku5['total1'];?></td>
                <td><?php echo $rowku6['total1'];?></td>
                <td><?php echo $rowku7['total1'];?></td>
                <td><?php echo $rowku8['total1'];?></td>
                <td><?php echo $rowku9['total1'];?></td>
                <td><?php echo $rowku10['total1'];?></td>
                <td><?php echo $rowku11['total1'];?></td>
                </tr>
        </table>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="dist/js/jquery-1.4.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>-->
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="dist/js/jquery.fusioncharts.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script>
    $('#TableSiswa').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        width: "1050",
        height: "350",
        dataFormat: "HTMLTable",
        renderAt: "chart-container",
        dataOption:{
            chartAttributes:{
                caption: "Annual Stock Graph",
                xAxisName: "Month",
                yAxisName: "Qty Stock",
                decimalPrecision: "0"
            }
        }
    });

        </script>