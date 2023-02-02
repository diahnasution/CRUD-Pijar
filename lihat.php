<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
    </head>

<body>

    <table border="1">
       <tr>
        <td>Nama Produk</td>
        <td>Keterangan</td>
        <td>Harga</td>
        <td>Jumlah</td>
        <td>Aksi</td>
       </tr>
       <?php
include "koneksi.php";


$lihat	="SELECT * FROM produk ORDER BY id";

$proses = mysqli_query($conn, $lihat);

$total	= mysqli_num_rows($proses);


while ($data=mysqli_fetch_array($proses)){
	echo "<tr> 
		<td> $data[nama_produk]</td>
		<td> $data[keterangan]</td>
		<td> $data[harga]</td>
		<td> $data[jumlah]</td>
		<td><a href='edit.php?id=$data[id]'>Edit</a> |
		<a href='hapus.php?id=$data[id]'>Hapus</a> </td>
	</tr>";
	
}

?>
    </table>
</form>

</body>
</html>