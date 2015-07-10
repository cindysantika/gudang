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
$id = $_GET['id'];

$query = mysql_query("select * from user where NIP='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>NIP</td>
        	<td>:</td>
        	<td><input type="text" name="NIP" maxlength="20" required="required" value="<?php echo $data['NIP']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Petugas</td>
        	<td>:</td>
        	<td><input type="NAMA_PETUGAS" name="NAMA_PETUGAS" maxlength="20" required="required" value="<?php echo $data['NAMA_PETUGAS']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="USERNAME" maxlength="100" required="required" value="<?php echo $data['USERNAME']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" name="PASSWORD" required="required" value="<?php echo $data['PASSWORD']; ?>" /></td>
        </tr>
   <tr><td>Jabatan</td>
					  <td>:</td><td><select name="Jabatan" title="Pilih Jabatan">
<option value="">-- Pilih Jabatan --</option>
<option value="Kpl Gudang">Kpl Gudang</option>
<option value="Spv">Spv</option>
<option value="Staff">Staff</option>
</select></td></tr>
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