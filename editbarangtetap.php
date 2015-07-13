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

$query = mysql_query("select * from barang_tetap where KODE_BARANG_TETAP='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="updatebarangtetap.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Kode Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="KODE_BARANG_TETAP" maxlength="20" required="required" value="<?php echo $data['KODE_BARANG_TETAP']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="NAMA_BARANG_TETAP" maxlength="20" required="required" value="<?php echo $data['NAMA_BARANG_TETAP']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Keterangan Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="KETERANGAN_BARANG_TETAP" maxlength="100" required="required" value="<?php echo $data['KETERANGAN_BARANG_TETAP']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Merk Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="MERK_BARANG_TETAP" required="required" value="<?php echo $data['MERK_BARANG_TETAP']; ?>" /></td>
        </tr>
		<tr>
        	<td>Type Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="TYPE_BARANG_TETAP" required="required" value="<?php echo $data['TYPE_BARANG_TETAP']; ?>" /></td>
        </tr>
		<tr>
        	<td>Model Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="MODEL_BARANG_TETAP" required="required" value="<?php echo $data['MODEL_BARANG_TETAP']; ?>" /></td>
        </tr>
		<tr>
        	<td>Satuan Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="SATUAN_BARANG_TETAP" required="required" value="<?php echo $data['SATUAN_BARANG_TETAP']; ?>" /></td>
        </tr>
		<tr>
        	<td>Harga Barang Tetap</td>
        	<td>:</td>
        	<td><input type="text" name="HARGA_BARANG_TETAP" required="required" value="<?php echo $data['HARGA_BARANG_TETAP']; ?>" /></td>
        </tr>
		<tr>
        	<td>No Seri</td>
        	<td>:</td>
        	<td><input type="text" name="NO_SERI" required="required" value="<?php echo $data['NO_SERI']; ?>" /></td>
        </tr>
		<tr>
        	<td>Part Number</td>
        	<td>:</td>
        	<td><input type="text" name="PART_NUMBER" required="required" value="<?php echo $data['PART_NUMBER']; ?>" /></td>
        </tr>
		
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="viewbarangtetap.php">Lihat Data</a>

</body>
</html>