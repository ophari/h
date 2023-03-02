<?php
session_start();
    if(!isset($_SESSION['id_users'])) {
      echo "<script>alert('Anda harus login terlebih dahulu');window.location='../user/login.html';</script>";
      exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../style/style.css"/>
</head>
<body>
    <main>
    <div class="hContainer">
       <div class="Pa"> 
        <h1 class="heading">Form Pembayaran</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <p>Nama Bank : BSI</p>
        <br><br>
        <p>Nama Rekening : PT Itkontama Jelajah Bumi Imani</p>
        <br><br>
        <p>Nomor Rekening : 7221511411</p>
        <br><br>
        <p>Nominal Pembayaran : </p>
        <br><br>
        <label for="file"></label>
        <span class="fth">Bukti Pembayaran :</span>
        <input type="file" id="file" name="foto" class="file-input bayar" required>
        <div class="button-container pa">
        <a href="konfirmasi_pembayaran.html"><button href="konfirmasi_pembayaran.html" class="right-button kirim" type="submit"  name ="submit" value="submit">Kirim</button></a>
        </div>
        </form>
        <div class="button-container pa">
            <a href="table_jadwal.html"><button class="left-button kmbl">Kembali</button></a>
       </div>
       <nav class="sidebar">
          <a href="profile.php"><img class="user-logo" src="../../core/asset/icon-user.png" alt="user-logo" href="../index.html"></a>  
            <ul class="nav-list">
                <li class="list-item"><a class="login" href="login.php">Login/Daftar</a></li>
                <li class="list-item"><a class="fa" href="galeri.html">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.php">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="panduan.html">Panduan</a></li>
                <li class="list-item"><a class="fa tentang-kami" href="tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a class="logout" href="../../controller/logout.php">Logout</a></li>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../../index.php"><img class="img-logo" src="../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
    </div>
</main>
    <script src="../script/script.js"></script>
</body>
</html>
