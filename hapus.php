<?php
include 'koneksi.php';
if(isset($_GET['id'])){
	$delet = mysqli_query($koneksi,"DELETE FROM jadwal_piket WHERE id = '".$_GET['id']."' ");
	header('location:index.php');
}
?>