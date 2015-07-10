<?php 
include('cek-login.php');
?>
<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?>

<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>NIP</td>
        	<td>:</td>
        	<td><input type="text" name="NIP" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>NAMA_PETUGAS</td>
        	<td>:</td>
        	<td><input type="text" name="NAMA_PETUGAS" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>USERNAME</td>
        	<td>:</td>
        	<td><input type="text" name="USERNAME" maxlength="100" required="required" /></td>
        </tr>
    	<tr>
        	<td>PASSWORD</td>
        	<td>:</td>
        	<td><input type="password" name="PASSWORD" required="required" /></td>
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

<a href="view.php">Lihat Data</a> ||  <a href="logout.php">Logout</a>

</body>
</html>