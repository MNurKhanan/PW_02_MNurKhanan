<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    // Hapus data berdasarkan NIM
    mysqli_query($penghubung, "DELETE FROM mahasiswa WHERE nim = '$nim'");
}

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
?>
