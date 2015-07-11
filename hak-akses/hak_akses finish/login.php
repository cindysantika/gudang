<?php 
session_start();

include_once('config.php');

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
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
	<p>authorization required!</p>
</div>
<div style="margin:auto">
	<form class="rounded_3 shadow_3" action="auth.php" method="post" style="width:400px; margin:auto;">
		<fieldset class="rounded_3">
			<legend>Login</legend>
			
			<?php 
			$error = $_GET['error'];
			
			if ($error == 1) {
			?>
			<div class="error">Username dan Password belum diisi.</div>
			<?php } else if ($error == 2) {?>
			<div class="error">Username belum diisi.</div>
			<?php } else if ($error == 3) {?>
			<div class="error">Password belum diisi.</div>
			<?php } else if ($error == 4) {?>
			<div class="error">Username dan Password tidak terdaftar.</div>
			<?php } ?>
			
			<div>
				<label for="username">Username</label> <input id="username" name="username" class="wide" type="text" required="required" />
			</div>
			<div>
				<label for="password">Password</label> <input id="password" name="password" class="wide" type="password" required="required" />
			</div>
			<div>
				<span class="left"><a href="index.php">Daftar Baru</a></span>
				<input class="right" type="submit" name="submit" value="Login" />
			</div>
		</fieldset>
	</form>
</div>
</body>
</html>