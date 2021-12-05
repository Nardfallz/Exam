<?php
include "koneksi.php";

$nama_karyawan=$_POST['nama_karyawan'];
$iden=$_POST['iden'];
$posisi=$_POST['posisi'];
$cuti=$_POST['cuti'];
$berakhir=$_POST['berakhir'];
$ket_cuti=$_POST['ket_cuti'];

$simpan=mysqli_query($koneksi,"INSERT INTO libur VALUES('$nama_karyawan','$iden','$posisi','$cuti','$berakhir','$ket_cuti')");
header("location:hasil_ajuan.php");
?>