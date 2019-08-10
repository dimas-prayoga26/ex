<?php
	include 'koneksi.php';
	session_start();
	if(!isset($_SESSION['auth'])) {
		 header('location:login.php');
	} else {
		 $username = $_SESSION['auth'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jadwal Piket</title>
</head>
<body>
<style>
	#table {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#table td, #table th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#table tr:nth-child(even){background-color: #f2f2f2;}

	#table tr:hover {background-color: #ddd;}

	#table th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
</style>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>

<h2 align="center">Jadwal Piket</h2><hr /><br />
<div style="margin: 10px 0">
	<table id="table" border="1" align="center">
	<tr style="text-align: center">
    	<td width="30px">No</td>
        <td width="100px">Senin</td>
        <td width="100px">Selasa</td>
        <td width="100px">Rabu</td>
        <td width="100px">Kamis</td>
        <td width="100px">Jum'at</td>
        <td width="125px">Menu Edit</td>
    </tr>
<?php
	$no = 1;
	$select = mysqli_query($koneksi,"select * from jadwal_piket");

	while($hasil = mysqli_fetch_array($select)){
?>
    <tr>
    	<td align="center"><?php echo $no++; ?></td>
        <td><?php echo $hasil['senin']; ?></td>
        <td><?php echo $hasil['selasa']; ?></td>
        <td><?php echo $hasil['rabu']; ?></td>
        <td><?php echo $hasil['kamis']; ?></td>
        <td><?php echo $hasil['jumat']; ?></td>
        <td align="center">
				<button><a href="edit.php?id=<?php echo $hasil['id']; ?>">EDIT</a></button>
				<button><a href="hapus.php?id=<?php echo $hasil['id'];?>">HAPUS</a></button>
		</td>
	</tr>
	<?php
	}
	?>
</table>
<div align="center" style="margin-top: 10px;border-radius: 5px; ">
<a href="form-input.php"><input type="submit" name="" value="TAMBAH DATA"></a>
</div>
</div>


</body>
</html>
