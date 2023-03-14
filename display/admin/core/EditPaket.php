<?php
require "../../LinkModelController.php";
$controller = new EditPaketControlller();
$row= $controller->GetAll();
$controller->Update();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="../../../core/style/style.css"/>
    <link rel="stylesheet" href="../../../core/style/galeri.css">
    <link rel="stylesheet" href="../../../core/style/PaketGambar.css">
</head>
<body>
    <div class="container-Admin">
<h1>Gambar Paket</h1>
<div class="gallery">
  <div class="main-image-Admin">
        <?php 
      if(!empty($row['gambar'])){
          echo '<img src="../../../core/GambarPaket/'.$row['gambar'].'" >';
      } else {
          echo '<img src="../../../core/GambarPaket/default_image.jpg">';
      }
      ?>
  </div>
</div>
<div class="FormGaleri">
  <form name="form1" action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="hidden" name="gambar_lama" value="<?php echo $row['gambar']; ?>">
    File:
    <input type="file" name="gambar" id="file" onchange="previewImage(event)" accept="image/*"/><br/>
    <div id="imagePreview">
      <img src="../../../core/GambarPaket/<?php echo $row['gambar'];?>" alt="Preview" style="max-width: 150px; max-height: 150px;">
    </div>
    <input type="submit" name="submit" value="Upload"/>
  </form>
</div>
    </div>
    </div>
        <nav class="sidebar">
            <a href="profile.html"><img class="user-logo" src="../../../core/asset/icon-user.png" alt="user-logo" ></a>  
            <ul class="nav-list">
                <li class="list-item"><a class="login" href="login.html">Login/Daftar</a></li>
                <li class="list-item"><a class="fa" href="galeri.html">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.html">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="panduan.html">Panduan</a></li>
                <li class="list-item"><a class="fa tentang-kami" href="tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a class="logout" href="#">Logout</a></li>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../../../index.php"><img class="img-logo" src="../../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="../../core/script/script.js"></script>
</body>

</script>
<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagePreview');
      output.innerHTML = '<img src="' + reader.result + '" alt="Preview" style="max-width: 150px; max-height: 150px;">';
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
</html>
