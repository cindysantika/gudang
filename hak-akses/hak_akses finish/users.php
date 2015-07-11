<?php 
include_once('config.php');
include('cek-login.php');
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
	<div class="rounded_3 shadow_3 content">
	<?php
	$username = $_SESSION['username'];
	$query_user_login = mysql_query("select * from users where username='$username'");
	
	$user_login = mysql_fetch_array($query_user_login);
	?>
	<h3>Selamat Datang <?php echo $user_login['fullname']; ?></h3>
	<br />
	
	<?php 
	$message = $_GET['msg'];
	
	if ($message == 'success') {
	?>
	<div class="info">Success</div>
	<?php } else if ($message == 'failed') {?>
	<div class="error">Error</div>
	<?php } ?>
	
	<a href="index.php" class="left">Tambah User</a> <a href="logout.php" class="right">Logout</a>
	<br />
	<table class="view">
		<thead>
			<tr>
				<th width="20">No.</th>
				<th>Username</th>
				<th>Fullname</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$query = mysql_query("select * from users");
			
			$i = 1;
			
			while ($data = mysql_fetch_array($query)) {
			?>
			<tr class="<?php if ($i % 2 == 0) { echo "odd"; } else { echo "even"; } ?>">
				<td><?php echo $i; ?></td>
				<td>
					<?php 
					echo $data['username']; 
					
					// jika user yang login memiliki role sebagai admin, maka tampilkan menu untuk edit dan delete user
					if ($_SESSION['role'] == 'admin') {
					?>
					<div class="row-actions">
						<a href="edit.php?uid=<?php echo $data['id_user'];?>">Edit</a>
						<?php if ($data['username'] != 'admin') {?>
						 | <a href="delete.php?uid=<?php echo $data['id_user'];?>" class="delete">Delete</a>
						<?php } ?>
					</div>
					<?php } ?>
				</td>
				<td><?php echo $data['fullname']; ?></td>
				<td><?php echo $data['email']; ?></td>
			</tr>
			<?php 
				$i++;
			} 
			?>
		</tbody>
	</table>
	</div>
</div>
<div class="clear"></div>
<div style="padding-bottom:50px;"></div>
</body>
</html>