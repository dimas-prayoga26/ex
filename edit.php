<?php
include 'koneksi.php';
$edit_data = mysqli_query($koneksi,"SELECT * FROM jadwal_piket WHERE id = '".$_GET['id']."'");
$result = mysqli_fetch_array($edit_data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT SISWA PIKET RPL2</title>
</head>
<body>
	<h1>EDIT SISWA PIKET RPL2</h1>
	<form action="" method="POST">
		<table>
			<input type="hidden" name="id" value="<?php echo $result['id']?>">
			<tr>
				<td>SENIN</td>
				<td>:</td>
				<td><input type="text" name="senin" value="<?php echo $result['senin']?>"></td>
			</tr>
			<tr>
				<td>SELASA</td>
				<td>:</td>
				<td><input type="text" name="selasa" value="<?php echo $result['selasa']?>"></td>
			</tr>
			<tr>
				<td>RABU</td>
				<td>:</td>
				<td><input type="text" name="rabu" value="<?php echo $result['rabu']?>"></td>
			</tr>
			<tr>
				<td>KAMIS</td>
				<td>:</td>
				<td><input type="text" name="kamis" value="<?php echo $result['kamis']?>"></td>
			</tr>
			<tr>
				<td>JUMAT</td>
				<td>:</td>
				<td><input type="text" name="jumat" value="<?php echo $result['jumat']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="simpan">
					<input type="submit" name="edit" value="kembali"></td>
				</tr>
		</table>
	</form>
	<?php
	include 'koneksi.php';
	if(isset($_POST['edit']) && $_POST['edit'] == 'simpan'){

	    $id = $_POST['id'];
		$senin = $_POST['senin'];
		$selasa = $_POST['selasa'];
		$rabu = $_POST['rabu'];
		$kamis = $_POST['kamis'];
		$jumat = $_POST['jumat'];

		$insert = mysqli_query($koneksi, "UPDATE jadwal_piket SET
								senin='$senin',
								selasa='$selasa',
								rabu='$rabu',
								kamis='$kamis',
								jumat='$jumat'
								WHERE id='$id'
							  ");
		if($insert){
			echo "BERHASIL DIEDIT";
			// header('location:index.php');
		}else{
			echo "GAGAL DISIMPAN" . mysqli_error($koneksi);
		}
	}

	if(isset($_POST['edit']) && $_POST['edit'] == 'kembali'){
		header('location:index.php');
	}

	?>

</body>
</html>
