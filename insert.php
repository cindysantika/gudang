<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$NIP = $_POST['NIP'];
$NAMA_PETUGAS = $_POST['NAMA_PETUGAS'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$JABATAN = $_POST['JABATAN'];

//simpan data ke database
$query = mysql_query("insert into user values('', '$NIP', '$NAMA_PETUGAS', '$USERNAME', '$PASSWORD', '$JABATAN')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>