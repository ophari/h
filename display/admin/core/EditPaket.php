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
    <link rel="stylesheet" href="../../../core/style/AdminWelcome.css">
    <link rel="stylesheet" href="../../../core/style/PaketGambar.css">
</head>
<body>
  
<div class="container-Admin">
 <h1>Gambar Paket</h1>
 <table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($row as $r) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                    <img src="../../../core/GambarPaket/<?= $r['gambar'] ?>" alt="<?= $r['gambar'] ?>">
                </td>
                <td>
                    <button type="button" onclick="openPopup(<?php echo $r['id']; ?>)" class="button-paket">Ganti</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
    <div id="popup" class="popup">
<div class="popup-content">
  <h3>Pilih gambar baru</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
    <input type="hidden" name="gambar_lama" value="<?php echo $r['gambar']; ?>">
    <input type="file" id="file-input" name="gambar">
    <label for="file-input" id="file-label">Pilih file</label>
    <span id="file-name"></span>
    <div class="popup-btns">
      <button type="button" class="cancel" onclick="closePopup()">Batal</button>
      <button type="submit" class="update" name="submit">Ganti</button>
    </div>
  </form>
</div>
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
function openPopup(id) {
  document.getElementById("popup").style.display = "block";
  document.querySelector("#popup input[name=id]").value = id;
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
  document.querySelector("#popup input[name=id]").value = "";
  document.querySelector("#popup input[name=gambar_lama]").value = "";
  document.querySelector("#file-input").value = "";
  document.querySelector("#file-name").innerHTML = "";
}

document.querySelector("#file-input").addEventListener("change", function() {
  var filename = this.value.split("\\").pop();
  document.querySelector("#file-name").innerHTML = filename;
});
</script>

</html>
