<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cuti</title>
</head>
<body>
	<form name="form1" id="form1" method="post" action="simpan.php">
		<table>
			
			<tr>
				<td>Nama </td>
				<td><Input type="text" name="nama_karyawan"></td>
			</tr>
			<tr>
				<td>ID Karyawan</td>
				<td><Input type="text" name="iden"></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td><input type="radio" name="posisi" value="Admin"> Admin
			    <input type="radio" name="posisi" value="Manager"> Manager
			    <input type="radio" name="posisi" value="Super Visor"> Super Visor<br>
			    <input type="radio" name="posisi" value="HRD"> HRD
			    <input type="radio" name="posisi" value="Leader"> Leader
			    <input type="radio" name="posisi" value="Marketing"> Marketing</td>
			</tr>
			<tr>
				<td>Mulai Cuti</td>
				<td><Input type="date" name="cuti"></td>
			</tr>
			<tr>
				<td>Berakhir</td>
				<td><Input type="date" name="berakhir"></td>
			</tr>
			<tr>
				<td>Keterangan Cuti</td>
			    <td><input type="radio" name="ket_cuti" value="Cuti Tahunan"> Cuti Tahunan
			    <input type="radio" name="ket_cuti" value="Cuti Sakit"> Cuti Sakit<br>
			    <input type="radio" name="ket_cuti" value="Cuti Melahirkan"> Cuti Melahirkan
			    <input type="radio" name="ket_cuti" value="Cuti Besar"> Cuti Besar</td>
			</tr>
			<tr>
				<td></td>
				<td><button><input type="submit" class="btn btn-primary"name="Save" value="Ajukan Cuti"></button></td>
			</tr>
		</table>
	</form>
</body>
</html>