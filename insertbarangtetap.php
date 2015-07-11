<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['KODE_BARANG_TETAP'];
$NAMA_BARANG_TETAP = $_POST['NAMA_BARANG_TETAP'];
$KETERANGAN_BARANG_TETAP = $_POST['KETERANGAN_BARANG_TETAP'];
$MERK_BARANG_TETAP = $_POST['MERK_BARANG_TETAP'];
$TYPE_BARANG_TETAP= $_POST['TYPE_BARANG_TETAP'];
$MODEL_BARANG_TETAP=$_POST['MODEL_BARANG_TETAP'];
$SATUAN_BARANG_TETAP=$_POST['SATUAN_BARANG_TETAP'];
$HARGA_BARANG_TETAP=$_POST[' HARGA_BARANG_TETAP'];
$NO_SERI=$_POST['NO_SERI'];
$PART_NUMBER=$_POST['PART_NUMBER'];

//simpan data ke database
$query = mysql_query("insert into user values('$id', '$NAMA_BARANG_TETAP', '$KETERANGAN_BARANG_TETAP', '$MERK_BARANG_TETAP', '$TYPE_BARANG_TETAP',  '$MODEL_BARANG_TETAP',  '$SATUAN_BARANG_TETAP', '$HARGA_BARANG_TETAP',  '$NO_SERI',  '$PART_NUMBER')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>