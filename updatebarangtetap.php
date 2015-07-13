<?php
include('config.php');

//tangkap data dari form
$id= $_POST['KODE_BARANG_TETAP'];
$Nama Barang Tetap = $_POST['NAMA_BARANG_TETAP'];
$Keterangan Barang Tetap = $_POST['KETERANGAN_BARANG_TETAP'];
$Merk Barang Tetap = $_POST['MERK_BARANG_TETAP'];
$Type Barang Tetap = $_POST['TYPE_BARANG_TETAP'];
$Model Barang Tetap = $_POST['MODEL_BARANG_TETAP'];
$Satuan Barang Tetap = $_POST['SATUAN_BARANG_TETAP'];
$Harga Barang Tetap = $_POST['HARGA_BARANG_TETAP'];
$No Seri = $_POST['NO_SERI'];
$TPart Number= $_POST['PART_NUMBER'];

//update data di database sesuai user_id
$query = mysql_query("update user set NAMA_BARANG_TETAP='$NAMA_BARANG_TETAP', KETERANGAN_BARANG_TETAP='$KETERANGAN_BARANG_TETAP', MERK_BARANG_TETAP='$MERK_BARANG_TETAP', TYPE_BARANG_TETAP='$TYPE_BARANG_TETAP' , MODEL_BARANG_TETAP='$MODEL_BARANG_TETAP' , SATUAN_BARANG_TETAP = '$SATUAN_BARANG_TETAP' , HARGA_BARANG_TETAP = '$HARGA_BARANG_TETAP' , NO_SERI='$NO_SERI' , PART_NUMBER='$PART_NUMBER' where KODE_BARANG_TETAP='$id'") or die(mysql_error());

if ($query) {
	header('location:viewbarangtetap.php?message=success');
}
?>
