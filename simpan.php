<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nm_mhs = $_POST['nm_mhs'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];


mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nim','$nm_mhs','$alamat','$telp','$agama','$jenis_kelamin')");


header("location:index.php");





?>