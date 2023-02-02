<?php
include "koneksi.php";

$id			= $_GET['id'];
$nama_produk		= $_GET['nama_produk'];
$keterangan		= $_GET['keterangan'];
$harga		= $_GET['harga'];
$jumlah		= $_GET['jumlah'];
$ubah		= "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga',
jumlah= '$jumlah' WHERE id='$id'";

$proses 	= mysqli_query($conn, $ubah);

if($proses){
	header("location: lihat.php");
}else{
	echo "Update Data Gagal";
}


?>