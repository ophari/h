<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../../../core/style/style.css"/>
    <script src="../../../core/script/jquery.js"></script>
    <script>
    $(document).ready(function() {
      $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });
        });
    </script>
</head>
<body>
    <main>
    <div class="hContainer">
        <table class="schedule-table">
            <thead>
              <tr>
                <th>Tanggal Keberangkatan</th>
                <th>Maskapai</th>
                <th>Tanggal Pulang</th>
                <th>Jumlah</th>
                <th>Jumlah Sisa</th>
                <th>Pilih</th>
              </tr>
            </thead>
            <tbody>
              <tr class="schedule-row">
                <td class="schedule-date">01 Januari 2022</td>
                <td class="schedule-airline">Garuda Indonesia</td>
                <td class="schedule-return-date">10 Januari 2022</td>
                <td class="schedule-availability">20</td>
                <td class="schedule-availability">10</td>
                <td class="schedule-select"><input type="checkbox" name="schedule"></td>
              </tr>
              <tr class="schedule-row">
                <td class="schedule-date">05 Februari 2022</td>
                <td class="schedule-airline">Lion Air</td>
                <td class="schedule-return-date">15 Februari 2022</td>
                <td class="schedule-availability">15</td>
                <td class="schedule-availability">10</td>
                <td class="schedule-select"><input type="checkbox" name="schedule"></td>
              </tr>
            </tbody>
          </table>
        <nav class="sidebar">
          <img class="user-logo" src="../../../core/asset/icon-user.png" alt="user-logo" href="../welcome.html">
            <ul class="nav-list">
                <li class="list-item"><a class="login" href="login.html">Login/Daftar</a></li>
                <li class="list-item"><a class="fa" href="galeri.html">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.html">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="dashboard.html">Dashboard</a></li>
                <li class="list-item"><a class="fa tentang-kami" href="tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a class="logout" href="#">Logout</a></li>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../welcome.php"><img class="img-logo" src="../../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="../../../core/script/script.js"></script>
</body>
</html>
