<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from user where KODE_BARANG_TETAP='$id'") or die(mysql_error());

if ($query) {
	header('location:viewbarangtetap.php?message=delete');
}
?>