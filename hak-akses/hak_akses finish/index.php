<?php 
session_start();

$logged_in = false;

//jika session username belum dibuat, atau session username kosong
if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
	$logged_in = true;
}

include_once('config.php');
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
	<form class="rounded_3 shadow_3" action="insert.php" method="post" style="width:400px; margin:auto;">
		<fieldset class="rounded_3">
			<legend>Register New User</legend>
			<?php 
			$message = $_GET['msg'];
			
			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Error</div>
			<?php } ?>
			
			<div>
				<label for="username">Username</label> <input id="username" name="username" class="wide" type="text" required="required" />
			</div>
			<div>
				<label for="password">Password</label> <input id="password" name="password" class="wide" type="password" required="required" />
			</div>
			<div>
				<label for="email">Email</label> <input id="email" name="email" class="wide" type="email" required="required" />
			</div>
			<div>
				<label for="fullname">Fullname</label> <input id="fullname" name="fullname" class="wide" type="text" />
			</div>
			<div>
				<?php if ($logged_in) { ?>
				<span class="left"><a href="users.php">Lihat Data</a></span>
				<?php } else {?>
				<span class="left"><a href="login.php">Login</a></span>
				<?php } ?>
				<input class="right" type="submit" name="submit" value="Buat User" />
			</div>
		</fieldset>
	</form>
</div>
</body>
</html>