<?php 
include('config.php');
include('cek-login.php');
?>

<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
$id = $_GET['NIP'];

$query = mysql_query("select * from user where NIP='$NIP'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="NIP" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>NAMA_PETUGAS</td>
        	<td>:</td>
        	<td><input type="text" name="NAMA_PETUGAS" maxlength="20" required="required" value="<?php echo $data['NAMA_PETUGAS']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="USERNAME" name="password" maxlength="20" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Fullname</td>
        	<td>:</td>
        	<td><input type="text" name="fullname" maxlength="100" required="required" value="<?php echo $data['fullname']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" name="email" required="required" value="<?php echo $data['email']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Agama</td>
        	<td>:</td>
        	<td><input type="text" name="agama" required="required" value="<?php echo $data['agama']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Nomor HP</td>
        	<td>:</td>
        	<td><input type="text" name="no_hp" maxlength="14" required="required" value="<?php echo $data['no_hp']; ?>" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="view.php">Lihat Data</a>

</body>
</html>