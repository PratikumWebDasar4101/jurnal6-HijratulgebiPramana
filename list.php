<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List</title>
</head>
<body>
	<h2 align="center">List Data</h2>
	<form action="koneksi.php" method="POST">
		<table align="center">
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr valign="top">
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="D3 MI 41-01">D3 MI 41-01 <br>
					<input type="radio" name="kelas" value="D3 MI 41-02">D3 MI 41-02 <br>
					<input type="radio" name="kelas" value="D3 MI 41-03">D3 MI 41-03 <br>
					<input type="radio" name="kelas" value="D3 MI 41-04">D3 MI 41-04 <br>

				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelamin" value="laki-laki">laki-laki <br>
					<input type="radio" name="perempuan" value="perempuan">perempuan <br>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="berlari">berlari <br>
					<input type="checkbox" name="hobi[]" value="berenang">berenang <br>
					<input type="checkbox" name="hobi[]" value="memanjat">memanjat <br>
					<input type="checkbox" name="hobi[]" value="membaca">membaca <br>
					<input type="checkbox" name="hobi[]" value="loncat">loncat <br>
					<input type="checkbox" name="hobi[]" value="tidur">tidur <br>
					<input type="checkbox" name="hobi[]" value="melamun">melamun <br>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select>
						<option value="fakultas ilmu terapan">fakultas ilmu terapan</option>
						<option value="fakultas komunikasi bisnis">fakultas komunikasi bisnis</option>
						<option value="fakultas ekonomi bisnis">fakultas ekonomi bisnis</option>
						<option value="fakultas rekaysa industri">fakultas rekaysa industri</option>
						<option value="fakultas industri kreatif">fakultas industri kreatif</option>
						<option value="fakultas elekto">fakultas elekto</option>
						<option value="fakultas informatika">fakultas informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>