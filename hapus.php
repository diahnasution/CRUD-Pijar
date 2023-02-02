<?php
include "koneksi.php";


$id		=$_GET['id'];
$hapus	= "DELETE FROM produk WHERE id='$id'";
$proses	= mysqli_query($conn, $hapus);

if ($proses){
	header ("location:lihat.php");
}else{
	echo "Hapus Data Gagal";
}

?>