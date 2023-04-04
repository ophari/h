<?php
require_once "../LinkModelController.php";
$jadwal = new TableController();
$jadwal->handleForm($id_jadwal);
$id_formulir = $_GET['id_formulir'];
$rows = $jadwal->GetAllJadwal();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../../core/style/style.css"/>
</head>
<body>
    <main>
    <div class="hContainer">
    <?php 
    if($rows){
    ?>
    <form action="" method="post" id="jadwal-form">
    <table class="schedule-table">
        <thead>
            <tr>
                <th>Tanggal Keberangkatan</th>
                <th>Maskapai</th>
                <th>Tanggal Pulang</th>
                <th>Jumlah Sisa</th>
                <th>Pilih</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row = $rows->fetch_assoc()){
            ?>
            <tr class="schedule-row">
                <td class="schedule-date">
                    <input type="date" name="tanggal_keberangkatan" value="<?= $row['tanggal_keberangkatan']; ?>">
                </td>
                <td class="schedule-return-date">
                    <input type="text" name="maskapai" value="<?= $row['maskapai']; ?>">
                </td>
                <td class="schedule-availability">
                    <input type="date" name="tanggal_pulang" value="<?= $row['tanggal_pulang']; ?>">
                </td>
                <td class="schedule-availability">20</td>
                <td class="schedule-select">
                    <input type="radio" name="id_jadwal" value="<?= $row['id_jadwal'];?>" onclick="submitForm()">
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <?php
        // if (isset($_POST['id_jadwal'])) {
        //     $conn = mysqli_connect("localhost","root","","db_haji_umroh") ;
        //     $id_jadwal = $_POST['id_jadwal'];
        //     $sql = "SELECT * FROM jadwal_perjalanan WHERE id_jadwal=$id_jadwal";
        //     $result = $conn->query($sql);
        //     if ($result->num_rows > 0) {
        //         while($row = $result->fetch_assoc()) {
        //             echo '<input type="hidden" name="tanggal_keberangkatan" value="'.$row['tanggal_keberangkatan'].'">';
        //             echo '<input type="hidden" name="maskapai" value="'.$row['maskapai'].'">';
        //             echo '<input type="hidden" name="tanggal_pulang" value="'.$row['tanggal_pulang'].'">';
        //         }
        //     }
        // }
    ?>
    <input type="hidden" name="id_formulir" value="<?= $id_formulir; ?>">
    <a href="form-daftar.php">
        <button class="smpn sm-4"><p>Kembali</p></button>
    </a>
    <button class="smpn sm-2" type="submit" name="submit" ><p>Kirim</p></button>
</form>
            <?php 
            }
            ?>
        <nav class="sidebar">
          <a href="profile.php"><img class="user-logo" src=".././core/asset/icon-user.png" alt="user-logo"></a>  
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
          <a href="../../index.php"><img class="img-logo" src="../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="../../core/script/script.js"></script>
    <script>
// Add event listener to all radio buttons
var radioButtons = document.querySelectorAll('input[type=radio][name="id_jadwal"]');
radioButtons.forEach(function(radioButton) {
  radioButton.addEventListener('change', function() {
    // When radio button is selected, submit the form
    this.closest('form').submit();
  });
});
</script>
</body>
</html>