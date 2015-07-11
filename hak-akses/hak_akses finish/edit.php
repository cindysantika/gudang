<?php 
session_start();

include_once('config.php');
include_once('cek-login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tutorial Hak Akses - Nurwahyudin.Com</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/normalize.css" type="text/css" />
<link rel="stylesheet" href="css/permata-ui-kit.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<div style="margin:auto; padding:50px 0 30px; text-align:center">
	<h1>Nurwahyudin.Com</h1>
	<p>Tutorial Hak Akses</p>
</div>
<div style="margin:auto">
	<form class="rounded_3 shadow_3" action="update.php" method="post" style="width:400px; margin:auto;">
		<fieldset class="rounded_3">
			<legend>Edit User</legend>
			<?php 
			$message = $_GET['msg'];
			
			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Error</div>
			<?php } ?>
			
			
			<?php 
			// terima id_user dari halaman users
			$user_id = $_GET['uid'];
			
			$query = mysql_query("select * from users where id_user='$user_id'");
			
			$data = mysql_fetch_array($query);
			?>
			
			
			<div>
				<label for="username">Username</label> <input id="username" name="username" class="wide" type="text" required="required" value="<?php echo $data['username']; ?>" disabled="disabled" />
			</div>
			<div>
				<label for="password">Password</label> <input id="password" name="password" class="wide" type="password" required="required" value="<?php echo $data['password']; ?>" <?php if ($data['username'] == 'admin') {?> disabled="disabled" <?php } ?> />
			</div>
			<div>
				<label for="email">Email</label> <input id="email" name="email" class="wide" type="email" required="required" value="<?php echo $data['email']; ?>" />
			</div>
			<div>
				<label for="fullname">Fullname</label> <input id="fullname" name="fullname" class="wide" type="text" value="<?php echo $data['fullname']; ?>" />
			</div>
			<?php
			// jika user yang login memiliki role sebagai admin, maka tampilkan opsi ini
			if ($_SESSION['role'] == 'admin') {
				if ($data['username'] != 'admin') {
			?>
			<div>
				<label for="role">Role</label>
				<select name="role">
					<option value="admin">Admin</option>
					<option value="member">Member</option>
				</select>
			</div>
			<?php 
				}
			} 
			?>
			<div>
				<?php if ($logged_in) { ?>
				<span class="left"><a href="users.php">Lihat Data</a></span>
				<?php } else {?>
				<span class="left"><a href="login.php">Login</a></span>
				<?php } ?>
				<input class="right" type="submit" name="submit" value="Update User" />
			</div>
			<input type="hidden" name="user_id" value="<?php echo $data['id_user']; ?>" />
		</fieldset>
	</form>
</div>
</body>
</html>