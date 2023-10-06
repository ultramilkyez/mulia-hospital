<?php
include "koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];
$poli = $_POST['poli'];
$keluhan = $_POST['keluhan'];
$tanggal = $_POST['tanggal'];


$input = mysqli_query ($koneksi, "insert into pendaftaran set nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', no_telepon='$no_telepon', alamat='$alamat', poli='$poli',keluhan='$keluhan',tanggal='$tanggal'");

if ($input){
		header ('location:index.html?status=SUKSES');
	}else{
		header ('location:pendaftaran.php?status=GAGAL');
	}
?>