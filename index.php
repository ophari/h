<?php
session_start();

if(!isset($_SESSION['id_users'])) {
    header('location: ./display/user/login.php');
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
    <link rel="stylesheet" href="core/style/style.css"/>
</head>
<body>                                                                                                                                                                           
    <main>
    <div class="hContainer">
            <a href="display/user/login.html"><img class="mid-img" src="core/asset/img-index.png" alt="ayo daftar"></img></a>
        <nav class="sidebar">
          <a href="display/user/profile.html"><img class="user-logo" src="core/asset/icon-user.png" alt="user-logo" href="index.html"></a>  
            <ul class="nav-list">
                <li class="list-item"><a class="login" href="./display/user/login.php">Login/Daftar</a></li>
                <li class="list-item"><a class="fa" href="display/user/galeri.html">Galeri</a></li>
                <li class="list-item"><a class="fa" href="display/user/kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="display/user/pendaftaran.php">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="display/user/panduan.html">Panduan</a></li>
                <li class="list-item"><a class="fa tentang-kami" href="display/user/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a class="logout" href="./controller/logout.php">Logout</a></li>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="index.html"><img class="img-logo" src="core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="core/script/script.js"></script>
</body>
</html>
