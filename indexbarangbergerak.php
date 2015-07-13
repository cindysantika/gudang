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
        	<td>Kode Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="Kode_Barang_Bergerak" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Nama Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="NAMA_BARANG_BERGERAK" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Keterangan Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="USERNAME" maxlength="100" required="required" /></td>
        </tr>
    	<tr>
        	<td>Merk Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="MERK_BARANG_BERGERAK" maxlength="100" required="required" /></td>
        </tr>
   <tr>
        	<td>Type Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="TYPE_BARANG_BERGERAK" maxlength="100" required="required" /></td>
        </tr>
		<tr>
        	<td>Model Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="MODEL_BARANG_BERGERAK" maxlength="100" required="required" /></td>
        </tr>
		<tr>
        	<td>Satuan Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="SATUAN_BARANG_BERGERAK" maxlength="100" required="required" /></td>
        </tr>
		<tr>
        	<td>Harga Barang Bergerak</td>
        	<td>:</td>
        	<td><input type="text" name="HARGA_BARANG_BERGERAK" maxlength="100" required="required" /></td>
        </tr>
		<tr>
        	<td>No Seri</td>
        	<td>:</td>
        	<td><input type="text" name="NO_SERI" maxlength="100" required="required" /></td>
        </tr>
		<tr>
        	<td>Part Number</td>
        	<td>:</td>
        	<td><input type="text" name="PART_NUMBER" maxlength="100" required="required" /></td>
        </tr>
		
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="viewbarangbergerak.php">Lihat Data</a> ||  <a href="logout.php">Logout</a>

</body>
</html>