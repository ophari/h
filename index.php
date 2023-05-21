<?php
 require_once "Display/LinkModelController.php";
   
    $username = isset($_SESSION['username']) ? $_SESSION['username'] :  '<li class="list-item"><a class="login" href="display/user/login.php">Login/Daftar</a><</li>';
   
  $controller = new EditHomeController();
  // panggil method index() untuk mendapatkan data gambar yang akan diupdate
  $row = $controller->GetAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="core/style/style.css"/>
    <link rel="stylesheet" href="core/style/AdminWelcome.css">
</head>
<body>
<div class="img-container">
  <div class="img-wrapper">
    <a href="display/user/form-daftar.php"><img class="center-img" src="../../core/gambar_home/<?php echo $row['gambar']; ?>" alt="Project Image"></a>
  </div>
</div>

    <main>
        <nav class="sidebar">
        <img class="user-logo" src="../../core/asset/icon-user.png" href="welcome.html">
            <ul class="nav-list">
           
                
                <li class="list-item"><a class="login" href="#"><?php echo $username; ?></a></li>
                <li class="list-item"><a class="fa" href="display/user/register.php">Daftar</a></li>
                <li class="list-item"><a class="fa" href="display/user/galeri.php">Galeri</a></li>
                <li class="list-item"><a class="fa" href="display/user/kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="display/user/pendaftaran.php">Daftar Haji & Umroh</a></li>
                <div class="TentangLogout">
                <li class="list-item"><a class="fa tentang-kami" href="core/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a id="logout-link" class="logout" href="../../controller/logout.php">Logout</a></li>
                </div>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="index.php"><img class="img-logo" src="../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="../../core/script/script.js"></script>
    <script>
        $(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
}); 
    </script>


</body>
</html>
