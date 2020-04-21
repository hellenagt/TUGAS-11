<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color:#FF0000;}
		.data {background-color: blue; color: white; text-align: center; font-size: 20px;}
		.card-header {background-color: orange; font-size: 20px; color: white;}
		.card { margin-left: 200px; }
	</style>
</head>
<body>
<?php

 $error_tanggal = "";
 $error_nama = "";
 $error_jk = "";
 $error_nisn = "";
 $error_nik = "";
 $error_tl = "";
 $error_tgl = "";
 $error_noregis = "";
 $error_agama = "";
 $error_kwn = "";
 $error_bk = "";
 $error_alamat = "";
 $error_rt = "";
 $error_rw = "";
 $error_dusun = "";
 $error_desa = "";
 $error_kec = "";
 $error_pos = "";
 $error_lintang = "";
 $error_bujur = "";
 $error_tt = "";
 $error_mt = "";
 $error_kks = "";
 $error_anak = "";
 $error_pkh = "";
 $error_kps = "";

 $tanggal ="";
 $nama ="";
 $jk ="";
 $nisn ="";
 $nik ="";
 $tl ="";
 $tgl ="";
 $noregis ="";
 $agama ="";
 $kwn ="";
 $bk ="";
 $alamat ="";
 $rt ="";
 $rw ="";
 $dusun ="";
 $desa ="";
 $kec ="";
 $pos ="";
 $lintang ="";
 $bujur ="";
 $tt ="";
 $mt ="";
 $kks ="";
 $anak ="";
 $pkh ="";
 $kps ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 	if (empty($_POST["tanggal"]))
	{
		$error_tanggal = "Tanggal tidak boleh kosong";
	}
	else
	{
		$tanggal = cek_input($_POST["tanggal"]);

	}
	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else 
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama))
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["jk"]))
	{
		$error_jk = "<br> Jenis Kelamin tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["jk"]); 
	}
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]); 
		if (!is_numeric($_POST["nisn"])) 
		{
			$error_nisn = "NISN hanya boleh angka";
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]); 
		if (!is_numeric($_POST["nik"])) 
		{
			$error_nik = "NIK hanya boleh angka";
		}
	}
	if (empty($_POST["tl"]))
	{
		$error_tl = "Tempat Lahir tidak boleh kosong";
	}
	else
	{
		$tl = cek_input($_POST["tl"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $tl))
		{
			$error_tl = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["tgl"]))
	{
		$error_tgl = "Tanggal Lahir tidak boleh kosong";
	}
	else
	{
		$tgl = cek_input($_POST["tgl"]); 
	}
	if (empty($_POST["noregis"]))
	{
		$error_noregis = "Nomer registrasi tidak boleh kosong";
	}
	else
	{
		$noregis = cek_input($_POST["noregis"]);
		if (!is_numeric($_POST["noregis"])) 
		{
			$error_noregis = "Nomer registrasi hanya boleh angka";
		}
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $agama))
		{
			$error_agama = "Inputan hanya boleh huruf dan spasi";
		} 
	}
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "<br> Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]); 
	}
	if (empty($_POST["bk"]))
	{
		$error_bk = "Berkebutuhan Khusus tidak boleh kosong";
	}
	else
	{
		$bk = cek_input($_POST["bk"]); 
	}
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat jalan tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]); 
	}
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
		if (!is_numeric($_POST["rt"])) 
		{
			$error_rt = "RT hanya boleh angka";
		} 
	}
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
		if (!is_numeric($_POST["rw"])) 
		{
			$error_RW = "RW hanya boleh angka";
		} 
	}
	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Dusun tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf dan spasi";
		} 
	}
	if (empty($_POST["desa"]))
	{
		$error_desa = "Desa tidak boleh kosong";
	}
	else
	{
		$desa = cek_input($_POST["desa"]); 
		if (!preg_match("/^[a-zA-Z ]*$/", $desa))
		{
			$error_desa = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["kec"]))
	{
		$error_kec = "Kecamatan tidak boleh kosong";
	}
	else
	{
		$kec = cek_input($_POST["kec"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $kec))
		{
			$error_kec = "Inputan hanya boleh huruf dan spasi";
		} 
	}
	if (empty($_POST["pos"]))
	{
		$error_pos = "Kode pos tidak boleh kosong";
	}
	else
	{
		$pos = cek_input($_POST["pos"]); 
		if (!is_numeric($_POST["pos"])) 
		{
			$error_pos = "Kode pos hanya boleh angka";
		}
	}
	if ($_POST["lintang"]){
		$lintang = cek_input($_POST["lintang"]); 
	}
	if ($_POST["bujur"]){
		$bujur = cek_input($_POST["bujur"]); 
	}
	if (empty($_POST["tt"]))
	{
		$error_tt = "Tempat tinggal tidak boleh kosong";
	}
	else
	{
		$tt = cek_input($_POST["tt"]); 
	}
	if (empty($_POST["mt"]))
	{
		$error_mt = "Moda Transportasi tidak boleh kosong";
	}
	else
	{
		$mt = cek_input($_POST["mt"]); 
	}
	if ($_POST["kks"])
	{
		$kks = cek_input($_POST["kks"]); 
		if (!is_numeric($_POST["kks"])) 
		{
			$error_kks = "Nomer KKS hanya boleh angka";
		}
	}
	if (empty($_POST["anak"]))
	{
		$error_anak = "Anak keberapa tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);
		if (!is_numeric($_POST["anak"])) 
		{
			$error_anak = "Anak keberapa hanya boleh angka";
		} 
	}
	if (empty($_POST["pkh"]))
	{
		$error_pkh = "<br> Penerima KPS/PKH tidak boleh kosong";
	}
	else
	{
		$pkh = cek_input($_POST["pkh"]); 
	}
	if ($_POST["kps"]){
		$kps = cek_input($_POST["kps"]); 
	}

}
function cek_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="row">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">
				<center>FORMULIR PESERTA DIDIK</center>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					<div class="form-group row">
					<label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
					<div class="col-sm-9">
						<input type="text" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : "");?>" id="tanggal" placeholder = "yyyy-mm-dd" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
					</div>
				</div>
			<div class="data">
				DATA PRIBADI
			</div><br>
				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder = "Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-9">
						<input type="radio" name="jk" class="<?php if(isset($jk) && $jk=="Laki") echo("checked");?>" value="Laki-Laki">Laki - Laki
						<input type="radio" name="jk"  class="<?php if(isset($jk) && $jk=="Perempuan") echo("checked");?>" value="Perempuan">Perempuan<span class="warning"><?php echo $error_jk;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="nisn" class="col-sm-3 col-form-label">NISN</label>
					<div class="col-sm-9">
						<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-valid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="nik" class="col-sm-3 col-form-label">NIK/No. KITAS (untuk WNA)</label>
					<div class="col-sm-9">
						<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-valid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="tl" class="col-sm-3 col-form-label">Tempat Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="tl" class="form-control <?php echo($error_tl !="" ? "is-valid" : ""); ?>" id="tl" placeholder="Tempat Lahir" value="<?php echo $tl; ?>"><span class="warning"><?php echo $error_tl;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="tgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="tgl" class="form-control <?php echo($error_tgl !="" ? "is-valid" : ""); ?>" id="tgl" placeholder="yyyy-mm-dd" value="<?php echo $tgl; ?>"><span class="warning"><?php echo $error_tgl;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="noregis" class="col-sm-3 col-form-label">No Registrasi Akta Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="noregis" class="form-control <?php echo($error_noregis !="" ? "is-valid" : ""); ?>" id="noregis" placeholder="No Registrasi Akta Lahir" value="<?php echo $noregis; ?>"><span class="warning"><?php echo $error_noregis;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="agama" class="col-sm-3 col-form-label">Agama dan Kepercayaan</label>
					<div class="col-sm-9">
						<select name="agama" class="form-control">	
							<option value="Islam" class="<?= ($_POST["agama"]=="1")?"selected":"" ?>">Islam</option>
							<option value="Katolik" class="<?= ($_POST["agama"]=="3")?"selected":"" ?>">Katolik</option>
							<option value="Kristen" class="<?= ($_POST["agama"]=="2")?"selected":"" ?>">Kristen</option>
							<option value="Hindu" class="<?= ($_POST["agama"]=="5")?"selected":"" ?>">Hindu</option>
							<option value="Budha" class="<?= ($_POST["agama"]=="4")?"selected":"" ?>">Budha</option>
						</select><span class="warning"><?php echo $error_agama;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-9">
						<input type="radio" name="kwn" class="<?php if(isset($kwn) && $kwn=="WNI") echo("checked");?>" value="Indonesia (WNI)">Indonesia (WNI)
						<input type="radio" name="kwn"  class="<?php if(isset($kwn) && $kwn=="WNA") echo("checked");?>" value="Asing (WNA)">Asing (WNA)<span class="warning"><?php echo $error_kwn;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="bk" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-9">
						<input type="text" name="bk" class="form-control <?php echo($error_bk !="" ? "is-valid" : ""); ?>" id="bk" placeholder="Berkebutuhan Khusus" value="<?php echo $bk; ?>"><span class="warning"><?php echo $error_bk;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="alamat" class="col-sm-3 col-form-label">Alamat Jalan</label>
					<div class="col-sm-9">
						<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-valid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="rt" class="col-sm-3 col-form-label">RT</label>
					<div class="col-sm-9">
						<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-valid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="rw" class="col-sm-3 col-form-label">RW</label>
					<div class="col-sm-9">
						<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-valid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="dusun" class="col-sm-3 col-form-label">Nama Dusun</label>
					<div class="col-sm-9">
						<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-valid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="desa" class="col-sm-3 col-form-label">Nama Kelurahan/Desa</label>
					<div class="col-sm-9">
						<input type="text" name="desa" class="form-control <?php echo($error_desa !="" ? "is-valid" : ""); ?>" id="desa" placeholder="Kelurahan/Desa" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="kec" class="col-sm-3 col-form-label">Kecamatan</label>
					<div class="col-sm-9">
						<input type="text" name="kec" class="form-control <?php echo($error_kec !="" ? "is-valid" : ""); ?>" id="kec" placeholder="Kecamatan" value="<?php echo $kec; ?>"><span class="warning"><?php echo $error_kec;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pos" class="col-sm-3 col-form-label">Kode Pos</label>
					<div class="col-sm-9">
						<input type="text" name="pos" class="form-control <?php echo($error_pos !="" ? "is-valid" : ""); ?>" id="pos" placeholder="Kode Pos" value="<?php echo $pos; ?>"><span class="warning"><?php echo $error_pos;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="lintang" class="col-sm-3 col-form-label">Lintang</label>
					<div class="col-sm-9">
						<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-valid" : ""); ?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="bujur" class="col-sm-3 col-form-label">Bujur</label>
					<div class="col-sm-9">
						<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-valid" : ""); ?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="tt" class="col-sm-3 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-9">
						<select name="tt" class="form-control">	
							<option value="Bersama Orang Tua" class="<?= ($_POST["tt"]=="1")?"selected":"" ?>">Bersama Orang Tua</option>
							<option value="Bersama Wali" class="<?= ($_POST["tt"]=="3")?"selected":"" ?>">Bersama Wali</option>
							<option value="Tinggal Sendiri" class="<?= ($_POST["tt"]=="2")?"selected":"" ?>">Tinggal Sendiri</option>
						</select><span class="warning"><?php echo $error_tt;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="mt" class="col-sm-3 col-form-label">Moda Transportasi</label>
					<div class="col-sm-9">
						<input type="text" name="mt" class="form-control <?php echo($error_mt !="" ? "is-valid" : ""); ?>" id="mt" placeholder="Moda Transportasi" value="<?php echo $mt; ?>"><span class="warning"><?php echo $error_mt;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="kks" class="col-sm-3 col-form-label">No KKS(Kartu Keluarga Sejahtera)</label>
					<div class="col-sm-9">
						<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-valid" : ""); ?>" id="kks" placeholder="No KKS(Kartu Keluarga Sejahtera)" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="anak" class="col-sm-3 col-form-label">Anak keberapa(berdasakan KK)</label>
					<div class="col-sm-9">
						<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-valid" : ""); ?>" id="anak" placeholder="Anak Ke-" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pkh" class="col-sm-3 col-form-label">Penerima KPS/PKH</label>
					<div class="col-sm-9">
						<input type="radio" name="pkh" class="<?php if(isset($pkh) && $pkh=="Ya") echo("checked");?>" value="Ya">Ya
						<input type="radio" name="pkh"  class="<?php if(isset($pkh) && $pkh=="Tidak") echo("checked");?>" value="Tidak">Tidak<span class="warning"><?php echo $error_pkh;?></span>
					</div>
				</div>
					<div class="form-group row">
					<label form="kps" class="col-sm-3 col-form-label">No KPS/PKH(apabila menerima)</label>
					<div class="col-sm-9">
						<input type="text" name="kps" class="form-control <?php echo($error_kps !="" ? "is-valid" : ""); ?>" id="kps" placeholder="No KPS/PKH" value="<?php echo $kps; ?>"><span class="warning"><?php echo $error_kps;?></span>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Daftar</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum10";

$conn = mysqli_connect($servername,$username,$password)or die("Proses simpan ke database gagal");
$con = mysqli_select_db($conn,$dbname);

if (!empty($tanggal) && !empty($nama) && !empty($jk) && !empty($nisn) && !empty($nik) && !empty($tl) && !empty($tgl) && !empty($noregis) && !empty($agama) && !empty($kwn) && !empty($bk) && !empty($alamat) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($desa) && !empty($kec) && !empty($pos) && !empty($tt) && !empty($mt) && !empty($anak) && !empty($pkh)) {

$sql = mysqli_query($conn,"INSERT INTO validasi (tanggal,nama,jk,nisn,nik,tmptlahir,tgllahir,noregeris,agama,kwn,kebutuhan,alamat,rt,rw,dusun,kelurahan,kecamatan,kodepos,lintang,bujur,tmpttinggal,transportasi,nokks,anak,kps,nokps) VALUES ('$tanggal','$nama','$jk','$nisn','$nik','$tl','$tgl','$noregis','$agama','$kwn','$bk','$alamat','$rt','$rw','$dusun','$desa','$kec','$pos','$lintang','$bujur','$tt','$mt','$kks','$anak','$pkh','$kps')");

if ($sql) {

	echo "<script>alert('Berhasil simpan')</script>";
	echo "<script>location.href='formpendaftaran.php'</script>";

}else{

	echo "<script>alert('Periksa Kembali Form Anda')</script>";

}
}
?>
</body>
</html>