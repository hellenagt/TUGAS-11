<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Nama Lengkap');
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->setCellValue('E1', 'NISN');
$sheet->setCellValue('F1', 'NIK');
$sheet->setCellValue('G1', 'Tempat Lahir');
$sheet->setCellValue('H1', 'Tanggal Lahir');
$sheet->setCellValue('I1', 'No Regristasi Akte');
$sheet->setCellValue('J1', 'Agama');
$sheet->setCellValue('K1', 'Kewarganegaraan');
$sheet->setCellValue('L1', 'Berkebutuhan khusus');
$sheet->setCellValue('M1', 'Alamat');
$sheet->setCellValue('N1', 'RT');
$sheet->setCellValue('O1', 'RW');
$sheet->setCellValue('P1', 'Dusun');
$sheet->setCellValue('Q1', 'Desa');
$sheet->setCellValue('R1', 'Kecamatan');
$sheet->setCellValue('S1', 'Kode Pos');
$sheet->setCellValue('T1', 'Lintang');
$sheet->setCellValue('U1', 'Bujur');
$sheet->setCellValue('V1', 'Tempat Tinggal');
$sheet->setCellValue('W1', 'Mode Transportasi');
$sheet->setCellValue('X1', 'No KKS');
$sheet->setCellValue('Y1', 'Anak ke-');
$sheet->setCellValue('Z1', 'Penerima KPS/PKH');
$sheet->setCellValue('AA1', 'No KPS/PKH');

 
$query = mysqli_query($koneksi,"select * from validasi");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['tanggal']);
	$sheet->setCellValue('C'.$i, $row['nama']);
	$sheet->setCellValue('D'.$i, $row['jk']);
	$sheet->setCellValue('E'.$i, $row['nisn']);	
	$sheet->setCellValue('F'.$i, $row['nik']);	
	$sheet->setCellValue('G'.$i, $row['tmptlahir']);	
	$sheet->setCellValue('H'.$i, $row['tgllahir']);	
	$sheet->setCellValue('I'.$i, $row['noregeris']);	
	$sheet->setCellValue('J'.$i, $row['agama']);	
	$sheet->setCellValue('K'.$i, $row['kwn']);	
	$sheet->setCellValue('L'.$i, $row['kebutuhan']);	
	$sheet->setCellValue('M'.$i, $row['alamat']);	
	$sheet->setCellValue('N'.$i, $row['rt']);	
	$sheet->setCellValue('O'.$i, $row['rw']);	
	$sheet->setCellValue('P'.$i, $row['dusun']);	
	$sheet->setCellValue('Q'.$i, $row['kelurahan']);	
	$sheet->setCellValue('R'.$i, $row['kecamatan']);	
	$sheet->setCellValue('S'.$i, $row['kodepos']);	
	$sheet->setCellValue('T'.$i, $row['lintang']);	
	$sheet->setCellValue('U'.$i, $row['bujur']);	
	$sheet->setCellValue('V'.$i, $row['tmpttinggal']);	
	$sheet->setCellValue('W'.$i, $row['transportasi']);	
	$sheet->setCellValue('X'.$i, $row['nokks']);
	$sheet->setCellValue('Y'.$i, $row['anak']);	
	$sheet->setCellValue('Z'.$i, $row['kps']);	
	$sheet->setCellValue('AA'.$i, $row['nokps']);	
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AA'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');
?>