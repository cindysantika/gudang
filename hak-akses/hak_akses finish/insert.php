<?php 
include_once('config.php');

// terima data dari halaman index.php
$username 	= mysql_real_escape_string($_POST['username']);
$password 	= mysql_real_escape_string($_POST['password']);
$email		= mysql_real_escape_string($_POST['email']);
$fullname	= mysql_real_escape_string($_POST['fullname']);
$role		= 'member'; // variabel untuk settingan default level yang mendaftar

// simpan data ke database
$query = mysql_query("insert into users values('', '$username', '$password', '$email', '$fullname', '$role')");

if ($query) {
	// jika berhasil menyimpan
	header('location: index.php?msg=success');
} else {
	// jika gagal menyimpan
	header('location: index.php?msg=failed');
}
?>