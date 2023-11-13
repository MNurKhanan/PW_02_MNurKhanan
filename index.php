<!DOCTYPE html>
<html lang="en">

<?php

  include 'koneksi.php';

?>


<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Membuat Aplikasi Web Sederhana</title>
    <!-- Tambahkan ini ke dalam tag <head> -->
<link rel="stylesheet" type="text/css" href="style.css">

</head>
 
<body>
    <div class="container">
    <h2 class="alert alert-primary teks-center mt-3">Biodata Mahasiswa Universitas Primagraha</h2>
    <form method="post" action="simpan.php">
        
        <label for="fname">NIM:</label><br>
        <input type="nim" id="nim" name="nim"><br>
        <label for="lname">Nama Mahasiswa:</label><br>
        <input type="text" id="lname" name="nm_mhs"><br>
        <label for="telp">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="telp">No Telp:</label><br>
        <input type="number" id="telp" name="telp"><br>
        <form method="post" action="proses.php">
    <label for="agama">Agama:</label><br>
    <select name="agama" id="agama">
    <option value=""></option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="kaatolik">Katolik</option>  
        <option value="hindu">Hindu</option>
        <option value="buddha">Buddha</option>
        <option value="khonghucu">Khonghucu</option>
    </select><br>
    <label for="jenis kelamin">Jenis Kelamin:</label><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value=""></option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
    </select><br>


        <br>
        <button type="submit">Simpan</button>
    </form>
      </br>

    <table border="1">
        <tr>
          <th>#</th>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Agama</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $d['nim']?></td>
          <td><?php echo $d['nm_mhs']?></td>
          <td><?php echo $d['alamat']?></td>
          <td><?php echo $d['telp']?></td>
          <td><?php echo $d['agama']?></td>
          <td><?php echo $d['jenis_kelamin']?></td>


          <td>
    <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a> | 
    <a href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
</td>

        <?php
        }
        ?>
      </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>