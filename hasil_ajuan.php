<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Data pegawai cuti</h3>
	<table border="1" >
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>ID</td>
			<td>Posisi</td>
			<td>Mulai Cuti</td>
			<td>Berakhir</td>
			<td>Keterangan Cuti</td>
			<td>status</td>
		</tr>
		<?php
		include "koneksi.php";

		$no=1;
		$sql=mysqli_query($koneksi,"SELECT * FROM libur");
		while($data=mysqli_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['Nama'];?></td>
				<td><?php echo $data['ID'];?></td>
				<td><?php echo $data['Posisi'];?></td>
				<td><?php echo $data['Cuti'];?></td>
				<td><?php echo $data['Berakhir'];?></td>
				<td><?php echo $data['Ket_cuti'];?></td>
				<td>Menunggu Persetujuan</td>
			</tr>
		<?php
		}
		?>
	</table>
	<br/>
	<a href="ajuan.php">Isi data lagi...</a>
</body>
</html>