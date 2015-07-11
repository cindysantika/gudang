<?php 
include('config.php');

$uid = $_GET['uid'];

$query = mysql_query("delete from users where id_user='$uid'") or die(mysql_error());

if ($query) {
	header('location:users.php?msg=success');
} else {
	header('location:users.php?msg=failed');
}
?>