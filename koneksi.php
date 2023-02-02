<?php
$conn = mysqli_connect('localhost','root','','pijarcamp');
if (mysqli_connect_errno()){
    echo "Koneksi Gagal Error 404:".mysqli_connect_errno();
    die();
}

?>