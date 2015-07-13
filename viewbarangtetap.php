<?php 
include('config.php');
include('cek-login.php');
?>

<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Data User</h1>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="indexbarangtetap.php">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>Kode Barang Tetap</td>
			<td>Nama Barang Tetap</td>
        	<td>Keterangan Barang Tetap</td>
        	<td>Merk Barang Tetap</td>
        	<td>Type Barang Tetap</td>
        	<td>Model Barang Tetap</td>
				<td>Satuan Barang Tetap</td>
					<td>Harga Barang Tetap</td>
						<td>No Seri</td>
						<td>Part Number</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from barang_tetap");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $data['KODE_BARANG_TETAP']; ?></td>
        	<td><?php echo $data['NAMA_BARANG_TETAP']; ?></td>
        	<td><?php echo $data['KETERANGAN_BARANG_TETAP']; ?></td>
        	<td><?php echo $data['MERK_BARANG_TETAP']; ?></td>
			<td><?php echo $data['TYPE_BARANG_TETAP']; ?></td>
			<td><?php echo $data['MODEL_BARANG_TETAP']; ?></td>
			<td><?php echo $data['SATUAN_BARANG_TETAP']; ?></td>
			<td><?php echo $data['HARGA_BARANG_TETAP']; ?></td>
			<td><?php echo $data['NO_SERI']; ?></td>
			<td><?php echo $data['PART_NUMBER']; ?></td>
            <td>
            	<a href="edit.php?id=<?php echo $data['NIP']; ?>">Edit</a> || 
                <a href="delete.php?id=<?php echo $data['NIP']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</body>
</html>