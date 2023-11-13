<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = mysqli_query($penghubung, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $mahasiswa = mysqli_fetch_assoc($query);
} else {
    // Redirect atau sesuaikan jika nim tidak ada
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Section -->
</head>
<body>
    <h1>Edit Biodata Mahasiswa</h1>
    <form method="post" action="update.php">
        <!-- Gunakan input hidden untuk menyimpan NIM -->
        <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim']; ?>">
        <!-- Tampilkan data saat ini -->
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" readonly><br>
        <label for="nm_mhs">Nama Mahasiswa:</label><br>
        <input type="text" id="nm_mhs" name="nm_mhs" value="<?php echo $mahasiswa['nm_mhs']; ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>"><br>
        <label for="telp">No Telp:</label><br>
        <input type="number" id="telp" name="telp" value="<?php echo $mahasiswa['telp']; ?>"><br>
        <label for="agama">Agama:</label><br>
        <select name="agama" id="agama">
            <option value="islam" <?php if($mahasiswa['agama']=="islam") echo 'selected="selected"'; ?>>Islam</option>
            <option value="kristen" <?php if($mahasiswa['agama']=="kristen") echo 'selected="selected"'; ?>>Kristen</option>
            <option value="katolik" <?php if($mahasiswa['agama']=="katolik") echo 'selected="selected"'; ?>>Katolik</option>
            <option value="hindu" <?php if($mahasiswa['agama']=="hindu") echo 'selected="selected"'; ?>>Hindu</option>
            <option value="buddha" <?php if($mahasiswa['agama']=="buddha") echo 'selected="selected"'; ?>>Buddha</option>
            <option value="khonghucu" <?php if($mahasiswa['agama']=="khonghucu") echo 'selected="selected"'; ?>>Khonghucu</option>
        </select><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="laki-laki" <?php if($mahasiswa['jenis_kelamin']=="laki-laki") echo 'selected="selected"'; ?>>Laki-Laki</option>
            <option value="perempuan" <?php if($mahasiswa['jenis_kelamin']=="perempuan") echo 'selected="selected"'; ?>>Perempuan</option>
        </select><br>

        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
