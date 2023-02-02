<?php

include "koneksi.php";

$nama	= $_POST['nama_produk'];
$keterangan	= $_POST['keterangan'];
$harga	= $_POST['harga'];
$jumlah	= $_POST['jumlah'];

$simpan = "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES ('$nama' , '$keterangan' , '$harga', '$jumlah')";


$proses = mysqli_query ($conn, $simpan);

if($proses) {
	header("location: lihat.php");
}else{
	echo "Input data tidak berhasil";
	
}

?>