<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nm_mhs = $_POST['nm_mhs'];
    // Ambil data lainnya sesuai kebutuhan

    // Update data
    mysqli_query($penghubung, "UPDATE mahasiswa SET nm_mhs = '$nm_mhs' WHERE nim = '$nim'");
}

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
?>
