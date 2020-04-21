<?php 
include "koneksi.php"; 
$sql="SELECT * from validasi"; 
$qry=mysqli_query($koneksi, $sql) or die("Proses cetak gagal"); 
echo "<h1>DAFTAR PENDAFTARAN SISWA</h1>
<table width='75%' cellpadding='2' cellspacing='0' border='1'> <tr> 
<th>Tanggal</th> 
<th>Nama Lengkap</th> 
<th>Jenis Kelamin </th>
<th>NISN</th> 
<th>NIK</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>No Registrasi Akte</th>
<th>Agama</th>
<th>Kewarganegaraan</th>
<th>Berkebutuhan Khusus</th>
<th>Alamat</th>
<th>RT</th>
<th>RW</th>
<th>Dusun</th>
<th>Desa</th>
<th>Kecamatan</th>
<th>Kode Pos</th>
<th>Lintang</th>
<th>Bujur</th>
<th>Tempat Tinggal</th>
<th>Moda Transportasi</th>
<th>No KKS</th>
<th>Anak ke-</th>
<th>KPS/PKH</th>
<th>No KPS</th>"; 
$no=1; 
while($hasil=mysqli_fetch_row($qry)){ 
	echo "
	<tr>  
	<td>$hasil[0]</td> 
	<td>$hasil[1]</td> 
	<td>$hasil[2]</td> 
	<td>$hasil[3]</td> 
	<td>$hasil[4]</td> 
	<td>$hasil[5]</td> 
	<td>$hasil[6]</td>
	<td>$hasil[7]</td>
	<td>$hasil[8]</td>
	<td>$hasil[9]</td>
	<td>$hasil[10]</td>
	<td>$hasil[11]</td>
	<td>$hasil[12]</td>
	<td>$hasil[13]</td>
	<td>$hasil[14]</td>
	<td>$hasil[15]</td>
	<td>$hasil[16]</td>
	<td>$hasil[17]</td>
	<td>$hasil[18]</td>
	<td>$hasil[19]</td>
	<td>$hasil[20]</td>
	<td>$hasil[21]</td>
	<td>$hasil[22]</td>
	<td>$hasil[23]</td>
	<td>$hasil[24]</td>
	<td>$hasil[25]</td>
	</tr>"; } 
	echo "</table>"; ?> 
	<br>
	<a href="report.php">Export to excel</a> 