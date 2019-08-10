
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH SISWA PIKET RPL2</title>
</head>
<body>
	<h1>TAMBAH SISWA PIKET RPL2</h1>
	<form action="" method="POST">
		<table>
			<tr class="senin">
				<td>SENIN</td>
				<td>:</td>
				<td><input type="text" name="snn" placeholder="jadwal hari senin"></td>
			</tr>
			<tr class="selasa">
				<td>SELASA</td>
				<td>:</td>
				<td><input type="text" name="sla" placeholder="jadwal hari selas"></td>
			</tr>
			<tr class="rabu">
				<td>RABU</td>
				<td>:</td>
				<td><input type="text" name="rbu" placeholder="jadwal hari rabu"></td>
			</tr>
			<tr class="kamis">
				<td>KAMIS</td>
				<td>:</td>
				<td><input type="text" name="kms" placeholder="jadwal hari kamis"></td>
			</tr>
			<tr class="jumat">
				<td>JUM'AT</td>
				<td>:</td>
				<td><input type="text" name="jmt" placeholder="jadwalhari jum'at"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="save" value="simpan">
					<input type="submit" name="save" value="batal">
				</td>
				</tr>
		</table>
	</form>

	<?php
	include 'koneksi.php';
	if(isset($_POST['save']) && $_POST['save'] == 'simpan'){
	$insert = mysqli_query($koneksi,"INSERT INTO jadwal_piket VALUES
	 							('' ,
								 '".$_POST['snn']."' ,
		 						 '".$_POST['sla']."' ,
		 						 '".$_POST['rbu']."' ,
		 						 '".$_POST['kms']."' ,
		 						 '".$_POST['jmt']."')");
		if($insert){
			echo "BERHASIL DISIMPAN";
			// header('location:index.php');
		}else{
			echo "GAGAL DISIMPAN" . mysqli_error($koneksi);
		}
	}
	if(isset($_POST['save']) && $_POST['save'] == 'batal'){
		header('location:index.php');
	}
	?>

</body>
</html>
