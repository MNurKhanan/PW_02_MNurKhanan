<?php

$penghubung = mysqli_connect("localhost","root","","akademik_upg");


// cek Koneksi
if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal :" .mysqli_connect_error();
}



?>