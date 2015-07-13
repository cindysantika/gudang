<?php
include('config.php');

//tangkap data dari form
$id= $_POST['KODE_BARANG_BERGERAK'];
$Nama Barang Bergerak = $_POST['NAMA_BARANG_BERGERAK'];
$Keterangan Barang Bergerak = $_POST['KETERANGAN_BARANG_BERGERAK'];
$Merk Barang Bergerak = $_POST['MERK_BARANG_BERGERAK'];
$Type Barang Bergerak = $_POST['TYPE_BARANG_BERGERAK'];
$Model Barang Bergerak = $_POST['MODEL_BARANG_BERGERAK'];
$Satuan Barang Bergerak = $_POST['SATUAN_BARANG_BERGERAK'];
$Harga Barang Bergerak = $_POST['HARGA_BARANG_BERGERAK'];
$No Seri = $_POST['NO_SERI'];
$TPart Number= $_POST['PART_NUMBER'];

//update data di database sesuai user_id
$query = mysql_query("update user set NAMA_BARANG_BERGERAK='$NAMA_BARANG_BERGERAK, KETERANGAN_BARANG_BERGERAK='$KETERANGAN_BARANG_BERGERAK', MERK_BARANG_BERGERAK='$MERK_BARANG_BERGERAK', TYPE_BARANG_BERGERAK='$TYPE_BARANG_BERGERAK' , MODEL_BARANG_BERGERAK='$MODEL_BARANG_BERGERAK' , SATUAN_BARANG_BERGERAK = '$SATUAN_BARANG_BERGERAK' , HARGA_BARANG_BERGERAK = '$HARGA_BARANG_BERGERAK' , NO_SERI='$NO_SERI' , PART_NUMBER='$PART_NUMBER' where KODE_BARANG_BERGERAK='$id'") or die(mysql_error());

if ($query) {
	header('location:viewbarangbergerak.php?message=success');
}
?>
