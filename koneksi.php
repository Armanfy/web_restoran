<?php 
$koneksi = mysqli_connect("localhost", "root", "", "restoran");
if (mysqli_connect_errno()){
    echo "koneksi gagal tolong  nyalakan XAMPP:". mysqli_connect_error();
}
?>