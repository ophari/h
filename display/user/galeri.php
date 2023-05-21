<?php
require "../LinkModelController.php";
  $gallery = new GaleriController();
  $photos = $gallery->getAllPhotos();
  $username = isset($_SESSION['username']) ? $_SESSION['username'] :  '<li class="list-item"><a class="login" href="login.php">Login/Daftar</a></li>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="../../core/style/style.css"/>
    <link rel="stylesheet" href="../../core/style/galeri.css">
</head>
<body>
<h1>Galeri</h1>
<div class="gallery">
  <div class="main-image">
    <img src="../../core/galeri/<?php echo $photos[0]['nama_file']; ?>" >
  </div>
  <div class="gallery-items">
    <?php foreach ($photos as $index => $photo): ?>
      <?php if ($index !== 0): ?>
        <div class="gallery-item">
          <img src="../../core/galeri/<?php echo $photo['nama_file']; ?>" >
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

    
    </div>
    <nav class="sidebar">
        <img class="user-logo" src="../../core/asset/icon-user.png" href="welcome.html">
            <ul class="nav-list">
           
                <li class="list-item"><a class="login" href="#"><?php echo $username; ?></a></li>
                <li class="list-item"><a class="fa" href="display/user/register.php">Daftar</a></li>
                <li class="list-item"><a class="fa" href="galeri.php">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.php">Daftar Haji & Umroh</a></li>
                <div class="TentangLogout">
                <li class="list-item"><a class="fa tentang-kami" href="core/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a id="logout-link" class="logout" href="../../controller/logout.php">Logout</a></li>
                </div>
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
    <script src="../../core/script/script.js"></script>
</body>

</script>
</script>
</html>
