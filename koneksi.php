<?php
$koneksi= mysqli_connect("localhost", "root", "", "latihan_crud");
if (mysqli_connect_errno())
	{
		echo "faild to connect to mysqli ; " . mysqli_connect_error();
	}
?>