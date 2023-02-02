<?php

include "koneksi.php";

$id =$_GET['id'];

/*beri perintah query untuk mangambil data berdasarkan id*/
$ubah	= "SELECT * FROM produk WHERE id ='$id'";

/*eksekusi perintah query*/
$proses	= mysqli_query($conn, $ubah);
/*susun data*/
$data	= mysqli_fetch_array($proses);


echo "<form method='get' action='ubah.php'>
		<table align='center'>
		  <tr>
		  <td>Nama Produk</td>
		  <td>: <input type='text' name='nama_produk' value='$data[nama_produk]'>				    </td>
		  </tr>
		  
		  <tr>
		  <td>Keterangan</td>
		  <td>:
		  <input type='text' name='keterangan' value='$data[keterangan]'> 
		  </td>
		  </tr>
		  
		  <tr>
		  <td>Harga</td>
		  <td>: <input type='text' name='harga' value='$data[harga]'>
		  </td>		  
		  </tr>
		   <tr>
		  <td>Jumlah</td>
		  <td>: <input type='text' name='jumlah' value='$data[jumlah]'>
		  </td>
          <tr>		  
		  <td>: <input type='submit' value='Edit'></td>
		  </tr>
		  
		</table>
		</form>";
?>