<?php 
//koneksi php
include'koneksi.php';
//menangkap data id yang dikirim dari url
$id=$_GET['id'];

//menghapus data
mysqli_query($koneksi, "delete from pesanan where id='$id'");

//mengalihkan data kembali
header("location:pelanggan.php");
?>