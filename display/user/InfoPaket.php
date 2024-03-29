<?php
require_once "../LinkModelController.php";
$controller = new InfoPaketController();
$id_foto = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../core/style/InfoPaket.css">
</head>
<body>
<main>
    <div class="hContainer">
           
        <nav class="sidebar">
          <a href="display/user/profile.php"><img class="user-logo" src="../../core/asset/icon-user.png" alt="user-logo" href="index.html"></a>  
            <ul class="nav-list">
                <?php
                if (isset($_SESSION['username'])) {
                    // tampilkan username di tempat li
                    echo '<li class="list-item-login">' . $_SESSION['username'] . '</li>';
                } else {
                    // tampilkan li "Login/Daftar"
                    echo '<li class="list-item"><a class="login" href="./display/user/login.php">Login/Daftar</a></li>';
                }
                ?>
                <!-- <li class="list-item"><a class="login" href="./display/user/login.php">Login/Daftar</a></li> -->
                <li class="list-item"><a class="fa" href="display/user/galeri.php">Galeri</a></li>
                <li class="list-item"><a class="fa" href="display/user/kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="display/user/pendaftaran.html">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="display/user/panduan.html">Panduan</a></li>
                <li class="list-item"><a class="fa tentang-kami" href="display/user/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a class="logout" href="./controller/logout.php">Logout</a></li>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../../index.php"><img class="img-logo" src="../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>

<section class="satu">
<div class="infoContainer">
  <div class="PosisiGambar">
    <div class="boxsize">
    <a class="LinkInfo" href=""><img class="Gambar" src="../../core/info_paket/<?= $controller->ByIdFoto($id_foto); ?>" alt=""></a>
    
    </div>
  </div>
</div>
</section>
</body>
<script src="../../core/script/script.js"></script>
</html>

