<?php
include('config.php');

//tangkap data dari form
$NIP = $_POST['NIP'];
$NAMA_PETUGAS = $_POST['NAMA_PETUGAS'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$JABATAN = $_POST['JABATAN'];

//update data di database sesuai user_id
$query = mysql_query("update user set NAMA_PETUGAS='$NAMA_PETUGAS', USERNAME='$USERNAME', PASSWORD='$PASSWORD', JABATAN='$JABATAN' where NIP='$NIP'") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>